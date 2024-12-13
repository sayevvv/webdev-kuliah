<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil tambah : {$hasilTambah} <br>
      Hasil Kurang : {$hasilKurang} <br>
      Hasil Kali : {$hasilKali} <br>
      Hasil Bagi : {$hasilBagi} <br>
      Sisa Bagi : {$sisaBagi} <br>
      Hasil Pangkat : {$pangkat} <br>
      ";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br><br";

echo "Hasil Sama: {$hasilSama} <br>
      Hasil Tidak Sama : {$hasilTidakSama} <br>
      Hasil Lebih Kecil : {$hasilLebihKecil} <br>
      Hasil Lebih Besar : {$hasilLebihBesar} <br>
      Hasil Lebih Kecil Sama : {$hasilLebihKecilSama} <br>
      Hasil Lebih Besar Sama : {$hasilLebihBesarSama} <br>
      ";


$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br><br>";

echo "Hasil And: {$hasilAnd} <br>
      Hasil Or : {$hasilOr} <br>
      Hasil Not A : {$hasilNotA} <br>
      Hasil Not B : {$hasilNotB} <br>";

echo "<br><br>";

echo $a += $b;
echo "<br>";
echo $a -= $b;
echo "<br>";
echo $a *= $b;
echo "<br>";
echo $a /= $b;
echo "<br>";
echo $a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br><br>";

echo "Hasil Identik : {$hasilIdentik} <br>";
echo "Hasil Tidak Identik : {$hasilTidakIdentik}";

echo "<br><br>";

$persentaseKursiKosong = (45 - 28) / 45 * 100;
echo "Persentase Kursi Kosong : {$persentaseKursiKosong} %"
?>