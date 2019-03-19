<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\NetworkDetector;

use Caldera\SocialNetworkBundle\Network\NetworkInterface;
use Caldera\SocialNetworkBundle\NetworkManager\NetworkManager;
use Caldera\SocialNetworkBundle\NetworkManager\NetworkManagerInterface;

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
