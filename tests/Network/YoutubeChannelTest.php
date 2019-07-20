<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\YoutubeChannel;
use PHPUnit\Framework\TestCase;

class YoutubeChannelTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('YouTube', (new YoutubeChannel())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('youtube_channel', (new YoutubeChannel())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('rgb(255, 0, 0)', (new YoutubeChannel())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('white', (new YoutubeChannel())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('fa-youtube', (new YoutubeChannel())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(0, (new YoutubeChannel())->getDetectorPriority());
    }
}
