<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\Google;
use PHPUnit\Framework\TestCase;

class GoogleTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('Google+', (new Google())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('google', (new Google())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('rgb(234, 66, 53)', (new Google())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('white', (new Google())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('fa-google-plus', (new Google())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(0, (new Google())->getDetectorPriority());
    }
}
