<?php
/**
 * 渲染HTML
 * HtmlFactory类
 * Date: 2018-03-07
 * Time: 11:24
 */
namespace Creational\AbstractFactory;
use Creational\AbstractFactory\AbstractFactory as BaseAbstractFactory;

class HtmlFactory extends BaseAbstractFactory
{
    public function createPicture($path, $name = "")
    {
        return new Html\Picture($path, $name);
    }

    public function createText($content)
    {
        return new Html\Text($content);
    }
}