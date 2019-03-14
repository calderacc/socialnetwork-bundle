<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\NetworkDetector;

use PhpBike\SocialNetworkBundle\Network\NetworkInterface;

interface NetworkDetectorInterface
{
    public function detect(string $url): ?NetworkInterface;

}
