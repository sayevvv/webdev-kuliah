<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $errors = [];

    // Validasi server-side
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid.";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }

    if (empty($errors)) {
        echo "Validasi berhasil! Nama: $nama, Email: $email";
    } else {
        echo implode(", ", $errors);
    }
}
?>
