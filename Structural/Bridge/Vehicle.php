<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-04-03
 * Time: 15:59
 */

namespace Structural\Bridge;


abstract class Vehicle
{
    protected $workShop1;
    protected $workShop2;

    protected function __construct(Workshop $workShop1, Workshop $workShop2)
    {
        $this->workShop1 =  $workShop1;
        $this->workShop2 = $workShop2;
    }

    public function manufacture()
    {

    }
}