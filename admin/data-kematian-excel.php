<?php
require '../function/function.php';

$query_penduduk = view("SELECT * FROM tb_kematian");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan-Excel.xls");

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
        <h1 class="text-center"><b>DATA KEMATIAN</b></h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penduduk</th>
                    <th>Nik</th>
                    <th>Tanggal Kematian</th>
                    <th>Penyebab Kematian</th>
                    <th>Tempat Kematian</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                while ($row = mysqli_fetch_assoc($query_penduduk)) :



                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['nama_penduduk'] ?></td>
                        <td><?= $row['nik'] ?></td>
                        <td><?= $row['tgl_mati'] ?></td>
                        <td><?= $row['penyebab_mati'] ?></td>
                        <td><?= $row['tempat_mati'] ?></td>
                    </tr>
                <?php endwhile; ?>

            </tbody>
        </table>

























        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>