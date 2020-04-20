<?php
    require 'php/functions.php';

    if(isset($_GET['cari'])){
        $keyword = $_GET['keyword'];
        $leptop = query("SELECT * FROM elektronik WHERE
                    tipe LIKE '%$keyword%'");
    } else{
        $leptop = query("SELECT * FROM elektronik");
    }

?>

<html>
    <head>
        <!-- css bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- my css -->
        <link rel="stylesheet" href="css/style.css">

        <title>Tugas</title>
       

    </head>
    
<body>

    <!-- menggunakan navbar -->
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
                <a class="navbar-brand col text-center text-white">Laptop Gaming</a>
            </nav>
        </div>

    <!-- menggunakan card -->
        <div class="container">
            <a href="php/admin.php">
                <button>Ke halaman admin</button>
            </a>

            <form action="" method="get">
                <input type="text" name="keyword" autofocus>
                <button type="submit" name="cari">Cari</button>
            </form>

            <div class="row">

            <?php if(empty($leptop)) :?>
                    
                <h1>Data tidak ditemukan</h1>
                    
            <?php else :?>

                <?php foreach ($leptop as $elek) :?>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body" style="">
                                <h5 class="card-title"><?= $elek["tipe"] ?></h5>
                                    <a href="php/detail.php?id=<?= $elek['id'] ?>" class="btn btn-primary">pilih</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
            </div>
            
        </div>

   






<script src="js/jquery-3.5.0.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>