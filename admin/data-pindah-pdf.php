<?php
require '../function/function.php';

$query_penduduk = view("SELECT * FROM tb_data_pindah");


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center"><b>DATA PENDUDUK PINDAH</b></h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Penduduk</th>
                    <th>Tanggal Pindah</th>
                    <th>Alasan</th>
                    <th>Alamat Baru</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                while ($row = mysqli_fetch_assoc($query_penduduk)) :


                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['nik'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['tgl_pindah'] ?></td>
                        <td><?= $row['alasan'] ?></td>
                        <td><?= $row['alamat_baru'] ?></td>
                    </tr>
                <?php endwhile; ?>

            </tbody>
        </table>



















        <script>
            window.print();
        </script>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>