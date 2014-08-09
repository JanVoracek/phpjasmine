<?php

function __autoload($className)
{
    $classPath = str_replace("\\", "/", $className);

    $path = __DIR__ . "/" . $classPath . ".php";
    if (is_file($path)) {
        require_once($path);
    }
}

spl_autoload_register("__autoload");