<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\SocialNetworkDetector;

class TelegramChatDetectorTest extends AbstractNetworkDetectorTest
{
    public function testTelegramChat(): void
    {
        $network = $this->detect('https://t.me/WEgc3436ew');

        $this->assertEquals('telegram_chat', $network->getIdentifier());

        $network = $this->detect('http://t.me/WEgc3436ew');

        $this->assertEquals('telegram_chat', $network->getIdentifier());
    }
}
