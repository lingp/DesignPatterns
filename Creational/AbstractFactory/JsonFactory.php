<?php
/**
 * 渲染Json
 * JsonFactory类
 * Date: 2018-03-07
 * Time: 11:20
 */

namespace Creational\AbstractFactory;
use Creational\AbstractFactory\AbstractFactory as BaseAbstractFactory;

class JsonFactory extends BaseAbstractFactory
{
    //创建图片组件
    public function createPicture($path, $name = "")
    {
        return new Json\Picture($path, $name);
    }

    //创建文本组件
    public function createText($content)
    {
        return new Json\Text($content);
    }
}