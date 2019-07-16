<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Network;

class YoutubeChannel extends AbstractYoutubeNetwork
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
