<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-21
 * Time: 12:19
 */

namespace Creational\FactoryMethod;

class Bicycle implements VehicleInterface
{
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}