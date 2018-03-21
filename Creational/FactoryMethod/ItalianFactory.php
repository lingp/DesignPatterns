<?php
/**
 *  意大利造车厂
 * Date: 2018-03-15
 * Time: 15:26
 */

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Bicycle;
use Creational\FactoryMethod\Ferrari;

class ItalianFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        switch ($type)
        {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                return new Ferrari();
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");

        }
    }
}