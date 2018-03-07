<?php
/**
 * 抽象工厂类
 *
 * 组件：文本和图片
 * 渲染方式：JSON和HTML
 * Date: 2018-03-07
 * Time: 11:16
 */

namespace Creational\AbstractFactory;

abstract class AbstractFactory
{
    //创建文本组件
    abstract public function createText($content);

    //创建图片组件
    abstract public function createPicture($path, $name = "");
}