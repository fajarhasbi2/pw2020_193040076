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
    
        <title>latihan 6e</title>

    </head>

<body>

    <!-- menngunakan jumbotrone -->

    <div class="jumbotron jumbotron-fluid  bg-primary">
  <div class="container">
    <h1 class="display-4 text-center text-light"><b>SPESIFIKASI</b></h1>
  </div>
</div>

    <!-- menggunakan card -->
    <section>
<div class="row">
            <div class="col-6-col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/img/<?= $elek["gambar"]; ?>" class="card-img-top" alt="...">
                </div>
            </div>


            <div class="col-md-8">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr class="bg-primary text-center">
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
            </div>
                        <tr>
                            <th colspan="2"></th>
                            <th><button type="button" class="btn btn-warning"><a href="../index.php">kembali</button></th>
                        </tr>

                    </tbody>
                    
</div>
</section>

































    <!-- javascript -->
<script src="../js/jquery-3.5.0.slim.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
