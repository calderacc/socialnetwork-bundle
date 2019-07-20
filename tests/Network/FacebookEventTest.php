<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\FacebookEvent;
use PHPUnit\Framework\TestCase;

class FacebookEventTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('facebook-Event', (new FacebookEvent())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('facebook_event', (new FacebookEvent())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('rgb(60, 88, 152)', (new FacebookEvent())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('white', (new FacebookEvent())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('fa-facebook', (new FacebookEvent())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(0, (new FacebookEvent())->getDetectorPriority());
    }
}