<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle\Network;

class Homepage extends AbstractNetwork
{
    /** @var string */
    protected $name = 'Homepage';

    /** @var string $icon */
    protected $icon = 'fa-globe';

    /** @var string $backgroundColor */
    protected $backgroundColor = 'white';

    /** @var string $textColor */
    protected $textColor = 'black';

    /** @var int $detectorPriority */
    protected $detectorPriority = -100;

    public function accepts(string $url): bool
    {
        return false !== filter_var($url, FILTER_VALIDATE_URL);
    }
}
