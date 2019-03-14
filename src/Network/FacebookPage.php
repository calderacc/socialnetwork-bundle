<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\Network;

use Facebook\Exceptions\FacebookResponseException;

class FacebookPage extends AbstractFacebookNetwork
{
    /** @var string $name */
    protected $name = 'facebook-Seite';

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
            if (strpos($exception->getMessage(), 'An access token is required to request this resource.') !== false) {
                return true;
            }
        }

        return false;
    }
}