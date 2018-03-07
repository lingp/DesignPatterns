<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-07
 * Time: 11:43
 */

namespace Creational\AbstractFactory\Html;
use Creational\AbstractFactory\Text as BaseText;

class Text extends BaseText
{
    public function render()
    {
        return "<div>" . htmlspecialchars($this->text) . "</div>";
    }
}