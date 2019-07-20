<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\WhatsappChat;
use PHPUnit\Framework\TestCase;

class WhatsappChatTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('WhatsApp-Chat', (new WhatsappChat())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('whatsapp_chat', (new WhatsappChat())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('rgb(65, 193, 83)', (new WhatsappChat())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('white', (new WhatsappChat())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('fa-whatsapp', (new WhatsappChat())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(0, (new WhatsappChat())->getDetectorPriority());
    }
}
