<?php

/**
 *  简单工厂类
 * Date: 2018-03-23
 * Time: 10:03
 */
namespace Creational\SimpleFactory;

class ConcreteFactory
{
    protected $type_list;

    // 注入自己的车子模型
    public function __construct()
    {
        $this->type_list = [
            'bicycle' => __NAMESPACE__ . '\Bicycle',
            'other' => __NAMESPACE__ . '\Scooter'
        ];
    }

    // 创建车子
    public function createVehicle($type)
    {
        if(!array_key_exists($type, $this->type_list))
        {
            throw new \InvalidArgumentException("{$type}不存在");
        }
        $class_name = $this->type_list[$type];
        return new $class_name;
    }
}