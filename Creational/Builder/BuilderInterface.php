<?php
/**
 * 建造者接口
 * Date: 2018-03-08
 * Time: 10:31
 */

namespace Creational\Builder;

interface BuilderInterface
{
    // 创建车辆
    public function createVehicle();

    // 添加车轮
    public function addWheel();

    // 添加引擎
    public function addEngine();

    // 添加车门
    public function addDoors();

    //获取车辆
    public function getVehicle();

}