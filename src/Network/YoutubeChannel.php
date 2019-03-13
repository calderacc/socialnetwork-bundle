<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\Network;

use App\Entity\SocialNetworkProfile;

class YoutubeChannel extends AbstractNetwork
{
    /** @var string $name */
    protected $name = 'YouTube';

    public function accepts(SocialNetworkProfile $socialNetworkProfile): bool
    {
        // ^(https?\:\/\/)?(www\.)?(flickr\.com)\/(photos)\/.+$
        $pattern = '/^(https?\:\/\/)?(www\.)?(youtube\.com)\/(channel)\/.+$/';

        preg_match($pattern, $socialNetworkProfile->getIdentifier(), $matches);

        return $matches && is_array($matches) && count($matches) > 1;
    }
}
