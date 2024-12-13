<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} else {
    echo "Nilai huruf: D";
}

echo '<br>';
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak kilometer";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br><br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";
echo "Nilai tertinggi dan terendah";
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);
$nilai_terpakai = array_slice($nilai, 2, 8);

echo "<br>Nilai terpakai: ";
print_r($nilai_terpakai);

$total_nilai = array_sum($nilai_terpakai);

echo "<br>Total nilai yang digunakan: " . $total_nilai;

echo "<br><br>";
$harga = 120000;
$diskon = 0.2;
$setelahDiskon = $harga - ($harga * $diskon);

echo "Harga yang dibayar $setelahDiskon";

echo "<br><br>";

$skorPemain = 650;

echo "Skor Pemain : $skorPemain <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? <br>";

if($skorPemain > 500){
    echo "Pemain mendapatkan hadiah tambahan <br>";
} else {
    echo "Pemain tidak mendapatkan hadiah tambahan <br>";
}
?>
