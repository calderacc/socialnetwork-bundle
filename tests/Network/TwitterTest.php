<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\Twitter;
use PHPUnit\Framework\TestCase;

class TwitterTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('twitter', (new Twitter())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('twitter', (new Twitter())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('rgb(29, 161, 242)', (new Twitter())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('white', (new Twitter())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('fa-twitter', (new Twitter())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(0, (new Twitter())->getDetectorPriority());
    }
}
