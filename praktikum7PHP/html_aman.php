<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitasi Input</title>
</head>
<body>
    <!-- Form untuk menerima input dari pengguna -->
    <form method="post" action="">
        <label for="input">Masukkan sesuatu:</label>
        <input type="text" id="input" name="input" required>
        <br>
        <label for="email">Masukkan Email:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <button type="submit">Kirim</button>
    </form>

    <?php
    // Memeriksa apakah data input sudah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil dan mensanitasi input jika ada
        $input = isset($_POST['input']) ? htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8') : '';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : '';

        // Menampilkan hasil yang sudah disanitasi jika input tersedia
        if (!empty($input)) {
            echo "<p>Input yang disanitasi: $input</p>";
        }

        // Validasi email
        if (!empty($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p>Email yang valid: $email</p>";
            } else {
                echo "<p>Email tidak valid</p>";
            }
        }
    }
    ?>
</body>
</html>
