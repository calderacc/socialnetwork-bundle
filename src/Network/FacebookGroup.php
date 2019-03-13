<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\Network;

use App\Entity\SocialNetworkProfile;

class FacebookGroup extends AbstractFacebookNetwork
{
    /** @var string $name */
    protected $name = 'facebook-Gruppe';

    public function accepts(SocialNetworkProfile $socialNetworkProfile): bool
    {
        if (!parent::accepts($socialNetworkProfile)) {
            return false;
        }

        return strpos($socialNetworkProfile->getIdentifier(), 'facebook.com/groups/') !== false;
    }
}
