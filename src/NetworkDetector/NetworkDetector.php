<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\NetworkDetector;

use PhpBike\SocialNetworkBundle\Network\NetworkInterface;

class NetworkDetector extends AbstractNetworkDetector
{
    public function detect(string $url): ?NetworkInterface
    {
        /** @var NetworkInterface $network */
        foreach ($this->networkList as $network) {
            if ($network->accepts($url)) {
                return $network;
            }
        }

        return null;
    }
}
