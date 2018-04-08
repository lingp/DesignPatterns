<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-04-03
 * Time: 16:08
 */

namespace Structural\Bridge;

class Car extends Vehicle
{
    public function __construct(Workshop $workShop1, Workshop $workShop2)
    {
        parent::__construct($workShop1, $workShop2);
    }

    public function manufacture()
    {
        print "Car<br/>";
        $this->workShop1->work();
        $this->workShop2->work();
    }
}