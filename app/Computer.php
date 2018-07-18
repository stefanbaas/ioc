<?php

namespace App;

class Computer implements ComputerInterface
{
    protected $hardDrive;
    protected $memory;

    public function __construct(HardDriveInterface $hardDrive, MemoryInterface $memory)
    {
        $this->hardDrive = $hardDrive;
        $this->memory = $memory;
    }

    public function getSpecs(): string
    {
        $returnValue = $this->hardDrive->getString()."<br/>";
        $returnValue .= $this->memory->getString()."<br/>";

        return $returnValue;
    }
}