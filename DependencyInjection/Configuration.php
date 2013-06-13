<?php

namespace KMJ\ChannelAdvisorBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('kmj_channel_advisor');
        
        $rootNode->children()
                    ->scalarNode('key')
                        ->cannotBeEmpty()
                        ->isRequired()
                    ->end()
                    ->scalarNode('password')
                        ->cannotBeEmpty()
                        ->isRequired()
                    ->end()
                     ->scalarNode('accountid')
                        ->cannotBeEmpty()
                        ->isRequired()
                    ->end()
                    ->arrayNode('wsdl')
                        ->children()
                            ->scalarNode('admin')
                                ->defaultValue('https://api.channeladvisor.com/ChannelAdvisorKMJ/v7/AdminService.asmx?WSDL')
                            ->end()
                            ->scalarNode('cart')
                                ->defaultValue('https://api.channeladvisor.com/ChannelAdvisorKMJ/v7/CartService.asmx?WSDL')
                            ->end()
                            ->scalarNode('inventory')
                                ->defaultValue('https://api.channeladvisor.com/ChannelAdvisorKMJ/v7/InventoryService.asmx?WSDL')
                            ->end()
                            ->scalarNode('listing')
                                ->defaultValue('https://api.channeladvisor.com/ChannelAdvisorKMJ/v7/ListingService.asmx?WSDL')
                            ->end()
                            ->scalarNode('marketplace')
                                ->defaultValue('https://api.channeladvisor.com/ChannelAdvisorKMJ/v7/MarketplaceAdService.asmx?WSDL')
                            ->end()
                            ->scalarNode('order')
                                ->defaultValue('https://api.channeladvisor.com/ChannelAdvisorKMJ/v7/OrderService.asmx?WSDL')
                            ->end()
                            ->scalarNode('shipping')
                                ->defaultValue('https://api.channeladvisor.com/ChannelAdvisorKMJ/v7/ShippingService.asmx?WSDL')
                            ->end() 
                        ->end()
                    ->end()
                ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
