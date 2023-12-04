<?php
// display data
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

// insert data

function create_data($post)
{

    global $db;

    $nim = $post['nim'];
    $nama = $post['nama'];
    $jenis_kelamin = $post['jenis_kelamin'];
    $jurusan = $post['jurusan'];
    $alamat = $post['alamat'];
    $id_wali = $post['id_wali'];

    $query = "INSERT INTO mahasiswa VALUES (null, '$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat', '$id_wali')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

// update data

function update_data($post)
{
    global $db;

    $id_mhs = $post['id_mhs'];
    $nim = $post['nim'];
    $nama = $post['nama'];
    $jenis_kelamin = $post['jenis_kelamin'];
    $jurusan = $post['jurusan'];
    $alamat = $post['alamat'];
    $id_wali = $post['id_wali'];

    $query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jenis_kelamin = '$jenis_kelamin', jurusan = '$jurusan', alamat = '$alamat', id_wali = '$id_wali' WHERE id_mhs = '$id_mhs'";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}