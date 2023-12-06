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
function create_data_wali($post)
{

    global $db;

    $nama_wali = $post['nama_wali'];
    $jenis_kelamin = $post['jenis_kelamin'];
    $alamat = $post['alamat'];

    $query = "INSERT INTO wali_mhs VALUES (null, '$nama_wali', '$jenis_kelamin', '$alamat')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}
function register($post)
{

    global $db;

    $username = $post['username'];
    $password = $post['password'];

    $query = "INSERT INTO adminn VALUES (null, '$username', '$password', 'user')";

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
function update_data_wali($post)
{
    global $db;

    $id_wali = $post['id_wali'];
    $nama_wali = $post['nama_wali'];
    $jenis_kelamin = $post['jenis_kelamin'];
    $alamat = $post['alamat'];

    $query = "UPDATE wali_mhs SET nama_wali = '$nama_wali', alamat = '$alamat' WHERE id_wali = '$id_wali'";

    $result = mysqli_query($db, $query);

    if (!$result) {
        die("Query failed. Error: " . mysqli_error($db));
    }

    return mysqli_affected_rows($db);
}

// delete data
function delete_data($id_mhs)
{
    global $db;

    $query = "DELETE FROM mahasiswa WHERE id_mhs = '$id_mhs'";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function delete_data_wali($id_wali)
{
    global $db;

    $query = "DELETE FROM wali_mhs WHERE id_wali = '$id_wali'";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}