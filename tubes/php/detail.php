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

        <!-- my css -->
        <link rel="stylesheet" href="../css/style2.css">

        <!-- font -->
        <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Playfair+Display&display=swap" rel="stylesheet">
    
        <title>Detail</title>

    </head>

<body style="background-color: black;">

    <!-- menngunakan jumbotrone -->

    <div class="jumbotron jumbotron-fluid" style="background-color: black;">
        <div class="gambar">
            <h1 class="display-4"></h1>
        </div>
    </div>

    <section>

    <!-- menggunakan card -->
<div class="container" >
    <div class="card mb-3" style="background-color: black; padding-left:130px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="../assets/img/<?= $elek["gambar"]; ?>" class="card-img" alt="...">
            </div>
                <h1 style="color:white;"><?= $elek["tipe"]; ?></h1>
            <div class="col-md-8">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

    
<div class="jumbotron jumbotron-fluid" style="background-color: black;">
        <div class="gambar1">
            <h1 class="display-4 ">Processor<br><br><?= $elek["prosesor"]; ?></h1>
        </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background-color: black;">
        <div class="gambar2">
            <h1 class="display-5 ">Memori<br><br><?= $elek["memori"]; ?></h1>
        </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background-color: black;">
        <div class="gambar3">
            <h1 class="display-6 ">Storage<br><br><?= $elek["storage"]; ?></h1>
        </div>
</div>


<div class="container">
    <div class="card mb-3" style="background-color: black; margin-top:-80px;">
        <div class="card-body" align="center">
            <h1 class="card-title">Price</h1>
            <h2 class="card-text"><?= $elek["harga"]; ?></h2>
    </div>
    <a align="center" href="product.php"><button class="btn btn-outline-light my-2 my-sm-0" type="submit">Kembali</button></a></th>
</div>

</section>

<footer class="bg-dark text-white">
  <div class="container">
    <div class="row pt-3">
      <div class="col text-center">
        <p>Copyright &copy; 2020. Fajar Hasbi Noer. </p>
        </div>
        </div>
      </div>
    </div>
</footer>








    <!-- javascript -->
<script src="../js/jquery-3.5.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
