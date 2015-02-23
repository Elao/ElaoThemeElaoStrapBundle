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
use Elao\Bundle\Theme\ElaoStrapThemeBundle\Util\TooltipBag;

/**
 * Popover HTML Attributes Bag
 */
class PopoverBag extends TooltipBag
{
    /**
     * {@inheritdoc}
     */
    protected function setDefaultOptions(OptionsResolver $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefault('toggle', 'popover');
        $resolver->setDefined(array('content'));
        $resolver->setAllowedTypes('content', 'string');
    }
}
