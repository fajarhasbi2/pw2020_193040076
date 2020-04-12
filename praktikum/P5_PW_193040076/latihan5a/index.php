<?php
// melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

// memilih database
    mysqli_select_db($conn, "tubes_193040076") or die ("Database salah!");

// query mengambil objek dari tabel di dalam database
    $laptop = mysqli_query($conn, "SELECT * FROM elektronik");
?>

<html>
    <head>
    
        <title>latihan5a</title>

        <link rel="stylesheet" href="assets/css/style.css">

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

        <?php while($lap = mysqli_fetch_assoc($laptop)) :?>
        <tr>
        <td><?=$lap["id"];?></td>
        <td><img src="assets/img/<?=$lap ["gambar"]?>" ></td>
        <td><?=$lap["tipe"];?></td>
        <td><?=$lap["prosesor"];?></td>
        <td><?=$lap["memori"];?></td>
        <td><?=$lap["storage"];?></td>
        <td><?=$lap["harga"];?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    </div>
    
</body>
</html>