<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "exercise_crud";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Failed connect to database: " . mysqli_connect_error());
}

?>