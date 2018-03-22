<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-22
 * Time: 11:15
 */

namespace Creational\Pool;


class Worker
{
    public function __construct()
    {

    }

    public function run($image, array $callback)
    {
        call_user_func($callback, $this);
    }
}