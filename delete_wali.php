<?php

include 'config/app.php';

$id_wali = (int) $_GET['id_wali'];

if (delete_data_wali($id_wali) > 0) {
    echo "<script>
            alert('Data berhasil dihapus');
            document.location.href = 'admin_wali_mahasiswa.php';
        </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            document.location.href = 'admin_wali_mahasiswa.php';
        </script>";
}

?>