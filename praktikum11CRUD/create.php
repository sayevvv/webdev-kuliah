<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Anggota</h2>
        <form action="proses.php?aksi=tambah" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <div class="radio-group">
                <input type="radio" name="jenis_kelamin" value="L" id="laki" required><label for="laki">Laki-laki</label>
                <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required><label for="perempuan">Perempuan</label>
            </div>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" required>
            <label for="no_telp">No. Telp:</label>
            <input type="text" name="no_telp" id="no_telp" required>
            <button type="submit">Simpan Data</button>
            <a href="index.php" class="btn-kembali">Kembali</a>
        </form>
    </div>
</body>
</html>