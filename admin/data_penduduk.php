<?php
require 'template/header.php';
require '../function/function.php';

$query_penduduk = view("SELECT * FROM tb_data_penduduk WHERE keterangan = ''");

?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Penduduk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Penduduk</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Penduduk</h3>
                    </div><!-- /.box-header -->


                    <div class="box-body">

                        <a href="tambah_data_penduduk.php" class="btn bg-olive" style="margin:10px 0;">Tambah</a>
                        <a class="btn bg-yellow" style="margin:10px 0;" onclick="window.open('data-excel.php')">Convert Ke Excel</a>
                        <a class="btn bg-blue" style="margin:10px 0;" onclick="window.open('data-pdf-penduduk.php')">Convert Ke PDF</a>


                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No KK</th>
                                    <th>Nik</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Usia</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Desa</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Agama</th>
                                    <th>Status Nikah</th>
                                    <th>Pekerjaan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $i = 1;
                            
                            while ($row = mysqli_fetch_assoc($query_penduduk)) :
                                $tanggal_lahir = $row['tanggal_lahir']; // Contoh tanggal lahir
                                $tanggal_sekarang = date('Y-m-d'); // Tanggal saat ini
    
                                // Konversi string tanggal menjadi objek DateTime
                                $tanggal_lahir_obj = new DateTime($tanggal_lahir);
                                $tanggal_sekarang_obj = new DateTime($tanggal_sekarang);
    
                                // Hitung perbedaan tanggal
                                $perbedaan = $tanggal_lahir_obj->diff($tanggal_sekarang_obj);


                            ?>
                                <tbody>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['no_kk'] ?></td>
                                    <td><?= $row['nik'] ?></td>
                                    <td><?= $row['nama_lengkap'] ?></td>
                                    <td><?= $row['tempat_lahir'] ?></td>
                                    <td><?= $row['tanggal_lahir'] ?></td>
                                    <td><?= $perbedaan->y; ?></td>
                                    <td><?= $row['jkel'] ?></td>
                                    <td><?= $row['rt'] ?></td>
                                    <td><?= $row['rw'] ?></td>
                                    <td><?= $row['desa'] ?></td>
                                    <td><?= $row['agama'] ?></td>
                                    <td><?= $row['status_nikah'] ?></td>
                                    <td><?= $row['pekerjaan'] ?></td>

                                    <td>
                                        <a href="hapus_data_penduduk.php?id=<?= $row['id_penduduk'] ?>&no_file=6" class="btn normal bg-maroon">Hapus</a>
                                        <a href="edit_data_penduduk.php?id=<?= $row['id_penduduk'] ?>&no_file=6" class="btn normal bg-yellow">Edit</a>

                                    </td>
                                </tbody>

                            <?php endwhile; ?>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require 'template/footer.php' ?>