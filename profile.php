<?php

include("connection.php");

$id = $_GET["id"];
$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id = $id");
$pegawai = mysqli_fetch_assoc($query);

?>

<html>
    <body>
        <h3>Hai, Bapak/Ibu <?= $pegawai["nama"] ?></h3>
        <br>
    <table border="1">
        <thead>
            <tr>
                <th>
                    Jenis Kelamin
                </th>
                <th>
                    Alamat
                </th>
                <th>
                    Tempat Lahir
                </th>
                <th>
                    Tanggal Lahir
                </th>
                <th>
                    No Telp
                </th>
                <th>
                    Status Perkawinan
                </th>
            </tr>
        </thead>
            <tr>
                <td><?php echo $pegawai["jenis_kelamin"] ?></td>
                <td><?php echo $pegawai["alamat"] ?></td>
                <td><?php echo $pegawai["tempat_lahir"] ?></td>
                <td><?= date("d M Y", strtotime($pegawai["tanggal_lahir"])) ?></td>
                <td><?php echo $pegawai["nomer_seluler"] ?></td>
                <td><?php echo $pegawai["status_perkawinan"] ?></td>
            </tr>
    </table>
    <br>
    <br>
    <div><a href="list.php">kembali</a></div>
</body>
</html>