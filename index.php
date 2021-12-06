<?php

// function myfunction(){
// 	echo "hello yusuf!";
// }
// myfunction();

// Word length function
function getLength(){
	$txt = 'yhvhvgg';
	echo strlen($txt);
}
getLength();


// Word count function
function wordsCount($sentence){
	echo str_word_count($sentence);
}
wordsCount("i am yusuf lawan umar");


// Word reverse function
function getReverse($text){
	echo strrev($text);
}
getReverse("yusuf");

// function to get the position of a letter in word
 function getPosition($name, $letter){
 	echo strpos($name, $letter);
 }
 getPosition("my name", "n");

// Replacing function
 function replacing($oldWord, $newWord){
 	$text = "I am a student";
 	echo str_replace($oldWord, $newWord, $text);
 }
 replacing("student", "teacher");

// function to checkwheather an input is an integer or not
function check($input){
	var_dump(is_int($input));
}
check("yusuf");

?>
