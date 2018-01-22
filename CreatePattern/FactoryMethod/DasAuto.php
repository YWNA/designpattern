<?php
/**
 * Created by PhpStorm.
 * User: chenbo
 * Date: 2018/1/22
 * Time: 14:10
 */

namespace DesignPattern\CreatePattern\FactoryMethod;


class DasAuto implements Car
{
    public function getType()
    {
        return 'Das Auto';
    }
}