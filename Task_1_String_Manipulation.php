<?php

function manipulateText($helloText) {
    //Task 1: String Manipulation

    $text = "The quick brown fox jumps over the lazy dog.";
    echo $text . "</br>" . "</br>";
    
    
    
    $helloText = "The quick brown fox jumps over the lazy dog.";
    $lowercaseText = strtolower($helloText);
    echo $lowercaseText . "</br>" . "</br>";

    echo str_replace("brown","red","$helloText") . "</br>" . "</br>";

    //Task 2: Array Manipulation 

    
}

$text = "The quick brown fox jumps over the lazy dog.";

manipulateText($text);
?>
