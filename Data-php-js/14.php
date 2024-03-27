<?php

function sortLetters($string)
{
   $letters = str_split($string);
   sort($letters);
   return implode('', $letters);
}

$str = 'niggatron';
$sortedStr = sortLetters($str);

echo "Исходная строка: $str </br>";
echo "Сортированная строка: $sortedStr";
