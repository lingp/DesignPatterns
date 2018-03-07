<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-07
 * Time: 11:32
 */

namespace Creational\AbstractFactory;


abstract class Text implements MediaInterface
{
    protected $text;

    public function  __construct($text)
    {
        $this->text = (string) $text;
    }
}