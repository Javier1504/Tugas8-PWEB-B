<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['add'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $alamat = $_POST['address'];
    $jk = $_POST['gender'];
    $agama = $_POST['religion'];
    $email = $_POST['email'];

    // buat query update
    $sql = "UPDATE homepage SET name='$nama', address='$alamat', gender='$jk', religion='$agama', email='$email' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-mahasiswa.php
        header('Location: list.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Failed to Save Change");
    }


} else {
    die("Access Denied");
}

?>