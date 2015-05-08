<?php

// This is a PHP file! PHP files open with a <?php tag.
// In this space the possibilities are endless, but lets take a look at what
// PHP looks like, these lines that start with // are code comments!

// This is a variable declaration! We end every line with a semicolon

$name = "Ryan Rodd";

// This is another variable delcaration! 

$age = 30;

// We can put many different types of data into variables, such as strings

$school = "Georgia Tech";
$sign   = "Leo";

// And numbers including integers and floats

$pi  = 3.141592;
$gpa = 3.5;
$day = 32;

// We can save boolean values

$is_male  = true;
$has_mail = false;

// We can even save some more advanced things in variables like arrays and objects

$car = @file("filename.txt");
$girlfriends = array();
$dudefriends = [];

// Variables can change and be reassigned later, but lets suppose we don't want that
// then we define constants

define("PIE","delicious");

// constants can be referenced later without a dollar sign ($) for instance, if I 
// Want to echo a variable, I will write:

echo $school; // prints "Georgia Tech"
echo $name;   // prints "Ryan Rodd"

// But if I want to output "delicious" then its just:

echo PIE;

?>