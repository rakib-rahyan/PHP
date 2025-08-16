<?php
    // Arithmetic operations
    $x = 10;
    $y = 5;
    $z = null;
    $a = null;
    $b = null;
    
    $z = $x +$y;
    $a = $x - $y;
    $b = $x * $y;
    $c = $x / $y;
    $d = $x % $y;

    echo "Addition: {$x} + {$y} = {$z}<br>";
    echo "Subtraction: {$x} - {$y} = {$a}<br>";
    echo "Multiplication: {$x} * {$y} = {$b}<br>";
    echo "Division: {$x} / {$y} = {$c}<br>";
    echo "Modulus: {$x} % {$y} = {$d}<br>";

    //increment / decrement operatiors

    $counter = 0;
    $counter = $counter +1;
    echo $counter ."<br>";

    $counter2 = 0;
    $counter2 += 1;
    echo $counter2; 

    //operator precedence
    //()
    //**
    //*/%
    //+ -
    $total  = 1+2-3*4/5**6;
    echo $total;
?>