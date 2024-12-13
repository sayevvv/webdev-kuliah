<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Shamil</title>
</head>
<body> 
    <div class="container">
        <h2>Cek jumlah huruf "A" dan Tahun Kabisat</h2>
        <form id="formCek" action="" method="POST">
            <label><input type="text" id="nama" name="nama" required></label>
            <label><input type="number" id="tahun" name="tahun" required></label>
            <button type="button" id="cekBtn">Cek</button>
        </form>
        <div id="hasil"></div>
    </div>

    <script>
        document.getElementById('cekBtn').addEventListener('click', async function () {
            const nama = document.getElementById('nama').value;
            const tahun = document.getElementById('tahun').value;

            const response = await fetch('proses.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `nama=${encodeURIComponent(nama)}&tahun=${encodeURIComponent(tahun)}`
            });

            const result = await response.json();
            document.getElementById('hasil').innerHTML = 
                `Jumlah huruf "A": ${result.jumlahA}<br>${result.kabisat}`;
        });
    </script>
</body>
</html>