<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['add'])){

    // ambil data dari formulir
    $nama = $_POST['name'];
    $alamat = $_POST['address'];
    $jk = $_POST['gender'];
    $agama = $_POST['religion'];
    $email = $_POST['email'];

    // buat query
    $sql = "INSERT INTO homepage (name, address, gender, religion, email) VALUE ('$nama', '$alamat', '$jk', '$agama', '$email')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=success');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=Failed');
    }


} else {
    die("Access Denied");
}

?>