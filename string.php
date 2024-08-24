<?php
function countVowels($string) {
 
    $string = strtolower($string);
   
    $vowelCount = preg_match_all('/[aeiou]/', $string);
    return $vowelCount;
}
function reverseString($string) {
    return strrev($string);
}
function processStrings($strings) {
    foreach ($strings as $string) {
        $vowelCount = countVowels($string);
        $reversedString = reverseString($string);

        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
    }
}
$strings = ["Hello", "World", "PHP", "Programming"];
processStrings($strings);

