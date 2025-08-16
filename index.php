<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Radius: </label>
        <input type="number" name="radius" min="1" required>
        <input type="submit" value="Calculate">
    </form>

<!--
3ed
    <form action="index.php" method = "post">
        <label for="">x:</label>
        <input type="text" name="x">
        <label for="">y:</label>
        <input type="text" name="y">
        <label for="">z:</label>
        <input type="text" name="z">
        <input type="submit" value="Total">
    </form>
-->

     <!--
2nd
    <form action="index.php" method="post">
        <label for="">quantity: <label>
        <input type="text"name = "quantity">
        <input type="submit" value="total"><br>
    </form>
-->
    <!--
1st
    <form action="index.php" method="post">
        <label> username: </label>
        <input type = "text" name = "username"> <br>
        <label >password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
    -->

</body>
</html>


<?php
/*

1st
    echo "{$_POST["username"]}<br>";
    echo "{$_POST["password"]}<br>";
*/
/*
2nd
    $item = "przza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;
    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is \${$total}";
*/
//3ed
/*
if (isset($_POST["x"])) {
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    //$total = abs($x);

    //$total = round($x);
   // $total = floor($x);
    //$total = ceil($x);
    //$total = pow($x, $y);
    //$total = sqrt($x);
    //$total = max($x, $y, $z);
    //$total = min($x, $y, $z);
    //$total = pi();
    //$total = rand(1,100000);
    $total = 2*pi()*$x;

    echo $total;
    */

    if (isset($_POST["radius"]) && is_numeric($_POST["radius"])) {
        $radius = floatval($_POST["radius"]);
        $circumference = 2 * pi() * $radius;
        echo "<p>The circumference is {$circumference}</p>";
        // Draw the circle using SVG
        echo '<svg width="'.($radius*2+10).'" height="'.($radius*2+10).'">
                <circle cx="'.($radius+5).'" cy="'.($radius+5).'" r="'.$radius.'" stroke="black" stroke-width="2" fill="lightblue" />
              </svg>';
    }
?>
