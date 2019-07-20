<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\SocialNetworkDetector;

class HomepageDetectorTest extends AbstractNetworkDetectorTest
{
    public function testHomepage(): void
    {
        $network = $this->detect('https://criticalmass-hamburg.de/');

        $this->assertEquals('homepage', $network->getIdentifier());

        $network = $this->detect('http://criticalmass-hamburg.de/');

        $this->assertEquals('homepage', $network->getIdentifier());

        $network = $this->detect('https://criticalmass-hamburg.de');

        $this->assertEquals('homepage', $network->getIdentifier());

        $network = $this->detect('criticalmass-hamburg.de/');

        $this->assertNull($network);
    }
}
