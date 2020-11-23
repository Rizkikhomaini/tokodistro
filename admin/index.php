<?php
date_default_timezone_set('Asia/Jakarta');
session_start();
include 'action/koneksi.php';
include 'action/function-tanggal.php';
if (!EMPTY($_SESSION['username']) && $_SESSION['password']) {
  $cek_user=$_SESSION['username'];
  $cek_password=$_SESSION['password'];
  $qadmin=mysqli_query($conn,"select * from tbl_user where username='$cek_user' and password='$cek_password' ");
  $user = mysqli_fetch_assoc($qadmin) or die(mysqli_error());
}
else {
  header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Informasi Geografis Distro di Kota Bandar Lampung</title>

  <!-- Main Styles -->
  <link rel="stylesheet" href="assets/styles/style.min.css">

  <!-- Material Design Icon -->
  <link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

  <!-- mCustomScrollbar -->
  <link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">
  <!-- Date Picker css -->
  <link rel="stylesheet" href="assets/plugin/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" />
  <!-- <link rel="stylesheet" href="assets/plugin/datepicker/css/bootstrap-datepicker.min.css" /> -->

  <!-- Waves Effect -->
  <link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

  <!-- Sweet Alert -->
  <link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
  <script src="tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
    selector: 'textarea',
    height: 150,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor textcolor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table contextmenu paste code help'
    ],
    toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css']
    });
  </script>
  <!-- Data Tables -->
  <link rel="stylesheet" href="assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">
  <script>

      function printDiv(divName) {
         var printContents = document.getElementById(divName).innerHTML;
         var originalContents = document.body.innerHTML;

         document.body.innerHTML = printContents;

         window.print();

         document.body.innerHTML = originalContents;
      }
  </script>
  <style type="text/css">
      .modal-backdrop {
          /* bug fix - no overlay */    
          display: none;    
          overflow: auto;
      }
      .modal-content{
        padding-top: 60px;
        width: 800px;
      }
    </style>
</head>
<body>
<?php require_once 'header.php'; ?>
<div id="wrapper">
  <div class="main-content">
    <?php
    include 'notif.php';
      if(!empty($_GET['page'])){
        $page=$_GET['page'].".php";
         if(file_exists($page)){
              include "$page";
              //echo $page;
          }else{
              include("404.html");
         }
      }else{
        include("home.php");
      }
    ?>

    <footer class="footer">
      <ul class="list-inline">
        <li>2019 © Sistem Informasi Geografis Distro di Kota Bandar Lampung</li>
      </ul>
    </footer>
  </div>
  <!-- /.main-content -->
</div><!--/#wrapper -->
<!-- Modal -->
<?php //include 'modal.php'; ?>
<!-- Placed at the end of the document so the pages load faster -->
<!-- javascript -->
<script src="assets/scripts/jquery.min.js"></script>


<script src="assets/scripts/modernizr.min.js"></script>
<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Datepicker js -->
<!-- Date picker.js -->
<!-- <script src="assets/plugin/datepicker/js/bootstrap-datepicker.min.js"></script> -->
<script src="assets/plugin/datepicker/js/moment-with-locales.min.js"></script>
<script type="text/javascript" src="assets/plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="assets/plugin/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugin/nprogress/nprogress.js"></script>
<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
<script src="assets/plugin/waves/waves.min.js"></script>
<!-- Form Wizard -->
<script src="assets/plugin/form-wizard/prettify.js"></script>
<script src="assets/plugin/form-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/plugin/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/scripts/form.wizard.init.min.js"></script>
<!-- Validator -->
<script src="assets/plugin/validator/validator.min.js"></script>

<script type="text/javascript">
$(function () {
      $('#tgl-form').datetimepicker({
          format: 'YYYY-MM-DD H:s'
      });
  });
  $(function () {
        $('#invoiced_a').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });

  $(function () {
        $('#tgl-formpeng').datetimepicker({
            format: 'YYYY-MM-DD H:s'
        });
    });
    $(function () {
          $('#tgl-formfpeng').datetimepicker({
              format: 'YYYY-MM-DD H:s'
          });
      });
    $(function () {
          $('#tgl-kaskecil').datetimepicker({
              format: 'YYYY-MM-DD H:s'
          });
      });
</script>
<!-- Data Tables -->
<script src="assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
<script src="assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
<script src="assets/scripts/datatables.demo.min.js"></script>
<script src="assets/scripts/main.min.js"></script>


<script>
   $(function() {
  // rating form hide/show
  $( "#rateProduct" ).click(function() {
    $("#ratingDetails").hide();
    $("#ratingSection").show();
  }); 
  $( "#cancelReview" ).click(function() {
    $("#ratingSection").hide();
    $("#ratingDetails").show();   
  }); 
  // implement start rating select/deselect
  $( ".rateButton" ).click(function() {
    if($(this).hasClass('btn-grey')) {      
      $(this).removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
      $(this).prevAll('.rateButton').removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
      $(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');     
    } else {            
      $(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');
    }
    $("#rating").val($('.star-selected').length);   
  });
  // save review using Ajax
  $('#ratingForm').on('submit', function(event){
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type : 'POST',
      url : 'saveRating.php',
      data : formData,
      success:function(response){
        window.location.reload();
         $("#ratingForm")[0].reset();
      }
    });   
  });
});
</script>
</html>
