<?php

// Get an array of all the files in the directory
$files = scandir('math_homework');

// Filter out the current directory and parent directory
$files = array_diff($files, ['..', '.']);

// Shuffle the array to randomize the order
shuffle($files);

// Get a random file from the array
$randomFile = $files[0];

// Read the contents of the file
$contents = file_get_contents('math_homework/' . $randomFile);

// Print the contents to the screen
echo $contents;

?>