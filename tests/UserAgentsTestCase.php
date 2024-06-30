<?php

namespace ResetButton\PhpAntiBot\Tests;

use PHPUnit\Framework\TestCase;
use ResetButton\PhpAntiBot\Tests\Data\BotsEnginesUserAgents;
use ResetButton\PhpAntiBot\Tests\Data\SearchEnginesUserAgents;

class UserAgentsTestCase extends TestCase
{

    public function badBotsDataProvider() : array
    {
        return BotsEnginesUserAgents::get();
    }

    public function goodBotsDataProvider() : array
    {
        return array_merge(
            SearchEnginesUserAgents::bing(),
            SearchEnginesUserAgents::duckduckgo(),
            SearchEnginesUserAgents::google(),
            SearchEnginesUserAgents::yahoo()
        );
    }

}

