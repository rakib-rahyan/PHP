<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">quantity: <label>
        <input type="text"name = "quantity">
        <input type="submit" value="total"><br>
    </form>





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
    $item = "przza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;
    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is \${$total}";
?>
