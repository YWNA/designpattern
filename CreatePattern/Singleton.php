<?php
/**
 * Created by PhpStorm.
 * User: chenbo
 * Date: 2018/1/22
 * Time: 13:44
 */

namespace DesignPattern\CreatePattern;


class Singleton
{
    private static $instance;
    private function __construct()
    {
        self::$instance = mysqli_connect('localhost','root','');
    }
    public function getInstance(){
        if (!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function __clone()
    {
        trigger_error('could not to be clone');
    }
    public function __wakeup()
    {
        trigger_error('could not to be allowed');
    }
}