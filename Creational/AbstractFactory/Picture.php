<?php
/**
 * Picture类
 * Date: 2018-03-07
 * Time: 11:30
 */

namespace Creational\AbstractFactory;


abstract class Picture implements MediaInterface
{
    protected $path;

    protected $name;

    public function __construct($path, $name = '')
    {
        $this->name = (string)$name;
        $this->path = (string)$path;
    }
}