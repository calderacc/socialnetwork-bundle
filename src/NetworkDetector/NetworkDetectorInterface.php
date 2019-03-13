<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\NetworkDetector;

use App\Entity\SocialNetworkProfile;
use PhpBike\SocialNetworkBundle\Network\NetworkInterface;

interface NetworkDetectorInterface
{
    public function detect(SocialNetworkProfile $socialNetworkProfile): ?NetworkInterface;

}
