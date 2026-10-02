<?php

try {
    $connection = mysqli_connect("localhost","root","","kepegawaian");
    // echo "Berhasil";
} catch (Exception $e) {
    echo "Gagal: " . $e->getMessage();
}