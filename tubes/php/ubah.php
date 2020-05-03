<?php
    require 'functions.php';
    
    // pengecekan login
    session_start();

    if (!isset($_SESSION["username"])){
        header("Location: login.php");
        exit;
    }
    
    $id = $_GET['id'];
    $elek = query(" SELECT * FROM elektronik WHERE id = $id")[0];
	if (isset($_POST["ubah"])) {
			


		if (ubah($_POST) > 0) {
			echo 	"<script>
                            alert('data berhasil diubah!');
                            document.location.href = 'admin.php';
			        </script>";
		}else {
			echo "<script>
                        alert('data gagal diubah!');
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

    <title>Tugas</title>
</head>
<body style="background-color:black;">

<!-- menggunakan nav -->

<nav class="navbar navbar-dark bg-dark justify-content-center">
            <span class="navbar-brand mb-0 h1" style="font-family: 'Permanent Marker', cursive; font-size: 30px;">Halaman Ubah Data Laptop</span>
        </nav>


        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid" style=" background-image: url(../assets/img/JUMBO.png);
                                                        background-size: cover;
                                                        height: 400px;
                                                        position: relative;">
            <div class="container">
                <h1 class="display-4"></h1>
            </div>
        </div>


 <section>   

<div class="container">
    <div class="card border-success mb-3 bg-dark ">
    <div class="card-header text-center text-light"><h2>Ubah Data Laptop</h2></div>


<div class="card bg-dark ">
  <div class="card-body text-success ">
    <!-- menggunakan forms -->
        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $elek['id'];?>">
        <input type="hidden" name="gambarLama" value="<?= $elek['gambar'];?>">
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <img src="../assets/img/<?= $elek['gambar'];?>" width="100">
                    <input type="file" class="form-control-file" id="gambar" name="gambar" >
                </div>
                <div class="form-group">
                    <label for="tipe">Tipe</label>
                    <input type="text" class="form-control" id="tipe" name="tipe" value="<?= $elek['tipe'];?>">
                </div>
                <div class="form-group">
                    <label for="prosesor">Prosesor</label>
                    <input type="text" class="form-control" id="prosesor" name="prosesor" value="<?= $elek['prosesor'];?>">
                </div>
                <div class="form-group">
                    <label for="memori">Memori</label>
                    <input type="text" class="form-control" id="memori" name="memori" value="<?= $elek['memori'];?>">
                </div>
                <div class="form-group">
                    <label for="storage">Storage</label>
                    <input type="text" class="form-control" id="storage" name="storage" value="<?= $elek['storage'];?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $elek['harga'];?>">
                </div>

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="ubah">Ubah Data</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a  href="admin.php" class="text-success">Kembali</a></button>
        </input>
        </form>
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
    


<script src="../js/jquery-3.5.0.slim.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>

