<?php
/**
 * Created by PhpStorm.
 * User: chenbo
 * Date: 2018/1/22
 * Time: 14:11
 */

namespace DesignPattern\CreatePattern\FactoryMethod;


class DasAutoFactory implements CarFactory
{
    public function createCar()
    {
        $car = new DasAuto();
        return $car;
    }
}