<?php

/**
 * 多例模式
 *
 * Date: 2018-03-21
 * Time: 15:29
 */
namespace Creational\Multiton;

class Multiton
{
    // 实例1
    const INSTANCE_1 = '1';
    // 实例2
    const INSTANCE_2 = '2';

    //实例数组
    private static $instances = [];

    // 构造函数私有，不能从外部实例化
    private function __construct()
    {

    }

    // 防止实例被外部克隆
    private function __clone()
    {

    }

    //防止实例从外部反序列化
    private function __wakeup()
    {

    }

    public static function getInstance($instance_name)
    {
        if(!array_key_exists($instance_name, self::$instances))
        {
            self::$instances[$instance_name] = new self(); // 这里的示例化，应该是示例化某个类才对，示例化自身感觉就没啥意义了
        }
        return self::$instances[$instance_name];
    }

}