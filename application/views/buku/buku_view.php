<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Guided Modul 5</title>
    <style>
        .bg {
            background-color: mediumseagreen;
        }
    </style>


</head>

<body class="bg">

    <!-- Table -->
    <div class="container">

        <h1 style="color:yellow;  font-weight: bold; " class="text-center mt-2">Data Buku</h1>
        <a class="btn btn-success" href="<?php echo site_url('buku/add') ?>" role="button" style="margintop:30px;
margin-bottom:5px; background-color:blue; ">Tambah</a>
        <a class="btn btn-success" href="<?php echo site_url('LaporanBuku') ?>" role="button" style="margintop:30px;
margin-bottom:5px; background-color:RED; ">Cetak ke PDF</a>
        <a class="btn btn-success" href="<?php echo site_url('mahasiswa') ?>" role="button" style="margintop:30px;
margin-bottom:5px; background-color:black; ">Mahasiswa</a>
        <table class="table table-striped table-primary" style="color:black; background-color:#A41924" ;>
            <thead style="color:yellow; background-color:#A41924">
                <tr>
                    <th scope="col" style="text-align:center">ID</th>
                    <th scope="col" style="text-align:center">NAMA BUKU</th>
                    <th scope="col" style="text-align:center">PENGARANG</th>
                    <th scope="col" style="text-align:center">JUMLAH HALAMAN</th>
                    <th scope="col" style="text-align:center">PENERBIT</th>
                    <th scope="col" style="text-align:center">TAHUN TERBIT</th>
                    <th scope="col" style="text-align:center">KATEGORI BUKU</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($buku as $bukus) : ?>
                    <tr class="table-success">
                        <td style="background-color:orange; text-align:center"><?php echo $bukus->id ?></td>
                        <td style="background-color:yellow"><?php echo $bukus->nama_buku ?></td>
                        <td style="background-color:pink; text-align:center"><?php echo $bukus->pengarang ?></td>
                        <td style="background-color:yellow; text-align:center"><?php echo $bukus->jumlah_halaman ?></td>
                        <td style="background-color:pink; text-align:center"><?php echo $bukus->penerbit ?></td>
                        <td style="background-color:yellow; text-align:center"><?php echo $bukus->tahun_terbit ?></td>
                        <td style="background-color:pink; text-align:center"><?php echo $bukus->kategori_buku ?></td>
                    </tr>

                <?php endforeach ?>

            </tbody>
        </table>
        <p><?php echo $links; ?></p>
    </div>

</body>

</html>