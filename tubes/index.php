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
        <link rel="stylesheet" href="css/style1.css">

        <!-- my fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        
        <title>FJR Master</title>
       

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
                        <a class="nav-link" href="#home"><i>Home</i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="php/product.php"><i>Product</i></a>
                    </li>
            </div>

                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="php/login.php"><button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button></a>
                    </li>
                </ul>
            <form action="" method="get" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Cari" aria-label="Cari" autofocus>
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="cari">Cari</button>
            </form>
    </div>
</nav>


        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Republic of Gamers</h1>
            </div>
        </div>

        <section id="home" class="home">
        <div class="gambar1">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-5">Republic of Gamers is a special gaming notebook hardware brand from ASUS, a Taiwan-based company that manufactures computer components such as motherboards, graphics cards, and notebooks. ASUS recently started producing PDAs, cellphones, LCDs and other hardware. Its main competitors include MSI, and Gigabyte.</h1>
                </div>
            </div>
        </div>

        

        <!-- container -->
    <div class="container">

        <!-- menggunakan card -->
        <div class="card " style="background-color: black;">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="assets/img/Gambar.png" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text" style="color: white; font-size: 20px;">After Republic of Gamers was formed by ASUS in 2006, it did not take years to wait, the Republic of Gamers brand had entered Indonesia until several Republic of Gamers fanatic mailing lists such as ASUS ROG Indonesia.</p>
                    <a href="php/product.php" class="card-text" style="color: white;">To see some of our products, <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Click here
                                        </button></a>
                </div>
                </div>
            </div>
        </div>

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





<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>