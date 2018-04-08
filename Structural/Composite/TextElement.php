<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-04-04
 * Time: 11:01
 */

namespace Structural\Composite;


class TextElement extends FormElement
{
    public function render($indent = 0)
    {
        return str_repeat(" ", $indent) . "this is a text element";
    }
}