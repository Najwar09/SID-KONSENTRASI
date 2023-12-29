<?php
require '../function/function.php';

$query_penduduk = view("SELECT * FROM tb_surat_masuk");

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
        <h1 class="text-center"><b>DATA SURAT MASUK</b></h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal Terima</th>
                    <th>Asal Surat</th>
                    <th>Perihal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                while ($row = mysqli_fetch_assoc($query_penduduk)) :



                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['no_surat'] ?></td>
                        <td><?= $row['tgl_surat'] ?></td>
                        <td><?= $row['tgl_terima'] ?></td>
                        <td><?= $row['asal_surat'] ?></td>
                        <td><?= $row['perihal'] ?></td>
                    </tr>
                <?php endwhile; ?>

            </tbody>
        </table>

























        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>