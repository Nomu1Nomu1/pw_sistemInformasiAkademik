<?php

include 'config/app.php';

if (isset($_POST['tambah'])) {
    if (create_data($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'admin.php';
            </script>";
    }else{
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = 'admin.php';
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

<body class="vh-100 overflow-hidden">


    <div class="container mt-3">
        <h2 class="title text-center mb-3" style="padding-top: 40px;">Tambah Mahasiswa</h2>
        <div>
            <form action="" method="post">
                <div class="mb-2">
                    <label for="nimInput" class="form-label">NIM</label>
                    <input maxlength="9" type="text" class="form-control" name="nim" id="nimInput" required>
                </div>
                <div class="mb-2">
                    <label for="namaInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="namaInput" required>
                </div>
                <div class="mb-2 ">
                    <label class="form-label">Jenis Kelamin</label>
                    <div>
                        <input class="form-check-input" value="Pria" name="jenis_kelamin" type="radio" id="jkInput1">
                        <label class="form-check-label" for="jkInput1" ch>Pria</label>
                        <input class="form-check-input" value="Wanita" name="jenis_kelamin" type="radio" id="jkInput2">
                        <label class="form-check-label" for="jkInput2">Wanita</label>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="jurusanInput" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" id="jurusanInput" required>
                </div>
                <div class="mb-2">
                    <label for="alamatInput" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamatInput" required>
                </div>
                <div class="mb-2">
                    <label for="idwaliInput" class="form-label">ID wali</label>
                    <input type="text" class="form-control" name="id_wali" id="idwaliInput" required>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modalSubmit">Submit</button>
                <div class="modal fade" id="modalSubmit" tabindex="-1" aria-labelledby="submitModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="submitModalLabel">Confirmation</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>