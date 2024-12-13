<?php
//soal 5.1
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}
?>

<?php
//soal 5.2
$pattern = '/[0-9]+/';
$text = 'There are 123 apples';
if(preg_match($pattern, $text, $matches)){
    echo "<br> Cocokkan: ". $matches[0];
}else {
    echo "Tidak ada yang cocok!";
}
?>

<?php
//soal 5.3
$pattern = '/apple/';
$replacement = 'banana';
$text = '<br>I like apple pie';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;
?>

<?php
//soal 5.4
echo "<br>";
$pattern = '/go*d/';
$text = 'god is good';
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>

<?php
//soal 5.5
echo "<br>";
$pattern = '/go?d/';
$text = 'god is good';
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>

<?php
//soal 5.6
echo "<br>";
$pattern = '/go{n,m}d/';
$text = 'god is good';
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>

