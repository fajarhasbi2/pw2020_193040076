<?php
usleep(500000);
    require '../php/functions.php';

    $keyword = $_GET["keyword"];
    
    $query = "SELECT * FROM elektronik 
                    WHERE
                tipe LIKE '%$keyword%' OR
                prosesor LIKE '%$keyword%' OR
                memori LIKE '%$keyword%' OR
                storage LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' ";

    $leptop = query($query);


?>

<table class="table " style="background-color: black;">
        <thead>
            <tr class="text-light" style="font-family: 'Carter One', cursive, serif;">
                <th scope="col">#</th>
                <th scope="col">Opsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Tipe</th>
                <th scope="col">Prosesor</th>
                <th scope="col">Memori</th>
                <th scope="col">Storage</th>
                <th scope="col">Harga</th>
            </tr>

            <?php if(empty($leptop)) :?>
                    <tr class="text-light" style="font-family: 'Carter One', cursive, serif;">
                        <td colspan="8">
                            <h1 align="center">Data tidak ditemukan</h1>
                        </td>
                    </tr>
            <?php else :?>
        </thead>

        <tbody>
        <?php $i = 1; ?>
                <?php foreach ($leptop as $elek) :?>
            <tr class="text-light" style="font-family: 'Carter One', cursive, serif;">
                <td><?=$i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $elek["id"];?>"><button class="btn btn-outline-success my-2 my-sm-0">Ubah</button></a>
                    <a href="hapus.php?id=<?= $elek["id"];?>" onclick="return confirm('Yakin datanya mau dihapus?')"><button class="btn btn-outline-success my-2 my-sm-0">Hapus</button></a>
                </td>
                <td>
                    <img src="../assets/img/<?= $elek["gambar"]; ?>" alt="">
                </td>
                <td><?= $elek["tipe"] ?></td>
                <td><?= $elek["prosesor"]; ?></td>
                <td><?= $elek["memori"]; ?></td>
                <td><?= $elek["storage"]; ?></td>
                <td><?= $elek["harga"]; ?></td>
            </tr>
        </tbody>

            <?php $i++; ?>
        <?php endforeach; ?>
    <?php endif;?>
</table>