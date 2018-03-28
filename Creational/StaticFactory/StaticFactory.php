<?php

/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-27
 * Time: 10:18
 */
namespace Creational\StaticFactory;

class StaticFactory
{
    // 通过传入参数创建相应的对象实例
    public static function factory($type)
    {
        $class_name = __NAMESPACE__ . '\Format' . ucfirst($type);

        if(!class_exists($class_name))
        {
            throw new \InvalidArgumentException("Missing format class.");
        }
        return new $class_name;
    }
}