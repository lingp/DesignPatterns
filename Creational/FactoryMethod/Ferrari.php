<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-21
 * Time: 12:21
 */

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\VehicleInterface;

class Ferrari implements VehicleInterface
{
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}