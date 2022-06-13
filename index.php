<?php
class Car{
    public static $value=10;
    public static function MyName(){
        echo 'Toyota';
    }
}

Car::MyName();
echo '<br>'.Car::$value;
?>