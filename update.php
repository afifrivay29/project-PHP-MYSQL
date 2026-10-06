<?php

include("connection.php");

$id = $_POST["id"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$nomer_seluler = $_POST["nomer_seluler"];
$status_perkawinan = $_POST["status_perkawinan"];

try {

    mysqli_query($connection, 
                "UPDATE pegawai 
                SET nama = '$nama',
                    jenis_kelamin = '$jenis_kelamin',
                    alamat = '$alamat',
                    tempat_lahir = '$tempat_lahir',
                    tanggal_lahir = '$tanggal_lahir',
                    nomer_seluler = '$nomer_seluler',
                    status_perkawinan = '$status_perkawinan'
                WHERE id = $id
                ");

        header("Location:list.php"); //kembalikkan ke halaman list.php

} catch (Exception $e) {

    echo "Gagal Update ke Database: " . $e->getMessage();

}