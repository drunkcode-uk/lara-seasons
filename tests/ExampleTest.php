<?php

namespace Drunkcode\LaraSeasons\Tests;

use Orchestra\Testbench\TestCase;
use Drunkcode\LaraSeasons\LaraSeasonsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaraSeasonsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
