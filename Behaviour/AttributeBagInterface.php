<?php

/**
 * This file is part of the Elao ElaoStrap Theme Bundle.
 *
 * Copyright (C) 2015 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\Theme\ElaoStrapBundle\Behaviour;

/**
 * HTML Attributes Bag Interface
 */
interface AttributeBagInterface
{
    /**
     * Constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array());

    /**
     * Get attributes
     *
     * @return array
     */
    public function getAttributes();
}
