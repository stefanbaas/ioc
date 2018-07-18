<?php

namespace App;

class Memory implements MemoryInterface
{

    public function getString(): string
    {
        return "16GB memory";
    }
}