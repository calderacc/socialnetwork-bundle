<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\NetworkManager;

use PhpBike\SocialNetworkBundle\Network\NetworkInterface;

interface NetworkManagerInterface
{
    public function addNetwork(NetworkInterface $network): NetworkManager;
    public function getNetworkList(): array;
    public function hasNetwork(string $identifier): bool;
    public function getNetwork(string $identifier): NetworkInterface;
}
