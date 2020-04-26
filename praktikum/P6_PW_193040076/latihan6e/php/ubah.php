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
    
    <title>Latihan 6e</title>
</head>
<body>

 <h3>Form Ubah Data Laptop</h3>
 <form action="" method="post">
 <input type="hidden" name="id" value="<?= $elek['id'];?>">
    <table>
        <tr>
            <td><label for="gambar">Gambar</label></td>
            <td>:</td>
            <td><input type="text" name="gambar"  value="<?= $elek['gambar'];?>"></td>
        </tr>
   
        <tr>
            <td><label for="tipe">Tipe</label></td>
            <td>:</td>
            <td><input type="text" name="tipe"  value="<?= $elek['tipe'];?>"></td>
        </tr>
        <tr>
            <td><label for="prosesor">Prosesor</label></td>
            <td>:</td>
            <td><input type="text" name="prosesor"  value="<?= $elek['prosesor'];?>"></td>
        </tr>
        <tr>
            <td><label for="memori">Memori</label></td>
            <td>:</td>
            <td><input type="text" name="memori" value="<?= $elek['memori'];?>"></td>
        </tr>
        <tr>
            <td><label for="storage">Storage</label></td>
            <td>:</td>
            <td><input type="text" name="storage"  value="<?= $elek['storage'];?>"></td>
        </tr>
        <tr>
            <td><label for="harga">Harga</label></td>
            <td>:</td>
            <td><input type="text" name="harga"  value="<?= $elek['harga'];?>"></td>
        </tr>
        <tr>
        <th>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
        </th>
        </tr>
    </table>
    </input>
</form>
    
</body>
</html>

