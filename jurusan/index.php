<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Crud</title>
  </head>
<style>
body {font-family: Arial, Helvetica, sans-serif;
    background-color: #ADD8E6;
}

.navbar {
  width: 100%;
  background-color: #8CC0DE;
  overflow: auto;
}

.form-control{
   font-size: 18px;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 20px;
}

.navbar a:hover {
  background-color: #87CEFA;

}

.active {
  background-color: #ADD8E6;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>
<div class="navbar">
  <a class="navbar-brand" href="#">
  <img src="../images/logosmk.png" alt="" width="80" height="70" class="me-2"></a>
  <br>
  <a href="home.php"><i class=""></i> Home</a> 
  <a href="jurusan/index.php"><i class=""></i> Jurusan</a> 
  <a href="pendaftaran/index.php"><i class=""></i> Pendaftaran</a> 
  <a href="pembayaran/index.php"><i class=""></i>Pembayaran</a>
  <br>
</div>
<br><br>
        <div class="container">
        <div class="card">
            <div class="card-header">
                <center><h3>Data Jurusan</h3></center>
                <br>
                <center><a href="create.php" class="btn btn-primary">Tambah Data</a></center>
            </div>
            <div class="card-body">
                <!-- TABLE DOSEN -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Kode Jurusan</th>
                        <th scope="col">Jurusan</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php
                            include'../database.php';
                            $jurusan =  new jurusan();
                            $no = 1;
                            foreach ($jurusan->index() as $data){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $data['kode_jurusan'] ?></td>
                        <td><?php echo $data['jurusan'] ?></td>
                        <td></td>
                        <td>
                            <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Show</a> 
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a> 
                            <form action="proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                           </form>
                        </td>
                        </tr>
                      <?php
                            }
                        ?>
                    </tbody>
                </table>
                 <!-- /TABLE DOSEN -->
            </div>
        </div>
        </div>
  </body>
</html>