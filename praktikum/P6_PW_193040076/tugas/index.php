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
        <link rel="stylesheet" href="">

        <title>Tugas</title>
       

    </head>
    
<body>

    <!-- menggunakan navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">FJR Master</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <div class="admin">
                    <li class="nav-item">
                        <a class="nav-link" href="php/admin.php">Admin</a>
                    </li>
                </div>
                </ul>
                <form action="" method="get" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Cari" aria-label="Cari" autofocus>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
                </form>
            </div>
    </div>
</nav>

        <!-- menggunakan card -->
        <div class="container">
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