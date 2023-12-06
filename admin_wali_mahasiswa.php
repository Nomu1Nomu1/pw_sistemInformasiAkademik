<?php

session_start();

if(!isset($_SESSION['login'])) {
    echo "<script>
            alert('Login terlebih dahulu');
            document.location.href = 'login.php';
        </script>";
    exit;
}

include 'config/app.php';

$data_wali = select("SELECT * FROM wali_mhs");

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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #242526;">
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
                            <a class="nav-link active" href="admin.php">Admin</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="logout.php"><i class="uil uil-signin"></i>Log Out</i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="title text-center mb-5" style="padding-top: 40px;">Admin Panel</h2>
        <section class="admin_panel">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Wali
                Mahasiswa</button>

            <div class="menu offcanvas offcanvas-start text-white" data-bs-scroll="true" tabindex="-1"
                id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin_wali_mahasiswa.php">Admin Wali
                                Mahasiswa</a>
                        </li>
                    </ul>
                </div>
            </div>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>ID Wali</th>
                        <th>Nama Wali</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_wali as $wali): ?>
                        <tr>
                            <td>
                                <?= $wali['id_wali'] ?>
                            </td>
                            <td>
                                <?= $wali['nama_wali'] ?>
                            </td>
                            <td>
                                <?= $wali['jenis_kelamin'] ?>
                            </td>
                            <td>
                                <?= $wali['alamat'] ?>
                            </td>
                            <td><a href="form_edit_wali_mhs.php?id_wali=<?= $wali['id_wali']; ?>" class="btn sm">Edit</a>
                            </td>
                            <td><a href="delete_wali.php?id_wali=<?= $wali['id_wali'] ?>"
                                    onclick="return confirm('Data akan dihapus, Yakin?')" class="btn sm danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
        <a class="btn btn-primary" href="form_tambah_wali_mhs.php" role="button">Tambah Data</a>
    </div>

</body>

</html>