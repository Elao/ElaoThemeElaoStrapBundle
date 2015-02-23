<?php

/**
 * This file is part of the Elao ElaoStrap Theme Bundle.
 *
 * Copyright (C) 2015 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\Theme\ElaoStrapThemeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('elao_theme_elaostrap');

        return $treeBuilder;
    }
}
