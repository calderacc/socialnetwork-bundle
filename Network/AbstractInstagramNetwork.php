<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Network;

abstract class AbstractInstagramNetwork extends AbstractNetwork
{
    /** @var string $icon */
    protected $icon = 'fab fa-instagram';

    /** @var string $backgroundColor */
    protected $backgroundColor = 'rgb(203, 44, 128)';

    /** @var string $textColor */
    protected $textColor = 'white';
}
