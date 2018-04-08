<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-04-04
 * Time: 11:00
 */

namespace Structural\Composite;


class InputElement extends FormElement
{
    public function render($indent = 0)
    {
        return str_repeat(' ', $indent) . "<input type = 'text' />";
    }
}