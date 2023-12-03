<?php

include 'config/app.php';

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


    <div class="container mt-3">
        <h2 class="title text-center mb-3" style="padding-top: 40px;">Tambah Mahasiswa</h2>
        <div>
            <form action="" method="post">
                <div class="mb-2">
                    <label for="idInput" class="form-label">ID</label>
                    <input maxlength="4" type="text" class="form-control" id="idInput" placeholder="Masukkan 4 angka">
                </div>
                <div class="mb-2">
                    <label for="nimInput" class="form-label">NIM</label>
                    <input maxlength="9" type="text" class="form-control" id="nimInput">
                </div>
                <div class="mb-2">
                    <label for="namaInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="namaInput">
                </div>
                <div class="mb-2 ">
                    <label class="form-label">Jenis Kelamin</label>
                    <div>
                        <input class="form-check-input" name="flexRadioDefault" type="radio" id="jkInput1">
                        <label class="form-check-label" for="jkInput1">Pria</label>
                        <input class="form-check-input" name="flexRadioDefault" type="radio" id="jkInput2">
                        <label class="form-check-label" for="jkInput2">Wanita</label>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="jurusanInput" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusanInput">
                </div>
                <div class="mb-2">
                    <label for="alamatInput" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamatInput">
                </div>
                <div class="mb-2">
                    <label for="idwaliInput" class="form-label">ID wali</label>
                    <input type="text" class="form-control" id="idwaliInput">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>