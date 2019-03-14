<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\Network;

class YoutubeChannel extends AbstractNetwork
{
    /** @var string $name */
    protected $name = 'YouTube';

    public function accepts(string $url): bool
    {
        $pattern = '/^(https?\:\/\/)?(www\.)?(youtube\.com)\/(channel)\/.+$/';

        preg_match($pattern, $url, $matches);

        return $matches && is_array($matches) && count($matches) > 1;
    }
}
