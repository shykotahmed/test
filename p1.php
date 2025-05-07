<?php
/*PHP Mini Projects
Project 1: Number Classifier
Make a PHP script that checks a number. First, check if the number is positive or negative. Then, check if the number is even or odd.

Take input or define variable
Show output like: "The number -4 is Negative and Even".*/


$number = 15;
//negative, Positive

if ($number > 0) {
    echo $numSign = "Positive";
}elseif ($number <0) {
    echo $numSign = "Negative";   
}else {
    echo $number = "Zero";
}

//Odd, Even 
if ($number /2 == 0){
    echo $oddEven = "Even";
} else {
    echo $numSign = "Odd";
}




















// $number = 2;

// //check the number is positive or negative
// if ($number > 0) {
//     echo $numSign = "Positive";
// } elseif ($number < 0) {
//     echo $numSign = "Negative";
// } else {
//     echo $number = "Zero";
// }

// //check the number is even or odd.

// if ($number / 2 == 0) {
//     echo $oddEven = "Even";
// } else {
//     echo "Odd";
// }








?>