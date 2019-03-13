<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\NetworkDetector;

use PhpBike\SocialNetworkBundle\Network\NetworkInterface;
use PhpBike\SocialNetworkBundle\NetworkManager\NetworkManager;
use PhpBike\SocialNetworkBundle\NetworkManager\NetworkManagerInterface;

abstract class AbstractNetworkDetector implements NetworkDetectorInterface
{
    /** @var NetworkManager $networkManager */
    protected $networkManager;

    /** @var array $networkList */
    protected $networkList = [];

    public function __construct(NetworkManagerInterface $networkManager)
    {
        $this->networkManager = $networkManager;
        $this->networkList = $networkManager->getNetworkList();

        $this->sortNetworkList();
    }

    protected function sortNetworkList(): NetworkDetector
    {
        usort($this->networkList, function(NetworkInterface $a, NetworkInterface$b)
        {
            return $b->getDetectorPriority() <=> $a->getDetectorPriority();
        });

        return $this;
    }
}
