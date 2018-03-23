<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-23
 * Time: 10:15
 */

namespace Creational\SimpleFactory;


class Scooter implements VehicleInterface
{
    public function driveTo($destination)
    {
        echo "scooter " . $destination;
    }
}