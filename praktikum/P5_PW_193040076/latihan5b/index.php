<?php
// menghubungkan dengan file php lainnya
    require 'php/functions.php';

// melakukan query
    $leptop = query("SELECT * FROM elektronik")

?>

<html>
    <head>
    
        <title>latihan5b</title>

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

        <?php foreach ($leptop as $elek) :?>
        <tr>
        <td><?=$elek["id"];?></td>
        <td><img src="assets/img/<?=$elek ["gambar"]?>" ></td>
        <td><?=$elek["tipe"];?></td>
        <td><?=$elek["prosesor"];?></td>
        <td><?=$elek["memori"];?></td>
        <td><?=$elek["storage"];?></td>
        <td><?=$elek["harga"];?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    
</body>
</html>