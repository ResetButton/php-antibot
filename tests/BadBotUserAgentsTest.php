<?php

namespace ResetButton\PhpAntiBot\Tests;

use ResetButton\PhpAntiBot\Visitor;

class BadBotUserAgentsTest extends UserAgentsTestCase
{
    /**
     * @dataProvider badBotsDataProvider
     */
    public function testIsBadBot(string $useragent): void
    {
        $visitor = new Visitor($useragent);
        $this->assertTrue($visitor->isBadBot());
    }

    /**
     * @dataProvider goodBotsDataProvider
     */
    public function testIsNotBadBot(string $useragent): void
    {
        $visitor = new Visitor($useragent);
        $this->assertFalse($visitor->isBadBot());
    }

}

