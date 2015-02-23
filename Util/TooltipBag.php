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
 * Tooltip HTML Attributes Bag
 */
class TooltipBag extends AttributeBag
{
    /**
     * {@inheritdoc}
     */
    protected function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'toggle' => 'tooltip',
            )
        );

        $resolver->setDefined(
            array(
                'animation',
                'html',
                'placement',
                'selector',
                'title',
                'trigger',
                'delay',
                'container',
            )
        );

        $resolver->setAllowedTypes('animation', 'bool');
        $resolver->setAllowedTypes('html', 'bool');
        $resolver->setAllowedTypes('placement', 'string');
        $resolver->setAllowedTypes('selector', array('string', 'bool'));
        $resolver->setAllowedTypes('title', 'string');
        $resolver->setAllowedTypes('container', array('string', 'bool'));

        $resolver->setAllowedValues('placement', array('top', 'bottom', 'left', 'right', 'auto');
        $resolver->setAllowedValues('trigger', array('click', 'hover', 'focus', 'manual');
    }
}
