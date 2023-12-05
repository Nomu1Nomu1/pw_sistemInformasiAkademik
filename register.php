<?php

include 'config/app.php';

if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
        echo "<script>
                document.location.href = 'login.php';
            </script>";
    }else{
        echo "<script>
                document.location.href = 'register.php';
            </script>";
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
    <section class="vh-100 mt-5" style="padding-top: 1rem;">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <h2 class="title text-center mb-3">Register</h2>
                    <form action="" method="post">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="usernameInput" name="username" class="form-control form-control-lg"
                                placeholder="Enter Username" />
                            <label class="form-label" for="usernameInput">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="passwordInput" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" />
                            <label class="form-label" for="passwordInput">Password</label>
                        </div>

                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                        <div class="text-center mt-4 pt-2">
                            <p class="small fw-bold mt-2 pt-1 mb-0">have an account? <a href="login.php"
                                    class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>