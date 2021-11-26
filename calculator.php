<?php

// Addition function
function addNumbers($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}
echo addNumbers(2,4);

// Subtraction function
function diffOfNumbers($num1, $num2){
    $diff = $num1 - $num2;
    return $diff;
}
echo diffOfNumbers(4, 6);

// Multiplication function
function multiplyNumbers($num1, $num2){
    $multi = $num1 * $num2;
    return $multi;
}
echo multiplyNumbers(5, 5);

// Floor Division function
function floorOfNumbers($num1, $num2){
    $floor = $num1 / $num2;
    return $floor;
}
echo floorOfNumbers(4,2);

// Modulus function
function modulusNumbers($num1, $num2){
    $modul = $num1 % $num2;
    return $modul;
}
echo modulusNumbers(4,3);

?>
