<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComputerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\ComputerInterface::class, \App\Computer::class);
        $this->app->bind(\App\HardDriveInterface::class, \App\HardDrive::class);
        $this->app->bind(\App\MemoryInterface::class, \App\Memory::class);
    }
}
