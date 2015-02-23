<?php

/**
 * This file is part of the Elao ElaoStrap Theme Bundle.
 *
 * Copyright (C) 2015 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\Theme\ElaoStrapBundle\Util;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Elao\Bundle\Theme\ElaoStrapThemeBundle\Util\AttributeBag;

/**
 * Collapse HTML Attributes Bag
 */
class CollapseBag extends AttributeBag
{
    /**
     * {@inheritdoc}
     */
    protected function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'toggle' => 'collapse',
            )
        );

        $resolver->setRequired(
            array(
                'parent',
            )
        );

        $resolver->setDefined(
            array(
                'target',
            )
        );

        $resolver->setAllowedTypes('toggle', 'string');
        $resolver->setAllowedTypes('parent', 'string');
        $resolver->setAllowedTypes('target', 'string');
    }
}
