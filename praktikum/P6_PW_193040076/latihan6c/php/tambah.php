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
    
    <title>Latihan 6c</title>
</head>
<body>

 <h3>Form Tambah Data Laptop</h3>
 <form action="" method="post">
    <table>
        <tr>
            <td><label for="gambar">Gambar</label></td>
            <td>:</td>
            <td><input type="text" name="gambar" id="gambar" required></td>
        </tr>
   
        <tr>
            <td><label for="tipe">Tipe</label></td>
            <td>:</td>
            <td><input type="text" name="tipe" id="tipe" required></td>
        </tr>
        <tr>
            <td><label for="prosesor">Prosesor</label></td>
            <td>:</td>
            <td><input type="text" name="prosesor" id="prosesor" required></td>
        </tr>
        <tr>
            <td><label for="memori">Memori</label></td>
            <td>:</td>
            <td><input type="text" name="memori" id="memori" required></td>
        </tr>
        <tr>
            <td><label for="storage">Storage</label></td>
            <td>:</td>
            <td><input type="text" name="storage" id="storage" required></td>
        </tr>
        <tr>
            <td><label for="harga">Harga</label></td>
            <td>:</td>
            <td><input type="text" name="harga" id="harga" required></td>
        </tr>
        <tr>
        <th>
        <button type="submit" name="tambah">Tambah Data</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
        </th>
        </tr>
    </table>
</form>
    
</body>
</html>

