<?php declare(strict_types=1);

namespace PhpBike\SocialNetworkBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SocialNetworkBundle extends Bundle
{
    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader)
    {
        $container->registerForAutoconfiguration(NetworkInterface::class)->addTag('social_network.network');
        $container->addCompilerPass(new SocialNetworkPass());

    }
}