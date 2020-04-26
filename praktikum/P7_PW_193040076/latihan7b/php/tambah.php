<?php
	require 'functions.php';

	if (isset($_POST["tambah"])) {
			


		if (tambah($_POST) > 0) {
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

    <!-- my css -->
    <link rel="stylesheet" href="">

    <title>Latihan 7b</title>

</head>
<body class="bg-dark">

<!-- menggunakan nav -->

    <!-- <nav class="navbar navbar-dark bg-dark justify-content-center">
    <span class="navbar-brand mb-0 h1">FJR Master</span>
    </nav> -->

<div class="container">
    <div class="card border-success mb-3 bg-dark " style="max-width: 1500px">
    <div class="card-header text-center text-light"><h2>Tambah Data Laptop</h2></div>

<div class="card-group">
    </div>
    <div class="card">
    <img src="../assets/img/ASUS.png" class="card-img-top" alt="...">
    </div>
<div class="card bg-dark ">
  <div class="card-body text-success ">
    <!-- menggunakan forms -->
        <form action="" method="post">
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Example input gambar">
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

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="tambah">Tambah Data</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a  href="../index.php" class="text-success">Kembali</a></button>
        
        </form>
        </div>
</div>


 




















<script src="../js/jquery-3.5.0.slim.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
    
</body>
</html>

