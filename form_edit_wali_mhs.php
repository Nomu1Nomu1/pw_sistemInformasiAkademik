<?php

include 'config/app.php';

$id_wali = (int) $_GET['id_wali'];

$wali_mhs = select("SELECT * FROM wali_mhs WHERE id_wali = $id_wali")[0];

if (isset($_POST['edit_wali'])) {
    if (update_data_wali($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah');
                document.location.href = 'admin_wali_mahasiswa.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah');
                document.location.href = 'admin_wali_mahasiswa.php';
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
        <h2 class="title text-center mb-3" style="padding-top: 40px;">Edit Mahasiswa</h2>
        <div>
            <form action="" method="post">
                <input type="hidden" name="id_wali" value="<?= $wali_mhs['id_wali'] ?>">
                <div class="mb-2">
                    <label for="namaInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" value="<?= $wali_mhs['nama_wali'] ?>" name="nama_wali" id="namaInput">
                </div>
                <fieldset disabled="disabled">
                    <div class="mb-2 ">
                        <label class="form-label">Jenis Kelamin</label>
                        <div>
                            <input class="form-check-input" name="jenis_kelamin" value="Pria" type="radio" id="jkInput1" required
                                <?php if ($wali_mhs['jenis_kelamin'] == 'Pria') {
                                    echo "checked";
                                } ?>>
                            <label class="form-check-label" for="jkInput1">Pria</label>
                            <input class="form-check-input" name="jenis_kelamin" value="Wanita" type="radio" id="jkInput2"
                            <?php if ($wali_mhs['jenis_kelamin'] == 'Wanita') {
                                    echo "checked";
                                } ?>>
                            <label class="form-check-label" for="jkInput2">Wanita</label>
                        </div>
                    </div>
                </fieldset>
                <div class="mb-2">
                    <label for="alamatInput" class="form-label">Alamat</label>
                    <input type="text" class="form-control" value="<?= $wali_mhs['alamat'] ?>" name="alamat"
                        id="alamatInput">
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modalSubmit">Submit</button>
                <div class="modal fade" id="modalSubmit" tabindex="-1" aria-labelledby="submitModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="submitModalLabel">Confirm</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" name="edit_wali" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>