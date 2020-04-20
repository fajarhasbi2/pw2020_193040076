<?php
// menghubungkan dengan file php lainnya
    require 'functions.php';

// melakukan query
    $leptop = query("SELECT * FROM elektronik")

?>


<html>
<head>
   
    <title>Latihan 6b</title>
</head>
<body>

    <div class="add">
        <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Opsi</th>
            <th>Gambar</th>
            <th>Tipe</th>
            <th>Prosesor</th>
            <th>Memori</th>
            <th>Storage</th>
            <th>Harga</th>
        </tr>

    <?php $i = 1; ?>
    <?php foreach ($leptop as $elek) :?>
        <tr>
            <td><?=$i; ?></td>
            <td>
                <a href=""><button>Ubah</button></a>
                <a href=""><button>Hapus</button></a>
            </td>

            <td><img src="../assets/img/<?= $elek["gambar"]; ?>" alt=""></td>
            <td><?= $elek["tipe"] ?></td>
            <td><?= $elek["prosesor"]; ?></td>
            <td><?= $elek["memori"]; ?></td>
            <td><?= $elek["storage"]; ?></td>
            <td><?= $elek["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
    </table>
    
</body>
</html>