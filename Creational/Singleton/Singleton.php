<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-27
 * Time: 10:06
 */
namespace Creational\Singleton;

class Singleton
{
    private static $instance;

    //延时加载（用到时再加载）获取实例
    public static function getInstance()
    {
        if( null == static::$instance )
        {
            static::$instance = new static;
        }
        return static::$instance;
    }

    // 不让外部实例化
    private function __construct()
    {
    }

    // 防止被克隆
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    // 防止反序列化
    private function __wakeup()
    {

    }

}