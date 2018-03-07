<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-07
 * Time: 11:37
 */

namespace Creational\AbstractFactory\Json;
use Creational\AbstractFactory\Text as BaseText;

class Text extends BaseText
{
    public function render()
    {
        return json_encode(array('content' => $this->text));
    }
}