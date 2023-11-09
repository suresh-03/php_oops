<?php

declare(strict_types=1);
include("/opt/lampp/htdocs/calculator_php_oops/includes/autoloader.inc.php");

$first = $_POST["first"];
$second = $_POST["second"];
$oper = $_POST["operations"];

$calci = new calculator($oper,(int)$first,(int)$second);
echo $calci->calculate();