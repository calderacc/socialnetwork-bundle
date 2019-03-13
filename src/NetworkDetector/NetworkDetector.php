<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\NetworkDetector;

use App\Entity\SocialNetworkProfile;
use PhpBike\SocialNetworkBundle\Network\NetworkInterface;

class NetworkDetector extends AbstractNetworkDetector
{
    public function detect(SocialNetworkProfile $socialNetworkProfile): ?NetworkInterface
    {
        if (!$socialNetworkProfile->getIdentifier()) {
            return null;
        }

        /** @var NetworkInterface $network */
        foreach ($this->networkList as $network) {
            if ($network->accepts($socialNetworkProfile)) {
                return $network;
            }
        }

        return null;
    }
}
