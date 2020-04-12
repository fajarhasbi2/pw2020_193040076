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
    $lap = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

<html>
    <head>
    
        <title>latihan5c</title>
        <!-- <link rel="stylesheet" href="style.css"> -->

    </head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $lap["gambar"]; ?>" alt="">
         </div>
            <div class="keterangan">
                <p><?= $lap["prosesor"]; ?></p>
                <p><?= $lap["memori"]; ?></p>
                <p><?= $lap["storage"]; ?></p>
                <p><?= $lap["harga"]; ?></p>
            </div>

            <button class="tombol_kembali"> <a href="../index.php">kembali</a> </button>
    </div>
</body>
</html>
