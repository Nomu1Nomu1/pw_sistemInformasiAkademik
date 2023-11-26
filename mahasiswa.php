<?php

include 'connection.php';
function select($querry)
{
    global $db;
    $result = mysqli_query($db, $querry);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

$data_mhs = select("SELECT * FROM mahasiswa");

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

<body class="vh-100 overflow-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">Informasi Akademik</a>
            <!-- Toggle btn -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Side Bar -->
            <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <!-- Sidebar header -->
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Informasi Akademik</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    <!-- Sidebar body -->
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="mahasiswa.php">Mahasiswa </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="wali_mahasiswa.php">Wali Mahasiswa</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin.php"><i class="uil uil-signin"></i>Admin</i></a></li>
                                <li><a class="dropdown-item" href="#"><i class="uil uil-signin"></i>Login</i></a></li>
                            </ul>
                        </li>
                        <img src="image/Aqua Minato.jpg" alt="Logo" class="image_profile justify-content-end" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="title-page title text-center mb-5" style="padding-top: 40px;">Data Mahasiswa</h2>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>ID Wali</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_mhs as $mhs): ?>
                    <tr>
                        <td>
                            <?= $mhs['id_mhs'] ?>
                        </td>
                        <td>
                            <?= $mhs['nim'] ?>
                        </td>
                        <td>
                            <?= $mhs['nama'] ?>
                        </td>
                        <td>
                            <?= $mhs['jenis_kelamin'] ?>
                        </td>
                        <td>
                            <?= $mhs['jurusan'] ?>
                        </td>
                        <td>
                            <?= $mhs['alamat'] ?>
                        </td>
                        <td>
                            <?= $mhs['id_wali'] ?>
                        </td>
                        <td><a href="form_edit_mahasiswa.php" class="btn sm">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>