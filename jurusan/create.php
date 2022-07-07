<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
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
  
            <center><h2>Jurusan</h2></center>
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="card-header">
                Tambah Jurusan
            </div>
            <div class="card-body">
                
            <form action="../jurusan/proses.php" method="post">
                <input type="hidden" name="aksi" value="create">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Jurusan</label> 
                        <input type="text" class="form-control" name="kode_jurusan" >
                        <small id="emailHelp" class="form-text text-muted">We'll never share your code with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your code with anyone else.</small>
                    </div>
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
        </div>
  </body>
</html>