<?php
    require 'functions.php';
    
    // pengecekan login
    session_start();

    if (!isset($_SESSION["username"])){
        header("Location: login.php");
        exit;
    }

	if (isset($_POST["tambah"])) {
			


		if (tambah($_POST,$_FILES) > 0) {
			echo 	"<script>
                            alert('data berhasil ditambahkan!');
                            document.location.href = 'admin.php';
			        </script>";
		}else {
			echo "<script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'admin.php';
			    </script>";
		}

	}

?>

<html >
<head>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <title>Tambah Data</title>

</head>
<body style="background-color:black;">

<!-- menggunakan nav -->

        <nav class="navbar navbar-dark bg-dark justify-content-center">
            <span class="navbar-brand mb-0 h1" style="font-family: 'Permanent Marker', cursive; font-size: 30px;">Halaman Tambah Data Laptop</span>
        </nav>


        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid" style=" background-image: url(../assets/img/ASUS.png);
                                                        background-size: cover;
                                                        height: 300px;
                                                        position: relative;">
            <div class="container">
                <h1 class="display-4"></h1>
            </div>
        </div>


<section>
<div class="container">
    <div class="card border-success mb-3 bg-dark ">
        <div class="card bg-dark ">
            <div class="card-body text-success ">

                <!-- menggunakan forms -->
                <form action="" method="post" enctype="multipart/form-data">
                            
                         <div class="custom-file">
                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                            <input type="file" class="custom-file-input" id="gambar"  name="gambar" required>
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Example input tipe">
                        </div>
                        <div class="form-group">
                            <label for="prosesor">Prosesor</label>
                            <input type="text" class="form-control" id="prosesor" name="prosesor" placeholder="Example input prosesor">
                        </div>
                        <div class="form-group">
                            <label for="memori">Memori</label>
                            <input type="text" class="form-control" id="memori" name="memori" placeholder="Example input 8 GB">
                        </div>
                        <div class="form-group">
                            <label for="storage">Storage</label>
                            <input type="text" class="form-control" id="storage" name="storage" placeholder="Example input 512 GB">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Example input Rp.20.000.000">
                        </div>

                        <div>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="tambah">Tambah Data</button>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a  href="product.php" class="text-success">Kembali</a></button>
                        </div>
                </form>
            </div>
        </div>
    </div>
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


















<script src="../js/jquery-3.5.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
    
</body>
</html>

