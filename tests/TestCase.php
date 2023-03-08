<?php

namespace Zndron\Tabs\Tests;

use Zndron\Tabs\TabsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            TabsServiceProvider::class,
        ];
    }
}
