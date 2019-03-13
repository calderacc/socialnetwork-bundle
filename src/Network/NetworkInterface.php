<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\Network;

use App\Entity\SocialNetworkProfile;

interface NetworkInterface
{
    public function getName(): string;
    public function getIcon(): string;
    public function getBackgroundColor(): string;
    public function getTextColor(): string;

    public function getIdentifier(): string;
    public function getDetectorPriority(): int;
    public function accepts(SocialNetworkProfile $socialNetworkProfile): bool;
}
