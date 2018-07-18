<?php

namespace Tests\Unit;

use App\HardDrive;
use App\HardDriveInterface;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HardDriveTest extends TestCase
{
    private $sut;

    protected function setUp()
    {
        parent::setUp();

        $this->sut = new HardDrive();
    }

    public function testInstantiation()
    {
        $this->assertNotEmpty($this->sut);
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf(HardDriveInterface::class, $this->sut);
    }

    public function testGetString()
    {
        $this->assertTrue(is_string($this->sut->getString()));
    }
}
