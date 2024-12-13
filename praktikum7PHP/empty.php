<?php 
$myArray = array();
if(empty($myArray)) {
    echo "Array tidak terdefenisi atau kosong";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}

echo "<br/>";

if(empty($nonExistentVar)){
    echo "Variabel tidak terdefinisikan atau kosong";
} else {
    echo "Variabel terdefinisi dan tidak kosong";
}
?>