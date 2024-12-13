<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = $_POST['nama'];
    $tahun = (int)$_POST['tahun'];

    $jumlahA = substr_count(strtolower($nama), 'a');
    $isKabisat = ($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0);
    $kabisatResult = $isKabisat ? "Tahun kabisat" : "Bukan Tahun Kabisat";

    echo json_encode(['jumlahA' => $jumlahA, 'kabisat' => $kabisatResult]);
}

?>