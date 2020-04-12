<?php
// menghubungkan dengan file php lainnya
    require 'php/functions.php';

// melakukan query
    $laptop = query("SELECT * FROM elektronik")

?>

<html>
    <head>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- My css -->
      <link rel="stylesheet" href="assets/css/style.css">

        <title>latihan5c</title>

    </head>
    
<body>
<!-- ini pake navbar -->
        <div class="navbar-fixed">
            <nav class="navbar">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo center">Laptop Gaming</a>
                    </div>
                </div>
            </nav>
        </div>

<!-- menggunakan collection -->
            <div class="container">
                <div class="collection">
                    <h3 class=" center light  grey-text text-darken-3 "><b>List Laptop</b></h3>
                    <?php foreach ($laptop as $lap) :?>
                        <p class="tipe">
                            <a href="php/detail.php?id= <?= $lap['id'] ?> " class="collection-item ">  
                                <?= $lap["tipe"] ?>
                            </a>
                        </p>
                    <?php endforeach; ?>
                </div>
            </div>





     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="aseets/js/materialize.min.js"></script>
    <script>
        const sideNav = document. querySelectorAll('.sidenav');
          M.Sidenav.init(sideNav);

        const parallax = document. querySelectorAll('.parallax');
        M.Parallax.init(parallax);

    </script>
</body>
</html>