<?php require 'template/header.php';
require '../function/function.php';

// query wisata
$query_kk = mysqli_query($conn, "SELECT * FROM tb_kk");
// query produk
$query_penduduk = mysqli_query($conn, "SELECT* FROM tb_data_penduduk");
// query informasi
$query_lahiran = mysqli_query($conn, "SELECT * FROM tb_lahiran");
// query user
$query_kematian = mysqli_query($conn, "SELECT * FROM tb_kematian");

?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <?php if ($_SESSION['level']['role'] == 'staff') { ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">

              <?php $count_user = mysqli_num_rows($query_kk); ?>

              <h3><?= $count_user ?></h3>
              <p>Jumlah KK</p>
            </div>
            <div class="icon">
              <i class=" glyphicon glyphicon-user"></i>
            </div>
            <a href="user.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

              <?php $count_wisata = mysqli_num_rows($query_penduduk); ?>

              <h3><?= $count_wisata ?></h3>
              <p>Jumlah Penduduk</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-camera"></i>
            </div>
            <a href="wisata.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">

              <?php $count_produk = mysqli_num_rows($query_lahiran); ?>

              <h3><?= $count_produk ?></h3>
              <p>Jumlah Lahiran</p>
            </div>

            <div class="icon">
              <i class=" glyphicon glyphicon-cutlery"></i>
            </div>
            <a href="produk.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">

              <?php $count_informasi = mysqli_num_rows($query_kematian); ?>

              <h3><?= $count_informasi != null ? $count_informasi : 0 ?></h3>
              <p>Jumlah Kematian</p>
            </div>
            <div class="icon">
              <i class=" glyphicon glyphicon-envelope"></i>
            </div>
            <a href="informasi.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->

        

        
        

      <?php } else {
      ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

              <?php $count_wisata = mysqli_num_rows($query_kk); ?>

              <h3><?= $count_wisata ?></h3>
              <p>Jumlah KK</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-camera"></i>
            </div>
            <a href="wisata.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">

              <?php $count_produk = mysqli_num_rows($query_penduduk); ?>

              <h3><?= $count_produk ?></h3>
              <p>Jumlah Penduduk</p>
            </div>

            <div class="icon">
              <i class=" glyphicon glyphicon-cutlery"></i>
            </div>
            <a href="produk.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->

      

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">

              <?php $count_informasi = mysqli_num_rows($query_lahiran); ?>

              <h3><?= $count_informasi != null ? $count_informasi : 0 ?></h3>
              <p>Jumlah Lahiran</p>
            </div>
            <div class="icon">
              <i class=" glyphicon glyphicon-envelope"></i>
            </div>
            <a href="informasi.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">

              <?php $count_user = mysqli_num_rows($query_kematian); ?>

              <h3><?= $count_user ?></h3>
              <p>Jumlah Kematian</p>
            </div>
            <div class="icon">
              <i class=" glyphicon glyphicon-user"></i>
            </div>
            <a href="user.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
      <?php } ?>


    </div><!-- /.row -->


  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require 'template/footer.php' ?>