<?php

include("/opt/lampp/htdocs/calculator_php_oops/includes/autoloader.inc.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>calculator</h1>
    <form action="./includes/calc.inc.php" method="post">
        <select name="operations" id="">
            <option value="add">addition</option>
            <option value="sub">subtraction</option>
            <option value="mul">multiplication</option>
            <option value="div">division</option>
        </select>
        <input type="text" name="first" placeholder="firstnumber">
        <input type="text" name="second" placeholder="secondnumber">
        <input type="submit" value="submit">
    </form>
</body>

</html>


   

