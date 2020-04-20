<?php
// menghubungkan dengan file php lainnya
    require 'functions.php';

    if(isset($_GET['cari'])){
        $keyword = $_GET['keyword'];
        $leptop = query("SELECT * FROM elektronik WHERE
                    tipe LIKE '%$keyword%' OR
                    prosesor LIKE '%$keyword%' OR
                    memori LIKE '%$keyword%' OR
                    storage LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' ");
    } else{
        $leptop = query("SELECT * FROM elektronik");
    }


?>


<html>
<head>
   
    <title>Tugas</title>
</head>
<body>

    <div class="add">
        <a href="tambah.php"><button>Tambah Data</button></a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    
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
    <?php if(empty($leptop)) :?>
            <tr>
                <td colspan="8">
                    <h1 align="center">Data tidak ditemukan</h1>
                </td>
            </tr>
    <?php else :?>

        <?php $i = 1; ?>
        <?php foreach ($leptop as $elek) :?>
            <tr>
                <td><?=$i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $elek["id"];?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $elek["id"];?>" onclick="return confirm('Yakin datanya mau dihapus?')"><button>Hapus</button></a>
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
    <?php endif;?>
    </table>
    
</body>
</html>