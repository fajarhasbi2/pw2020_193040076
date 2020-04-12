<?php
// menghubungkan dengan file php lainnya
    require 'php/functions.php';

// melakukan query
    $laptop = query("SELECT * FROM elektronik")

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

        <?php foreach ($laptop as $lap) :?>
        <tr>
        <td><?=$lap["id"];?></td>
        <td><img src="assets/img/<?=$lap ["gambar"]?>" ></td>
        <td><?=$lap["tipe"];?></td>
        <td><?=$lap["prosesor"];?></td>
        <td><?=$lap["memori"];?></td>
        <td><?=$lap["storage"];?></td>
        <td><?=$lap["harga"];?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    
</body>
</html>