<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Network;

class FacebookEvent extends AbstractFacebookNetwork
{
    /** @var string $name */
    protected $name = 'facebook-Event';

    public function accepts(SocialNetworkProfile $socialNetworkProfile): bool
    {
        if (!parent::accepts($socialNetworkProfile)) {
            return false;
        }

        return strpos($socialNetworkProfile->getIdentifier(), 'facebook.com/events/') !== false;
    }
}
