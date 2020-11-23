<!DOCTYPE html>
<html>
<head>
  <?php
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<section class="ftco-section contact-section ftco-degree-bg">
     
          <div class="col-md-6 pr-md-12">
          <p> <h2 class="h4">Kritik & Saran</h2></p>
            <form action="admin/action/komentar_simpan.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="nama" placeholder="Nama" required="true">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="true">
              </div>
              <div class="form-group">
                <textarea name="komentar" id="" cols="30" rows="7" class="form-control" placeholder="Kritik & Saran" required="true"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Kirim" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

         
        </div>
      </div>
    </section>

   

</body>
</html> 