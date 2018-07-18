<?php

namespace Tests\Unit;

use App\Memory;
use App\MemoryInterface;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MemoryTest extends TestCase
{
    private $sut;

    protected function setUp()
    {
        parent::setUp();

        $this->sut = new Memory();
    }

    public function testInstantiation()
    {
        $this->assertNotEmpty($this->sut);
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf(MemoryInterface::class, $this->sut);
    }

    public function testGetString()
    {
        $this->assertTrue(is_string($this->sut->getString()));
    }
}
