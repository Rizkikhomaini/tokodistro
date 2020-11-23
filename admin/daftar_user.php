 <?php
//session_start();

include ('action/koneksi.php');
//$username = $_SESSION['username'];
?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
      <h1>
         Table Admin
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Admin</li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Admin</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="20%">Username</th>
                      
                      <th width="25%">Password</th>
                      <th width="28%">Nama</th>
                      <th width="15%">Foto</th>
                      <th width="15%">Level</th>
                      <th width="7%"> Actions </th>
                    </tr>
                    </thead>
                     <tbody>
                    <?php $no=1;  
            $query=mysqli_query($conn,"SELECT * from tbl_user");
            while($r=mysqli_fetch_assoc($query)){

                     ?>
                    <tr>
                    <?php
                    $pw = md5(base64_decode($r['password'])); ?>
                       <td><?php echo $no; ?></td>
                      <td><?php echo $r['username'] ?></td>
                      <td><?php echo $pw ?></td>
                      <td><?php echo $r['nama'] ?></td>
                      <td><?php echo $r['foto'] ?></td>
                      <td><?php echo $r['level'] ?></td>
                      <td>
                     <?php

echo"
<form enctype=multipart/form-data method=post action=?page=edit_user>";
?>
    <input name="id" type="hidden" id="id" class="form-control" placeholder="id" required="" value="<?php echo $r['id_user'] ?>">

                       <div class="btn-group">
                      <button name="simpan" type="submit" class="btn btn-success btn-sm btn-flat"><i class="fa fa-edit"></i> </button>
                      </div>
                         </form>
                          <?php

echo"
<form enctype=multipart/form-data method=post action=action/user_delete.php>";
?>
    <input name="id" type="hidden" id="id" class="form-control" placeholder="id" required="" value="<?php echo $r['id_user'] ?>">

                        <div class="btn-group">
                        <button  type="submit" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash"></i> </button>
                           </div>
                         </form>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>