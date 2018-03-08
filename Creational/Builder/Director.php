<?php
namespace Creational\Builder;
/**
 *  Director(导演) 获取建造者的接口，并通过建造者构建复杂对象
 *  可以通过依赖注入建造者的方式构造任何复杂对象
 * Date: 2018-03-08
 * Time: 10:25
 */
class Director
{
    //细节被隐藏了
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}