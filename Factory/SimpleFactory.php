<?php
/**
 * Created by PhpStorm.
 * User: chenbo
 * Date: 2018/1/4
 * Time: 9:49
 */

namespace DesignPattern\Factory;
require "Car.php";

class SimpleFactory
{
    public static function createCar(){
        return new Car();
    }
}