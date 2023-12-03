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