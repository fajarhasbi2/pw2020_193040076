<?php
// menghubungkan dengan file php lainnya
    require 'php/functions.php';

// melakukan query
    $laptop = query("SELECT * FROM elektronik")

?>

<html>
    <head>
    
        <title>latihan5c</title>

        <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    </head>
    
<body>
<div class="container">
        <?php foreach ($laptop as $lap) :?>
            <p class="tipe">
                 <a href="php/detail.php?id=<?= $lap['id'] ?>">
                    <?= $lap["tipe"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>