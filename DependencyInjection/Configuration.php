<?php

namespace EmmanuelVella\AmazonBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('amazon');

        $rootNode
            ->children()
                ->scalarNode('key')
                    ->isRequired()->end()
                ->scalarNode('secret_key')
                    ->isRequired()->end()
                ->scalarNode('account_id')->end()
                ->scalarNode('assoc_id')->end()
                ->scalarNode('canonical_id')->end()
                ->scalarNode('canonical_name')->end()
                ->booleanNode('certificate_authority')
                    ->defaultFalse()->end()
                ->scalarNode('default_cache_config')->end()
                ->scalarNode('mfa_serial')->end()
                ->scalarNode('cloudfront_keypair_id')->end()
                ->scalarNode('cloudfront_private_key_pem')->end()
                ->booleanNode('enable_extensions')
                    ->defaultFalse()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
