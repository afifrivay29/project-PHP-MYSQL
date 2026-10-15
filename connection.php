<?php

try {
    $connection = mysqli_connect("mysql.railway.internal","root","BysJMzEzJRoTQKTtnsxxlgbXVIBOZOjA","railway",3306);
    // host, username, password, dbname, port, socket
    // echo "Berhasil";
} catch (Exception $e) {
    echo "Gagal: " . $e->getMessage();
}