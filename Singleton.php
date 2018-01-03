<?php
/**
 * Created by PhpStorm.
 * User: chenbo
 * Date: 2018/1/3
 * Time: 16:54
 */

namespace DesignPattern;


class Singleton
{
    private static $conn;
    private function __construct()
    {
        self::$conn = mysqli_connect('localhost','root','');
    }
    public function getInstance(){
        if (!self::$conn instanceof self){
            self::$conn = new self();
        }
        return self::$conn;
    }
    public function __clone()
    {
        trigger_error('could not allowed clone');
    }
    public function __wakeup()
    {
        trigger_error('could not be allowed');
    }
}