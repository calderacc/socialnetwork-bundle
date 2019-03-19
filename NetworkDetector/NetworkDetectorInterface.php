<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\NetworkDetector;

use Caldera\SocialNetworkBundle\Network\NetworkInterface;

interface NetworkDetectorInterface
{
    public function detect(string $url): ?NetworkInterface;

}
