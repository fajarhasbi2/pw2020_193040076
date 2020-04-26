<?php 

// mengecek apakah ada id yang di kirimkan
// jika tidak maka akan dikembalikan ke halaman index.php

    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

 // mengambil id dari url
    $id = $_GET['id'];

// melakukan query dengan parameter id ang diambil dari url
    $elek = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

<html>
    <head>
        <!-- css bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    
        <title>Latihan 7c</title>

    </head>

<body class="bg-dark">

    <!-- menngunakan jumbotrone -->

    <div class="jumbotron jumbotron-fluid  bg-success">
  <div class="container">
    <h1 class="display-4 text-center text-light"><b>SPESIFIKASI</b></h1>
  </div>
</div>

    <!-- menggunakan card -->
    <div class="card border-success mb-3 bg-dark" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="../assets/img/<?= $elek["gambar"]; ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <table class="table table-striped table-dark">
                    <thead>
                        <tr class="bg-success text-center">
                            <th colspan="3"><p><?= $elek["tipe"]; ?></p></<p></th>
                        </tr>

                        <tr>
                            <th scope="col">Prosesor</th>
                            <th scope="col">Memori</th>
                            <th scope="col">Storage</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><p><?= $elek["prosesor"]; ?></p></td>
                            <td><p><?= $elek["memori"]; ?></p></td>
                            <td><p><?= $elek["storage"]; ?></p></td>
                        </tr>

                        <tr>
                            <th colspan ="2">Harga</th>
                            <th><p><?= $elek["harga"]; ?></p></th>
                        </tr>
                        <tr>
                            <th colspan="2"></th>
                            <th> <a href="../index.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Kembali</button></a></th>
                        </tr>

                    </tbody>
                </table>
      </div>
    </div>
  </div>
</div>


    








    <!-- javascript -->
<script src="../js/jquery-3.5.0.slim.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
