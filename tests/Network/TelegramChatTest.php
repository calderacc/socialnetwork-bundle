<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\TelegramChat;
use PHPUnit\Framework\TestCase;

class TelegramChatTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('Telegram-Chat', (new TelegramChat())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('telegram_chat', (new TelegramChat())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('rgb(40, 159, 217)', (new TelegramChat())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('white', (new TelegramChat())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('fa-telegram', (new TelegramChat())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(0, (new TelegramChat())->getDetectorPriority());
    }
}
