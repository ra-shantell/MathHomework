 <?php
// Define an array of math operations
$math_operations = array('+', '-', '*', '/');

// Generate a random math operation and two random numbers
$operation = $math_operations[rand(0, 3)];
$num1 = rand(1, 10);
$num2 = rand(1, 10);

// Print the problem for the user to solve
echo "What is $num1 $operation $num2?";

// Get the user's answer
$answer = readline();

// Validate the answer
if ($answer == $num1 $operation $num2) {
    echo "Correct!";
} else {
    echo "Incorrect, the correct answer is $num1 $operation $num2.";
}
?>