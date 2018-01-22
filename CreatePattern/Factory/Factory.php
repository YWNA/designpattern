<?php
/**
 * Created by PhpStorm.
 * User: chenbo
 * Date: 2018/1/22
 * Time: 13:49
 */

namespace DesignPattern\CreatePattern\Factory;

/**
 * 简单工厂模式
 * @package DesignPattern\CreatePattern\Factory
 */
class Factory
{
    public function createCar(): Car {
        $car = new Car();
        return $car;
    }
}