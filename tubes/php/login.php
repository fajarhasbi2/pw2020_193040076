<?php
    session_start();

    require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin

    if(isset($_SESSION['username'])) {
        header("Location: admin.php");
        exit;
    }

    if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
        $username = $_COOKIE['username'];
        $hash = $_COOKIE['hash'];

        // ambil username berdasarkan id
        $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if($hash === hash('sha256', $row['id'], false)) {
            $_SESSION['username'] = $row['username'];
            header("Location: admin.php");
            exit;
        }
    }

// Login
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
// mencocokan USERNAME dan PASSWORD
        if(mysqli_num_rows($cek_user) > 0) {
            $row = mysqli_fetch_assoc($cek_user);
            if(password_verify($password, $row['password'])) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = hash('sha256', $row['id'], false);

                // jika remember me dicentang
                if(isset($_POST['remember'])) {
                    setcookie('username', $row['username'], time() + 60 * 60 * 24);
                    $hash = hash('sha256', $row['id']);
                    setcookie('hash', $hash, time() + 60 * 60 * 24);
                }
            
            if(hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
            }
        }
        $error = true;
    }

?>

<html>
<head>
        <!-- css bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!-- my fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    
    <title>Login</title>

</head>
<body style="background-color:black;">

        <nav class="navbar navbar-dark bg-dark justify-content-center">
            <span class="navbar-brand mb-0 h1" style="font-family: 'Permanent Marker', cursive; font-size: 30px;">Halaman Login</span>
        </nav>

<section>
<div class="jumbotron jumbotron-fluid " style="background-image: url(../assets/img/RGB.png); height:700px ;">
        

  <div class="container ">
        <div class="container ">
                    <div class="card border-success mb-3 bg-dark " style="max-width: 18rem; margin-left: 390px;">
                    <div class="card-header text-center text-light" >LOGIN</div>
                    <div class="card-body text-success">

                <div class="container bg-dark ">
                    <form action="" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>

                                <?php if (isset($error)) : ?>
                                        <p style="color: red; font-style: italic;">Username atau password salah</p>
                                <?php endif;?>

                                <div class="remember">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                                <button type="submit" name="submit" class="btn btn-outline-success my-2 my-sm-0">Login</button>
                    </form>
                                <div class="registrasi">
                               
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="button" disabled>
                                        <a href="registrasi.php "> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Create Acount</a>
                                    </button>

                                </div>
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