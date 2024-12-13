<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f4f6;
            color: #333;
        }

        .container {
            width: 350px;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            text-align: center;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }

        form label {
            display: block;
            margin-bottom: 1rem;
        }

        input[type="text"],
        input[type="int"] {
            width: 100%;
            padding: 0.75rem;
            margin-top: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="int"]:focus {
            border-color: #007bff;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        #hasil {
            margin-top: 1.5rem;
            font-size: 1.1rem;
            color: #333;
        }

        #hasil span {
            display: block;
            padding: 0.5rem 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Cek</h1>
        <form action="" id="formCek" method="POST">
            <label for="nama">Nama
                <input type="text" id="nama" name="nama" required>
            </label>
            <label for="tahun">Tahun
                <input type="number" id="tahun" name="tahun" required>
            </label>
            <button type="submit" name="cekBtn">CEK</button>
        </form>
        <div id="hasil">
            <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nama = strtolower($_POST['nama']);
                $tahun = (int)$_POST['tahun'];

                $jumlahA = substr_count($nama, 'a');
                $kabisat = ($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0) ? "Tahun Kabisat" : "Bukan Kabisat";

                echo "<span id='jumlahA'>Jumlah huruf 'A': $jumlahA</span>";
                echo "<span id='statusKabisat'>$kabisat</span>";
            }
            ?>
        </div>
        <script>
            function showAlert(){
                var jumlahA = document.getElementById('jumlahA').textContent;
                var statusKabisat = document.getElementById('statusKabisat').textContent;

                alert("jumlah A : " + jumlahA + ", " + statusKabisat);
            }
        </script>
    </div>
</body>
</html>
