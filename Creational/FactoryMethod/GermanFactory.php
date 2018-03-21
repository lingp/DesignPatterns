<?php
/**
 *  德国造车厂
 * Date: 2018-03-15
 * Time: 15:26
 */

namespace Creational\FactoryMethod;


class GermanFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        switch ($type)
        {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                return new Porsche();
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}