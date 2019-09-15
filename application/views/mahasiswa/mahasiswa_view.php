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
            background-color: mediumturquoise;
        }
    </style>

</head>

<body class=bg>

    <!-- Table -->
    <div class="container">

        <h1 style="color:darkmagenta;  font-weight: bold; " class="text-center mt-2">Data Mahasiswa</h1>
        <a class="btn btn-success" href="<?php echo site_url('mahasiswa/add') ?>" role="button" style="margintop:30px;
margin-bottom:5px; background-color:blue; ">Tambah</a>
        <a class="btn btn-success" href="<?php echo site_url('LaporanMahasiswa') ?>" role="button" style="margintop:30px;
margin-bottom:5px; background-color:RED; ">Cetak ke PDF</a>
        <a class="btn btn-success" href="<?php echo site_url('buku') ?>" role="button" style="margintop:30px;
margin-bottom:5px; background-color:black; ">Buku</a>
        <table class="table table-striped table-primary" style="color:blue; background-color:#A41924" ;>
            <thead style="color:yellow; background-color:#A41924">
                <tr>
                    <th scope="col" style="text-align:center">ID</th>
                    <th scope="col" style="text-align:center">NAMA</th>
                    <th scope="col" style="text-align:center">NPM</th>
                    <th scope="col" style="text-align:center">FAKULTAS</th>
                    <th scope="col" style="text-align:center">PROGRAM STUDI</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = $this->uri->segment('3') + 1;
                foreach ($mahasiswa as $mahasiswas) : ?>
                    <tr class="table-success">
                        <td style="background-color:orange; text-align:center"><?php echo $mahasiswas->ID ?></td>
                        <td style="background-color:pink"><?php echo $mahasiswas->NAMA ?></td>
                        <td style="background-color:yellow; text-align:center"><?php echo $mahasiswas->NPM ?></td>
                        <td style="background-color:pink"><?php echo $mahasiswas->FAKULTAS ?></td>
                        <td style="background-color:yellow"><?php echo $mahasiswas->PRODI ?></td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
        <p><?php echo $links; ?></p>
    </div>

</body>

</html>