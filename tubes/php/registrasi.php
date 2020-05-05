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

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    
    <title>Latihan 7c</title>

</head>
<body style="background-color:black;">

        <nav class="navbar navbar-dark bg-dark justify-content-center">
            <span class="navbar-brand mb-0 h1" style="font-family: 'Permanent Marker', cursive; font-size: 30px;" >Halaman Registrasi</span>
        </nav>


<section>
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
                                    
                                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="register">Register</button>
                                </form>
                            </div>
                    </div>
            </div>
    </div>
</div>

</section>

<footer class="bg-dark text-white">
  <div class="container">
    <div class="row pt-3">
      <div class="col text-center">
        <p>Copyright &copy; 2020. Fajar Hasbi Noer. </p>
        </div>
        </div>
      </div>
    </div>
</footer>






    <script src="../js/jquery-3.5.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
</body>
</html>