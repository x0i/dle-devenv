<?php

spl_autoload_register(function($class){
    if (substr($class, 0, 12) != 'Dle\\Modules\\') return false;
    $file = ENGINE_DIR . str_replace('\\', '/', strtolower(substr($class, 3))) . '.class.php';
    if (!file_exists($file)) return false;
    include_once $file;
    return true;
});
