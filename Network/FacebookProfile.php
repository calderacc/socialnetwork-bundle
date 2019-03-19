<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Network;

class FacebookProfile extends AbstractFacebookNetwork
{
    /** @var string $name */
    protected $name = 'facebook-Profil';

    public function accepts(string $url): bool
    {
        if (!parent::accepts($url)) {
            return false;
        }

        //$profileName = $this->getProfileFromUrl($url);

        return false;
    }
}
