<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\Network;

class InstagramProfile extends AbstractInstagramNetwork
{
    /** @var string $name */
    protected $name = 'Instagram-Profil';

    public function accepts(string $url): bool
    {
        $pattern = '/^(https?\:\/\/)?(www\.)?(instagram\.com)\/.+$/';

        preg_match($pattern, $url, $matches);

        return $matches && is_array($matches) && count($matches) > 1;
    }
}
