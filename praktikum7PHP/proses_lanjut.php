<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];
    $selectedWarna = isset($_POST['warna']) ? $_POST['warna'] : [];
    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo "Anda memilih buah: " . htmlspecialchars($selectedBuah) . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . htmlspecialchars(implode(", ", $selectedWarna)) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis Kelamin Anda: " . htmlspecialchars($selectedJenisKelamin);
}
?>
