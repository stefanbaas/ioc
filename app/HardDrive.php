<?php

namespace App;

class HardDrive implements HardDriveInterface
{

    public function getString(): string
    {
        return "1TB SSD Hard drive";
    }
}