<?php

namespace ResetButton\PhpAntiBot\Tests\Data;

class BotsEnginesUserAgents
{
    public static function get() : array
    {
        return [
            'Semrush' => ['Mozilla/5.0 (compatible; SemrushBot-OCOB/1; +https://www.semrush.com/bot/)'],
            'Amazonbot' => ['Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML\, like Gecko) Version/8.0.2 Safari/600.2.5 (Amazonbot/0.1; +https://developer.amazon.com/support/amazonbot)'],
        ];
    }

}