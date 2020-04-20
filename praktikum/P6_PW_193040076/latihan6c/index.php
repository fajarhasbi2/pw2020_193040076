<?php
    require 'php/functions.php';

    $leptop = query("SELECT * FROM elektronik")

?>

<html>
    <head>
        <!-- css bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- my css -->
        <link rel="stylesheet" href="css/style.css">

        <title>latihan 6c</title>
       

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
            <div class="row">
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
            </div>
        </div>

   






<script src="js/jquery-3.5.0.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>