<?php
	require 'functions.php';
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

    <!-- my css -->
    <link rel="stylesheet" href="">

    <title>Tugas</title>
</head>
<body>

<div class="container">
    <div class="card border-success mb-3 bg-dark " style="max-width: 1500px">
    <div class="card-header text-center text-light"><h2>Ubah Data Laptop</h2></div>


<div class="card bg-dark ">
  <div class="card-body text-success ">
    <!-- menggunakan forms -->
        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $elek['id'];?>">
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $elek['gambar'];?>">
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

    


<script src="../js/jquery-3.5.0.slim.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>

