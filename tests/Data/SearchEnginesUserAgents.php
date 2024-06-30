<?php

namespace ResetButton\PhpAntiBot\Tests\Data;

class SearchEnginesUserAgents
{

    public static function bing() : array
    {
        return [
            'Bing::Bingbot 1' => [ 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/'],
            'Bing::Bingbot 2' => [ 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)W.X.Y.Z Safari/537.36'],
            'Bing::Bingbot 3' => [ 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36  (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)'],
            'Bing::AdIdxBot 1' => [ 'Mozilla/5.0 (compatible; adidxbot/2.0; +http://www.bing.com/bingbot.htm)'],
            'Bing::AdIdxBot 2' => [ 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53 (compatible; adidxbot/2.0; +http://www.bing.com/bingbot.htm)'],
            'Bing::AdIdxBot 3' => [ 'Mozilla/5.0 (Windows Phone 8.1; ARM; Trident/7.0; Touch; rv:11.0; IEMobile/11.0; NOKIA; Lumia 530) like Gecko (compatible; adidxbot/2.0; +http://www.bing.com/bingbot.htm)'],
            'Bing::BingPreview 1' => [ 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/W.X.Y.Z Safari/537.36'],
            'Bing::BingPreview 2' => [ 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36  (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)'],
            'Bing::MicrosoftPreview 1' => [ 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; MicrosoftPreview/2.0; +https://aka.ms/MicrosoftPreview) Chrome/W.X.Y.Z Safari/537.36'],
            'Bing::MicrosoftPreview 2' => [ 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36  (compatible; MicrosoftPreview/2.0; +https://aka.ms/MicrosoftPreview)'],
        ];
    }

    public static function duckduckgo()
    {
        return [
            'DuckDuckGo::DuckDuckBot' => [ 'DuckDuckBot/1.1; (+http://duckduckgo.com/duckduckbot.html)']
        ];
    }

    public static function google()
    {
        return [
            'Google::Googlebot Smartphone' => [ 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'],
            'Google::Googlebot Desktop 1' => [ 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/W.X.Y.Z Safari/537.36'],
            'Google::Googlebot Desktop 2' => [ 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'],
            'Google::Googlebot Desktop 3' => [ 'Googlebot/2.1 (+http://www.google.com/bot.html)'],
            'Google::Googlebot Image' => [ 'Googlebot-Image/1.0'],
            'Google::Googlebot Video' => [ 'Googlebot-Video/1.0'],
            'Google::Google StoreBot Desctop' => [ 'Mozilla/5.0 (X11; Linux x86_64; Storebot-Google/1.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Safari/537.36'],
            'Google::Google StoreBot Mobile' => [ 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012; Storebot-Google/1.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36'],
            'Google::Google-InspectionTool Mobile' => [ 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36 (compatible; Google-InspectionTool/1.0;)'],
            'Google::Google-InspectionTool Desktop' => [ 'Mozilla/5.0 (compatible; Google-InspectionTool/1.0;)'],
            'Google::GoogleOther' => [ 'GoogleOther'],
            'Google::APIs-Google' => [ 'APIs-Google (+https://developers.google.com/webmasters/APIs-Google.html)'],
            'Google::AdsBot Mobile Web 1' => [ 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36 (compatible; AdsBot-Google-Mobile; +http://www.google.com/mobile/adsbot.html)'],
            'Google::AdsBot Mobile Web 2' => [ 'AdsBot-Google (+http://www.google.com/adsbot.html)'],
            'Google::AdSense' => [ 'Mediapartners-Google'],
            'Google::Mobile AdSense' => [ '(compatible; Mediapartners-Google/2.1; +http://www.google.com/bot.html)'],
            'Google::Google-Safety' => [ 'Google-Safety'],
            'Google::Feedfetcher' => [ 'FeedFetcher-Google; (+http://www.google.com/feedfetcher.html)'],
            'Google::Google Publisher Center' => [ 'GoogleProducer; (+http://goo.gl/7y4SX)'],
            'Google::Google Read Aloud 1' => [ 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)'],
            'Google::Google Read Aloud 2' => [ 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)'],
            'Google::Google Read Aloud 3' => [ 'google-speakr'],
            'Google::Google Site Verifier' => ['Mozilla/5.0 (compatible; Google-Site-Verification/1.0)'],
        ];
    }

    public static function yahoo() : array
    {
        return [
            'Yahoo::Yahoo! Slurp' => ['Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)'],
        ];
    }


}