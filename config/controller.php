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

    $query = "UPDATE mahasiswa SET nama = '$nama',  jurusan = '$jurusan', alamat = '$alamat' WHERE id_mhs = '$id_mhs'";

    $result = mysqli_query($db, $query);

    if (!$result) {
        die("Query failed. Error: " . mysqli_error($db));
    }

    return mysqli_affected_rows($db);

}