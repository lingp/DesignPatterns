<?php
namespace Creational\Builder\Parts;
/**
 * 车辆接口
 * Date: 2018-03-08
 * Time: 10:50
 */
abstract class Vehicle
{
    protected $data;

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}