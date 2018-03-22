<?php

/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-22
 * Time: 15:01
 */
namespace Creational\Prototype;

abstract class BookPrototype
{
    protected $title;

    protected $category;

    abstract public function __clone();

    public function getTitle()
    {
        return $this->title;
    }

    public function setTile($title)
    {
        $this->title = $title;
    }
}