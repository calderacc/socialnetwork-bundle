<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Network;

use Facebook\Exceptions\FacebookResponseException;

class FacebookProfile extends AbstractFacebookNetwork
{
    /** @var string $name */
    protected $name = 'facebook-Profil';

    public function accepts(SocialNetworkProfile $socialNetworkProfile): bool
    {
        if (!parent::accepts($socialNetworkProfile)) {
            return false;
        }

        $profileName = $this->getProfileFromUrl($socialNetworkProfile);

        // Sorry, this is so ugly, please provide a better solution and do not try this at home!
        try {
            $endpoint = sprintf('/%s', $profileName);

            $result = $this->facebookApi->query($endpoint);
        } catch (FacebookResponseException $exception) {
            if (strpos($exception->getMessage(), '(#803) Cannot query users by their username') !== false) {
                return true;
            }
        }

        return false;
    }
}
