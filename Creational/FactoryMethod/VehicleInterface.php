<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-15
 * Time: 15:31
 */

namespace Creational\FactoryMethod;

// 车辆接口
interface VehicleInterface
{
    // 设置车的颜色
    public function setColor($rgb);
}