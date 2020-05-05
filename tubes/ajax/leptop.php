<?php
usleep(500000);

require '../php/functions.php';

$keyword = $_GET['keyword'];
        $query =("SELECT * FROM elektronik WHERE
                    tipe LIKE '%$keyword%'");

$leptop = query($query);

?>

<div class="row">
                <?php if(empty($leptop)) :?>
                    <h1>Data tidak ditemukan</h1>
                <?php else :?>
            
                    <?php foreach ($leptop as $elek) :?>
                        <div class="col-3">
                            <div class="card " style="background-color: black;">
                                <div class="card-body">
                                <img src="../assets/img/<?= $elek["gambar"]; ?>" class="card-img-top">
                                    <h5 class="card-title"><?= $elek["tipe"] ?></h5>
                                    <p class="card-text">To see detailed price specifications and to look around can be clicked below.</p>
                                        <a href="detail.php?id=<?= $elek['id'] ?>">
                                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Learn More
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif;?>
            </div>