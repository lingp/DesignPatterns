<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-23
 * Time: 10:14
 */

namespace Creational\SimpleFactory;


class Bicycle implements VehicleInterface
{
    public function driveTo($destination)
    {
        echo "bicycle " . $destination;
    }
}