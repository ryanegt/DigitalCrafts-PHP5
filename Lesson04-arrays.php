<?php

/*
 * A lesson on PHP's most usefull data structure, the array.
 * Quick aside: In the wild, array's will hardly ever be explicitly defined, 
 * as they are here. Rather we will fetch results from a file or database and 
 * store them in an array. print_r()
 */
 
// Lets start with a simple example
 
$student_names = array("Ryan","Stan","Wendy","Kenny","Eric","Sharon","Wellington","Bebe","Starvin","Hanky","Leopold","Shelly");

// Here is a multi-dimensional array of students
// [title, first name, last name, age, favorite team, is enrolled]
// Square bracket for array instantion was introduced in PHP 5.4
// Read more http://php.net/manual/en/language.types.array.php
// $var = []; is equivalent to $var = array();

$student_info = [
    1 => ["Mr.", Ryan, "Rodd", 25, "Packers", 0],
    2 => ["Mr.", "Stan", "Marsh", "11", "Broncos", 1],
    3 => ["Ms.", "Wendy", "Testaburger", "12", "Seahawks", 1],
    4 => ["Mr.", "Kenny", "McKormick", "12", "Raiders", 1],
    5 => ["Mr.", "Eric", "Cartman", "11", "Broncos", 1],
    6 => ["Mrs.","Sharon", "Marsh", "36", "Broncos", 0],
    7 => ["Mr.", "Wellington", "Bear", "3", "Bears", 0],
    8 => ["Ms.", "Bebe", "Stevens", "12", "Broncos", 1],
    9 => ["Mr.", "Starvin", "Marvin", "14", "Redskins", 0],
    10 => ["Mr.", "Hanky", null, "0.5", "Browns", 0],
    11 => ["Mr.", "Leopold", "Stotch", "11", "Jets", 1],
    12 => ["Ms.", "Shelly", "Marsh", "16", "Cowboys", 1]
];

// Access single node

// Access entire row

// Loop through entire

// 

?>