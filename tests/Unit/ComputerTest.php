<?php

namespace Tests\Unit;

use App\Computer;
use App\ComputerInterface;
use App\HardDrive;
use App\Memory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ComputerTest extends TestCase
{
    private $sut;

    protected function setUp()
    {
        parent::setUp();

        $this->sut = new Computer($this->createMock(HardDrive::class), $this->createMock(Memory::class));
    }

    public function testInstantiation()
    {
        $this->assertNotEmpty($this->sut);
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf(ComputerInterface::class, $this->sut);
    }

    public function testGetSpecs()
    {
        $this->assertTrue(is_string($this->sut->getSpecs()));
    }
}
