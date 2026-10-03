<?php

include("connection.php");

$query = mysqli_query($connection, "SELECT * FROM pegawai");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<html>
    <h3>List Pegawai PT. Satu Dua Tiga</h3>
    <br>
    <div>
        <a href="add.php">Tambah Data</a>
    </div>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Jenis Kelamin
                </th>
                <th>
                    Alamat
                </th>
            </tr>
        </thead>
        <?php foreach($result as $index => $pegawai) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><a href="profile.php?id=<?= $pegawai["id"]?>"><?php echo $pegawai["nama"] ?></a></td>
                <td><?php echo $pegawai["jenis_kelamin"] ?></td>
                <td><?php echo $pegawai["alamat"] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</html>