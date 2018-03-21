<?php
/**
 *  产品：保时捷
 * Date: 2018-03-21
 * Time: 12:17
 */

namespace Creational\FactoryMethod;

class Porsche implements VehicleInterface
{
    protected $color;

    public function setColor($rgb)
    {
       $this->color = $rgb;
    }
}