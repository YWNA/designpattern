<?php
/**
 * Created by PhpStorm.
 * User: chenbo
 * Date: 2018/1/4
 * Time: 17:50
 */
namespace DesignPattern;
use DesignPattern\Factory\SimpleFactory;
require "Factory\SimpleFactory.php";
$car = SimpleFactory::createCar();
echo $car->run();