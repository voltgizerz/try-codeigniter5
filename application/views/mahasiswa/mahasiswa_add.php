<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Guided Modul 5</title>
</head>

<body>
    <div class="container">
        <div class="card mb-3" style="50%; margin-top:50px;">
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="card-header">
                <a href="<?php echo site_url('mahasiswa') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body">
                <h1 class="text-center" style="color:red;">Tambah Data Mahasiswa</h1>
                <form action=" <?php base_url('mahasiswa/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama" style="color:blue;">Nama</label>
                        <input class="form-control" type="text" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label for="npm" style="color:blue;">NPM</label>
                        <input class="form-control" type="text" name="npm" required />
                    </div>
                    <div class="form-group">
                        <label for="fakultas" style="color:blue;">Fakultas</label>
                        <input class="form-control" type="text" name="fakultas" required />
                    </div>
                    <div class="form-group">
                        <label for="prodi" style="color:blue;">Program Studi</label>
                        <input class="form-control" type="text" name="prodi" required />
                    </div>
                    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>