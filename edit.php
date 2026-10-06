<?php

include("connection.php");

$id = $_GET["id"];
$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id = $id");
$pegawai = mysqli_fetch_assoc($query);

?>

<html>
    <body>
        <h2>Ubah Data Pegawai</h2>
        <div class="form-data" style="margin-left: 50px;">
            <form method="POST" action="update.php">
                <input type="hidden" name="id" value="<?= $pegawai["id"] ?>" />

                <label for="">
                    Nama
                </label>
                <br>
                <input type="text" name="nama" id="nama" value="<?= $pegawai["nama"] ?>">
                <br><br>

                <label>
                    Jenis Kelamin
                </label>
                <br>
                <select name="jenis_kelamin" id="jenis-kelamin">
                    <option value="Laki-laki" <?php if($pegawai["jenis_kelamin"] == "Laki-laki") echo "Selected" ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if($pegawai["jenis_kelamin"] == "Perempuan") echo "Selected" ?>>Perempuan</option>
                </select>
                <br><br>

                <label>
                    Alamat
                </label>
                <br>
                <textarea name="alamat" id="alamat"><?= $pegawai["alamat"] ?></textarea>
                <br><br>

                <label for="">
                    Tempat Lahir
                </label>
                <br>
                <input type="text" name="tempat_lahir" placeholder="Contoh: Tangerang" value="<?= $pegawai["tempat_lahir"] ?>">
                <br><br>

                <label for="">
                    Tanggal Lahir
                </label>
                <br>
                <input type="date" name="tanggal_lahir" id="tanggal-lahir" value="<?= $pegawai["tanggal_lahir"] ?>">
                <br><br>

                <label for="">
                    No Telp
                </label>
                <br>
                <input type="tel" name="nomer_seluler" placeholder="Contoh: 08123456789" value="<?= $pegawai["nomer_seluler"] ?>">
                <br><br>

                <label for="">
                    Status Perkawinan
                </label>
                <br>
                <select name="status_perkawinan" id="status-perkawinan" value="<?= $pegawai["status_perkawinan"] ?>">
                    <option value="Belum Menikah" <?php if($pegawai["status_perkawinan"] == "Belum Menikah") echo "Selected" ?>>Belum Menikah</option>
                    <option value="Menikah" <?php if($pegawai["status_perkawinan"] == "Menikah") echo "Selected" ?>>Menikah</option>
                </select>
                <br>
                <br>
                <button type="submit">Ubah</button>
            </form>
        </div>
        
        <br>
        <div>
            <a href="list.php">kembali</a>
        </div>
    </body>
</html>