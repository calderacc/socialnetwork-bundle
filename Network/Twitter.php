<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Network;

class Twitter extends AbstractNetwork
{
    /** @var string $name */
    protected $name = 'twitter';

    /** @var string $icon */
    protected $icon = 'fab fa-twitter';

    /** @var string $backgroundColor */
    protected $backgroundColor = 'rgb(29, 161, 242)';

    /** @var string $textColor */
    protected $textColor = 'white';

    public function accepts(string $url): bool
    {
        $pattern = '/http(?:s)?:\/\/(?:www\.)?twitter\.com\/([a-zA-Z0-9_]+)/';

        preg_match($pattern, $url, $matches);

        return $matches && is_array($matches) && 2 === count($matches);
    }
}
