<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\DiscordChat;
use PHPUnit\Framework\TestCase;

class DiscordChatTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('Discord-Chat', (new DiscordChat())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('discord_chat', (new DiscordChat())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('rgb(114, 137, 218)', (new DiscordChat())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('white', (new DiscordChat())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('fa-discord', (new DiscordChat())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(0, (new DiscordChat())->getDetectorPriority());
    }
}
