<?php
// menghubungkan dengan file php lainnya
    require 'functions.php';

    // pengecekan login
    session_start();

    if (!isset($_SESSION["username"])){
        header("Location: login.php");
        exit;
    }
    
    if(isset($_GET['cari'])){
        $keyword = $_GET['keyword'];
        $leptop = query("SELECT * FROM elektronik WHERE
                    tipe LIKE '%$keyword%' OR
                    prosesor LIKE '%$keyword%' OR
                    memori LIKE '%$keyword%' OR
                    storage LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' ");
    } else{
        $leptop = query("SELECT * FROM elektronik");
    }


?>


<html>
<head>
        <!-- css bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!-- my css -->
        <style>
        .spinner-border{
            display:none;
        }

        @media print{
            .navbar, .opsi{
                display:none;
            
            }
        }
        </style>

        <!-- my fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Playfair+Display&display=swap" rel="stylesheet">
   
    <title>Admin</title>

    <script src="../js/jquery-3.5.0.min.js"></script>

</head >
<body style="background-color: black;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand"style="font-family: 'Permanent Marker', cursive; font-size: 50px;" href="product.php">FJR Master</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        
                    </li>
            </div>

                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="tambah.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tambah Data</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>
                    </li>
                </ul>
            <form action="" method="get" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Cari" aria-label="Cari"  id="keyword" autofocus>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari" id="tombol-Cari">Cari</button>
                    <div class="spinner-border text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
            </form>
    </div>
</nav>

<section id="container">
<table class="table " style="background-color: black;">
        <thead>
            <tr class="text-light" style="font-family: 'Carter One', cursive, serif;">
                <th scope="col">#</th>
                <th scope="col" class="opsi">Opsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Tipe</th>
                <th scope="col">Prosesor</th>
                <th scope="col">Memori</th>
                <th scope="col">Storage</th>
                <th scope="col">Harga</th>
            </tr>

            <?php if(empty($leptop)) :?>
                    <tr class="text-light" style="font-family: 'Carter One', cursive, serif;">
                        <td colspan="8">
                            <h1 align="center">Data tidak ditemukan</h1>
                        </td>
                    </tr>
            <?php else :?>
        </thead>

        <tbody>
        <?php $i = 1; ?>
                <?php foreach ($leptop as $elek) :?>
            <tr class="text-light" style="font-family: 'Carter One', cursive, serif;">
                <td><?=$i; ?></td>
                <td class="opsi">
                    <a href="ubah.php?id=<?= $elek["id"];?>"><button class="btn btn-outline-success my-2 my-sm-0">Ubah</button></a>
                    <a href="hapus.php?id=<?= $elek["id"];?>" onclick="return confirm('Yakin datanya mau dihapus?')"><button class="btn btn-outline-success my-2 my-sm-0">Hapus</button></a>
                </td>
                <td>
                    <img src="../assets/img/<?= $elek["gambar"]; ?>" alt="">
                </td>
                <td><?= $elek["tipe"] ?></td>
                <td><?= $elek["prosesor"]; ?></td>
                <td><?= $elek["memori"]; ?></td>
                <td><?= $elek["storage"]; ?></td>
                <td><?= $elek["harga"]; ?></td>
            </tr>
        </tbody>

            <?php $i++; ?>
        <?php endforeach; ?>
    <?php endif;?>
</table>
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
    <script src="../js/script.js"></script>
    
</body>
</html>