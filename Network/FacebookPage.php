<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Network;

class FacebookPage extends AbstractFacebookNetwork
{
    /** @var string $name */
    protected $name = 'facebook-Seite';

    public function accepts(string $url): bool
    {
        if (!parent::accepts($url)) {
            return false;
        }

     //   $profileName = $this->getProfileFromUrl($url);

        return false;

    }
}
