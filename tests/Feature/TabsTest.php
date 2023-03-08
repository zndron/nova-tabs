<?php

namespace Zndron\Tabs\Tests\Feature;

use Zndron\Tabs\Tabs;
use Zndron\Tabs\Tests\TestCase;

class TabsTest extends TestCase
{
    public function testCanMakeTabsObject(): void
    {
        $tabs = Tabs::make([]);

        self::assertInstanceOf(Tabs::class, $tabs);
    }
}
