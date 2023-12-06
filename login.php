<?php
session_start();
include 'config/app.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = isset($_POST['username']) ? mysqli_real_escape_string($db, $_POST['username']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : '';

    $query = "SELECT * FROM adminn WHERE username = '$username'";
    $hasil = mysqli_query($db, $query);
    $usr = mysqli_fetch_array($hasil);

    if ($usr && md5($password) == $usr['password']) {
        $_SESSION['login'] = 1;
        $_SESSION['id_admin'] = $usr['id_admin'];
        $_SESSION['username'] = $usr['username'];
        $_SESSION['level'] = $usr['level'];

        header('Location: index.php');
    } 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistem Informasi Akademik</title>
</head>

<body>
    <section class="vh-100 mt-5" style="padding-top: 2rem;">
        <div class="container-fluid h-custom">
            <div class="hasil$hasil d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="post">
                        <h2 class="title text-center mb-3">Login</h2>
                        <?php if(isset($error)): ?>
                            <div class="alert alert-danger text-center">
                                <b>Username/password salah</b>
                            </div>
                        <?php endif; ?>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="usernameInput" name="username" class="form-control form-control-lg"
                                placeholder="Enter Username" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="passwordInput" name="password"
                                class="form-control form-control-lg" placeholder="Enter password" />
                        </div>

                        <div class="text-center mt-4 pt-2">
                            <button type="submit" name="login" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>