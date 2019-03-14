<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\Network;

class Google extends AbstractNetwork
{
    /** @var string $name */
    protected $name = 'Google+';

    /** @var string $icon */
    protected $icon = 'fa-google-plus';

    /** @var string $backgroundColor */
    protected $backgroundColor = 'rgb(234, 66, 53)';

    /** @var string $textColor */
    protected $textColor = 'white';

    public function accepts(string $url): bool
    {
        $pattern = '/^(https?\:\/\/)((www\.)?)(plus\.google\.com)\/\+([a-zA-Z0-9-]+)(\/?)$/';

        preg_match($pattern, $url, $matches);

        return $matches && is_array($matches) && count($matches) > 1;
    }
}
