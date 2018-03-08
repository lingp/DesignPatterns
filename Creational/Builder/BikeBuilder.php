<?php
/**
 * Created by PhpStorm.
 * User: zuzuche-0132
 * Date: 2018-03-08
 * Time: 10:42
 */

namespace Creational\Builder;

class BikeBuilder implements BuilderInterface
{
    protected $bike;

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
    }

    public function addEngine()
    {
        $this->bike->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->bike->setPart('forwardWheel', new Parts\Wheel());
        $this->bike->setPart('afterWheel', new Parts\Wheel());
    }

    public function createVehicle()
    {
        $this->bike = new Parts\Bike();
    }

    /**
     * @return mixed
     */
    public function getVehicle()
    {
        return $this->bike;
    }
}