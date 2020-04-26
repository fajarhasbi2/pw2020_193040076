<?php
    require 'functions.php';

	if (isset($_POST["register"])) {
			


		if (registrasi($_POST) > 0) {
			echo 	"<script>
                            alert('Registrasi Anda Berhasil');
                            document.location.href = 'login.php';
			        </script>";
		}else {
			echo "<script>
                        alert('Registrasi Anda Gagal!');
                        document.location.href = 'login.php';
			    </script>";
		}

	}
?>

<html>
<head>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- my css -->
    <link rel="stylesheet" href="">
    
    <title>Latihan 7c</title>

</head>
<body class="bg-dark">

        <nav class="navbar navbar-dark bg-dark justify-content-center">
            <span class="navbar-brand mb-0 h1">Halaman Registrasi</span>
        </nav>

<div class="jumbotron jumbotron-fluid" style="background-image: url(../assets/img/RGB.png); height:700px ;">
    <div class="container">
    
 

            <div class="container">
                    <div class="card border-success mb-3 bg-dark" style="max-width: 18rem; margin-left: 390px;">
                        <div class="card-header text-center text-light">Registrasi</div>
                        <div class="card-body text-success">
                            
                            <div class="container">
                                <form  action="" method="post">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                                </form>
                            </div>
                    </div>
            </div>
    </div>
</div>








    <script src="../js/jquery-3.5.0.slim.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
</body>
</html>