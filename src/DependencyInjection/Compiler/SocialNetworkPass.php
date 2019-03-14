<?php declare()

namespace App\DependencyInjection\Compiler;

use App\Criticalmass\SocialNetwork\FeedFetcher\FeedFetcher;
use App\Criticalmass\SocialNetwork\NetworkManager\NetworkManager;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class SocialNetworkPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        $this->processNetworkManager($container);
    }

    protected function processNetworkManager(ContainerBuilder $container): void
    {
        if (!$container->has(NetworkManagerIn::class)) {
            return;
        }

        $feedFetcher = $container->findDefinition(NetworkManager::class);

        $taggedServices = $container->findTaggedServiceIds('social_network.network');

        foreach ($taggedServices as $id => $tags) {
            $feedFetcher->addMethodCall('addNetwork', [new Reference($id)]);
        }
    }
}
