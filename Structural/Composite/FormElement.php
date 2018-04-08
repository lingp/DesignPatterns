<?php

/**
 * form元素抽象类
 * Date: 2018-04-04
 * Time: 10:48
 */
namespace Structural\Composite;

abstract class FormElement
{
    abstract public function render($indent = 0);
}