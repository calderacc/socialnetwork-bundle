<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle;

use Caldera\SocialNetworkBundle\DependencyInjection\Compiler\SocialNetworkPass;
use Caldera\SocialNetworkBundle\Network\NetworkInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SocialNetworkBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        $container->registerForAutoconfiguration(NetworkInterface::class)->addTag('social_network.network');

        $container->addCompilerPass(new SocialNetworkPass());
    }
}