<?php
namespace App\model;

class AutoloaderModel
{
    static function register(){
        spl_autoload_register(array(__CLASS__,'autoload'));
    }
    static function autoload($class){
        $class = str_replace(__NAMESPACE__ . "\\", "", $class);
        $class = str_replace("\\", "/", $class);
        require '../model/'.$class.'.php';
    }
}

?>