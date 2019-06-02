<?php

namespace LBHurtado\Common\Tests;

use LBHurtado\Common\CommonServiceProvider;
use Propaganistas\LaravelPhone\PhoneServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
        	CommonServiceProvider::class,
        	PhoneServiceProvider::class
        ];
    }
}