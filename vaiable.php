<?php
    // Variable declarations
    $name = "John";
    $age = 30;
    $height = 5.9;
    $isStudent = true;
    $email = "john@example.com";

    $isEmployee = true;
    $isOnline = false;
    $isForSale = true;

    $gpa = 2.5;
    $price = 4.99;
    $taxRate = 0.07;

    // Output variables
    echo "{$name}<br>";
    echo "{$age}<br>";
    echo "{$height}<br>";
    echo ($isStudent ? 'true' : 'false') . "<br>";
    echo "Your email is {$email}<br>";
    echo "Hello {$name}, hi<br>";
    echo "I am {$age} years old<br>";
    echo "I am student: " . ($isStudent ? 'true' : 'false') . "<br>";
    echo "Your GPA is: {$gpa}<br>";
    echo "Your price is: \${$price}<br>";
    echo "The sales tax rate is: {$taxRate}<br>";
    echo "Online status: " . ($isOnline ? 'true' : 'false') . "<br>";
    echo "Employee status: " . ($isEmployee ? 'true' : 'false') . "<br>";

    $quantity = 10;
    $food = "Pizza";
    echo "You have ordered {$quantity} {$food}s.<br>";

    $total = $quantity * 10;
    echo "Your total is: \${$total}";
?>
