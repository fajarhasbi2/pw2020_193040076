<?php
// melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

// memilih database
    mysqli_select_db($conn, "tubes_193040076") or die ("Database salah!");

// query mengambil objek dari tabel di dalam database
    $leptop = mysqli_query($conn, "SELECT * FROM elektronik");
?>

<html>
    <head>
    
        <title>latihan5a</title>

        <link rel="stylesheet" href="css/style.css">

    </head>
    
<body>
<div class="container">
    <table border="1" cellpadding="5" cellspacing="2">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Tipe</th>
            <th>Prosesor</th>
            <th>Memori</th>
            <th>Storage</th>
            <th>Harga</th>
        </tr>

        <?php while($elek = mysqli_fetch_assoc($leptop)) :?>
        <tr>
        <td><?=$elek["id"];?></td>
        <td><img src="assets/img/<?=$elek ["gambar"]?>" ></td>
        <td><?=$elek["tipe"];?></td>
        <td><?=$elek["prosesor"];?></td>
        <td><?=$elek["memori"];?></td>
        <td><?=$elek["storage"];?></td>
        <td><?=$elek["harga"];?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    </div>
    
</body>
</html>