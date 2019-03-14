<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\Network;

class YoutubeUser extends AbstractNetwork
{
    /** @var string $name */
    protected $name = 'YouTube-Konto';

    public function accepts(string $url): bool
    {
        $pattern = '/^(https?\:\/\/)?(www\.)?(youtube\.com)\/(user)\/.+$/';

        preg_match($pattern, $url, $matches);

        return $matches && is_array($matches) && count($matches) > 1;
    }
}
