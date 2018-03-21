<?php
namespace Creational\FactoryMethod;

// 工厂方法抽象类
abstract class FactoryMethod
{
    const CHEAP = 1;
    const FAST = 2;

    // 子类必须实现该方法，主要是实现具体的实现逻辑
    abstract protected function createVehicle($type);

    // 创建新的车辆
    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00"); // 通用行为

        return $obj;
    }
}