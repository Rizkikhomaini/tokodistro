
<script src="rating.js"></script>
<link rel="stylesheet" href="style.css">

<div class="container">   
  <?php
  include_once("action/koneksi.php");
  $ratingDetails = "SELECT ratingNumber FROM item_rating";
  $rateResult = mysqli_query($conn, $ratingDetails) or die("database error:". mysqli_error($conn));
  $ratingNumber = 0;
  $count = 0;
  $fiveStarRating = 0;
  $fourStarRating = 0;
  $threeStarRating = 0;
  $twoStarRating = 0;
  $oneStarRating = 0;
  while($rate = mysqli_fetch_assoc($rateResult)) {
    $ratingNumber+= $rate['ratingNumber'];
    $count += 1;
    if($rate['ratingNumber'] == 5) {
      $fiveStarRating +=1;
    } else if($rate['ratingNumber'] == 4) {
      $fourStarRating +=1;
    } else if($rate['ratingNumber'] == 3) {
      $threeStarRating +=1;
    } else if($rate['ratingNumber'] == 2) {
      $twoStarRating +=1;
    } else if($rate['ratingNumber'] == 1) {
      $oneStarRating +=1;
    }
  }
  $average = 0;
  if($ratingNumber && $count) {
    $average = $ratingNumber/$count;
  } 
  ?>  


  <br>    
  <div id="ratingDetails">    
    <div class="row">     
      <!--<div class="col-sm-3">        
        <h2 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?> <small>/ 5</small></h2>        
        <?php
        $averageRating = round($average, 0);
        for ($i = 1; $i <= 5; $i++) {
          $ratingClass = "btn-default btn-grey";
          if($i <= $averageRating) {
            $ratingClass = "btn-warning";
          }
        ?>
        <button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        </button> 
        <?php } ?>        
      </div>-->





    <div class="col-sm-3">
      <button type="button" id="rateProduct" class="btn btn-default" >Rate this product </button>
      </div>    
    </div>
    <div class="row">
      <div class="col-sm-7">
        <hr/>
        <div class="review-block">    
        <?php
        $ratinguery = "SELECT ratingId, itemId, userId, ratingNumber, title, comments, created, modified,nama_toko FROM item_rating inner join tbl_toko on item_rating.itemId=tbl_toko.id_toko";
        $ratingResult = mysqli_query($conn, $ratinguery) or die("database error:". mysqli_error($conn));
        while($rating = mysqli_fetch_assoc($ratingResult)){
          $date=date_create($rating['created']);
          $reviewDate = date_format($date,"M d, Y");      
        ?>        
            <div class="row">
            <div class="col-sm-9">
              <div><span class="badge bg-primary"><h5><?php echo $rating['nama_toko']; ?></h5></span></div><br>
              <div class="review-block-rate">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                  $ratingClass = "btn-default btn-grey";
                  if($i <= $rating['ratingNumber']) {
                    $ratingClass = "btn-warning";
                  }
                ?>
                <button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>               
                <?php } ?>
              </div>
              <div class="review-block-title"><?php echo $rating['title']; ?></div>
              <div class="review-block-description"><?php echo $rating['comments']; ?></div>
            </div>
          </div>
          <hr/>         
        <?php } ?>
        </div>
      </div>
    </div>
  </div>

        
  <div id="ratingSection" style="display:none;">
    <div class="row">
      <div class="col-sm-12">
        <form id="ratingForm" method="POST">          
          <div class="form-group">
            <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <input type="text" class="form-control" id="rating" name="rating" value="0">
            <input type="hidden" class="form-control" id="itemId" name="itemId" value="12345678">
          </div>
          <div class="form-group">
            <select name="tbl_toko" class="form-control">
            <?php
            $conn = mysqli_connect("localhost","root","","sigmusik");
            $query = "SELECT * from tbl_toko";
            $hasil = mysqli_query($conn,$query);
            while($data=mysqli_fetch_array($hasil)){
              echo "<option value=$data[id_toko]>$data[nama_toko]</option>";
            }
            ?>
            </select>
          </div>
          <br>  
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
          </div>      
        </form>
      </div>
    </div>
  </div>  




  <div style="margin:50px 0px 0px 0px;">
       
  </div>
</div>  







