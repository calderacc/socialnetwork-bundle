<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\Homepage;
use PHPUnit\Framework\TestCase;

class HomepageTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('Homepage', (new Homepage())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('homepage', (new Homepage())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('white', (new Homepage())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('black', (new Homepage())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('far fa-home', (new Homepage())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(-100, (new Homepage())->getDetectorPriority());
    }
}
