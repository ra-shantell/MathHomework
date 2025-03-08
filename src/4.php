<?php
$mathHomework = array(
    '2+2',
    '3x+5',
    '10÷2',
);

$randomMathProblem = $mathHomework[array_rand($mathHomework)];

echo "{$randomMathProblem}";
?>
