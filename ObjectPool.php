<?php
/**
 * Created by PhpStorm.
 * User: chenbo
 * Date: 2018/1/22
 * Time: 13:26
 */

namespace DesignPattern;


class ObjectPool
{
    private $instances = [];
    public function get($key){
        if (!isset($this->instances[$key])){
            $this->make($key);
        }
        return $this->instances[$key];
    }
    public function add($key, $value){
        $this->instances[$key] = $value;
        return;
    }
    public function make($key){
        switch ($key){
            case "mysql":
//                $this->instances[$key] = new mysql();
                break;
            default:
                $this->instances[$key] = null;
                break;
        }
        return;
    }

}