<?php

// function myfunction(){
// 	echo "hello yusuf!";
// }
// myfunction();

// This function returns the number of alphabets present
function getLength($text){
	echo strlen($text);
}


// This function returns the number of words present in a semtence
function wordsCount($sentence){
	echo str_word_count($sentence);
}

// This function return a word in a reverse order
function getReverse($text){
	echo strrev($text);
}


// function getPosition($letter, $name){
// 	echo strpos($name, $letter);
// }
// getPosition("y");


// function replacing(){
// 	$text = "I am a student";
// 	echo str_replace($text, );
// }
// replacing($word, $newWord);

// function to checkwheather an input is an integer or not
function check($input){
	var_dump(is_int($input));
}


?>