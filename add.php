<html>
    <body>
        <h2>Tambah Data Pegawai</h2>
        <div class="form-data" style="margin-left: 50px;">
            <form method="POST" action="insert.php">
                <label for="">
                    Nama
                </label>
                <br>
                <input type="text" name="nama" id="">
                <br><br>

                <label for="">
                    Jenis Kelamin
                </label>
                <br>
                <select name="jenis_kelamin" id="">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <br><br>

                <label for="">
                    Alamat
                </label>
                <br>
                <textarea name="alamat" id=""></textarea>
                <br><br>

                <label for="">
                    Tempat Lahir
                </label>
                <br>
                <input type="text" name="tempat_lahir" placeholder="Contoh: Tangerang">
                <br><br>

                <label for="">
                    Tanggal Lahir
                </label>
                <br>
                <input type="date" name="tanggal_lahir" id="">
                <br><br>

                <label for="">
                    No Telp
                </label>
                <br>
                <input type="tel" name="nomer_seluler" placeholder="Contoh: 08123456789">
                <br><br>

                <label for="">
                    Status Perkawinan
                </label>
                <br>
                <select name="status_perkawinan" id="">
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                </select>
                <br>
                <br>
                <button type="submit">Tambah</button>
            </form>
        </div>
        
        <br>
        <div>
            <a href="list.php">kembali</a>
        </div>
    </body>
</html>