<?php
/**
 * 以Json格式数据具体图片的组件类
 * Date: 2018-03-07
 * Time: 11:34
 */

namespace Creational\AbstractFactory\Json;
use Creational\AbstractFactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        return json_decode(array('title'=>$this->title, 'path'=>$this->path));
    }
}