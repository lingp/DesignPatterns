<?php

/**
 * HTML渲染具体的图片类
 * Date: 2018-03-07
 * Time: 11:41
 */
namespace Creational\AbstractFactory\Html;
use Creational\AbstractFactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        return sprintf("<img src='%s' title='%s'>", $this->path, $this->name);
    }
}