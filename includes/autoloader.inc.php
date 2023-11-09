<?php

spl_autoload_register('autoloadClass');

function autoloadClass($classname)
{
    $path = "../classes/";
    $extension = ".class.php";
    $fullpath = $path . $classname . $extension;

    include_once($fullpath);
}
