<?php
$age = 25;
$isStudent = true;

if ($age >= 18 && $age <= 30) {
    echo "You are eligible for the youth membership.<br>";
}

if ($age < 18 || $isStudent) {
    echo "You qualify for the student discount.<br>";
} else {
    echo "You don't qualify for the student discount.<br>";
}

if (!$isStudent) {
    echo "You are not a student.<br>";
} else {
    echo "You are a student.<br>";
}
?>
