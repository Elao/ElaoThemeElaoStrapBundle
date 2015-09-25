<?php

/**
 * This file is part of the Elao ElaoStrap Theme Bundle.
 *
 * Copyright (C) 2015 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\Theme\ElaoStrapBundle\Form\Transformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class DateTransformer implements DataTransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform($value)
    {
        return $value;
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform($value)
    {
        if (empty($value['date']['year']) && empty($value['date']['month']) && empty($value['date']['day'])) {
            return [];
        }

        return $value;
    }
}
