<?php
spl_autoload_register(function($className) {
    $className = str_replace("\\", "/", $className);

    var_dump(str_replace("\\", "/", __DIR__));

    include explode("Test", str_replace("\\", "/", __DIR__))[0] . 
        str_replace("YukisCoffee/CoffeeRequest", "", $className) .
        ".php"
    ;
});