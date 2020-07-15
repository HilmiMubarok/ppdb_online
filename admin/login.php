<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Admin</title>

	<!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">

    <!-- owl carousel-->
    <link rel="stylesheet" href="../assets/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="../assets/owl.carousel/assets/owl.theme.default.css">

    <!-- theme stylesheet-->

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/login.css">



</head>
<body>

    <div class="container">
        <h2 class="text-center">FORM LOGIN</h2>

        <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <label>:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username Anda" required>
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <label>:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-unlock-alt"></i>
                        </div>
                    </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda" required>
                </div>
            </div>
            <button type="submit" name="login" value="login" class="btn btn-success">Login</button>
        </form>
    </div>

    <?php
        session_start();
        include '../koneksi.php';
        if (isset($_POST['login'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];



        $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($koneksi, $query);



        if (mysqli_num_rows($result) == 0) {
            echo "<script>
                    alert('login gagal !!!');
                    window.location.assign('login.php');
                </script>";
            } else {
                $_SESSION['admin'] = true;
                echo "<script>
                    alert('Anda Masuk Sebagai Admin!!!');
                    window.location.assign('index.php');
                </script>";
            }
        }
    ?>  
    

    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../assets/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>


</body>
</html>