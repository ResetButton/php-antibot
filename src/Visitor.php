<?php

namespace ResetButton\PhpAntiBot;

class Visitor
{

    const GOOD_BOTS = [
        'Bing'  => [ //https://www.bing.com/webmasters/help/which-crawlers-does-bing-use-8c184ec0
            'user-agents' => ['www.bing.com/bingbot.htm','MicrosoftPreview']
        ],
        'DuckDuckGo' => [ //https://duckduckgo.com/duckduckgo-help-pages/results/duckduckbot/
            'user-agents' => ['duckduckbot.html']
        ],
        'Google' => [ //https://developers.google.com/search/docs/crawling-indexing/overview-google-crawlers
            'user-agents' => ['Google']
        ],
        'Yandex' => [ //https://yandex.ru/support/webmaster/robot-workings/check-yandex-robots.html
            'user-agents' => ['yandex.com/bots']
        ],
        'Yahoo' => [ //https://help.yahoo.com/kb/SLN22600.html
            'user-agents' => ['Yahoo! Slurp']
        ],
        'Yep' => [ //https://yep.com/yepbot/
            'user-agents' => ['AhrefsBot']
        ],
    ];

    private string $userAgent;
    private array $goodBots;

    public function __construct(string $userAgent)
    {
        $this->userAgent = $userAgent;
        $this->goodBots = self::GOOD_BOTS;
    }

    public function isBadBot() : bool
    {
        //If user-agent shorter than 10 symbols this is typically a bot
        if (strlen($this->userAgent) < 10 ) {
            return true;
        }

        //If string contains "bot" load additional checks
        $isBadBot = false;
        if (stripos($this->userAgent, 'bot')) {
            $isBadBot = !$this->isGoodBot();
        }

        return $isBadBot;
    }

    public function isGoodBot() : bool
    {
        $isGoodBot = false;
        foreach ($this->goodBots as $goodBot) {
            foreach ($goodBot['user-agents'] as $goodBotUserAgent) {
                if (stripos($this->userAgent, $goodBotUserAgent) !== false) {
                    $isGoodBot = true;
                    break;
                }
            }
        }

        return $isGoodBot;
    }


}