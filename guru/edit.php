<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
  </style>
<body>
            <center><h2>Edit Data Guru</h2></center>
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="card-body">
            <?php
                include '../database.php';
                $guru = new guru();
                foreach ($guru->edit($_GET['no']) as $data) {
                    $no = $data['no'];
                    $nip = $data['nip'];
                    $nama = $data['nama'];
                    $alamat = $data['alamat'];
                }
            ?>
            <form action="../guru/proses.php" method="post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="no" value="<?php echo $no; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">nip</label> 
                        <input type="text" class="form-control" name="nip" value="<?php echo $nip; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                    </div>
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
        </div>
  </body>
</html>