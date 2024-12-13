<?php
    $loremIpsum = "lorem ipsum lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum";
    
    echo "<p/>{$loremIpsum}";
    echo "Panjang karakter: ". strlen($loremIpsum). "<br/>";
    echo "Panjang kata: ". str_word_count($loremIpsum) . "<br/>";
    echo "<p>". strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>