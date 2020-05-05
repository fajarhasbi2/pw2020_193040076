<?php
    require 'functions.php';

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
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!-- my css -->
        <link rel="stylesheet" href="../css/style3.css">
        <style>
        .spinner-border{
            display:none;
        }
        </style>

        <!-- my fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        

        <title>Product</title>
        <script src="../js/jquery-3.5.0.min.js"></script>
        <script src="../js/script1.js"></script>
       

    </head>
    
<body style="background-color: black;">

    

    <!-- menggunakan navbar -->
    
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><b>FJRMaster</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php"><i>Home</i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#home"><i>Product</i></a>
                    </li>
            </div>

                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="login.php"><button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button></a>
                    </li>
                </ul>
            <form action="" method="get" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Cari" aria-label="Cari" id="keyword" autofocus>
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="cari" id="tombol-Cari" >Cari</button>
                    <div class="spinner-border text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
            </form>
    </div>
</nav>
<section id="home" class="home">
        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid"></div>

        <!-- container -->
    <div class="container">
        <!-- menggunakan card -->
        <section id="card">
        <div class="container text-light " id="container">
            <div class="row">
                <?php if(empty($leptop)) :?>
                    <h1>Data tidak ditemukan</h1>
                <?php else :?>
            
                    <?php foreach ($leptop as $elek) :?>
                        <div class="col-3">
                            <div class="card " style="background-color: black;">
                                <div class="card-body">
                                <img src="../assets/img/<?= $elek["gambar"]; ?>" class="card-img-top">
                                    <h5 class="card-title"><?= $elek["tipe"] ?></h5>
                                    <p class="card-text">To see detailed price specifications and to look around can be clicked below.</p>
                                        <a href="detail.php?id=<?= $elek['id'] ?>">
                                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Learn More
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif;?>
            </div>
        </div>
        </section>
    <!-- ahir container -->
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






<script src="../js/bootstrap.min.js"></script>

</body>
</html>