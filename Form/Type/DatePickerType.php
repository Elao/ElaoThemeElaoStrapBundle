<?php
/**
 * This file is part of the MOBILIWORK website.
 *
 * Copyright (C) 2015 MOBILIWORK
 *
 * @author Elao <contact@elao.com>
 */
namespace Elao\Bundle\Theme\ElaoStrapBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Date picker form type
 */
class DatePickerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'widget'    => 'single_text',
            'format'    => 'dd/MM/y',
            'endDate'   => false,
            'startView' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        if ($options['endDate']) {
            $view->vars['attr']['data-end-date'] = $options['endDate'];
        }

        if ($options['startView']) {
            $view->vars['attr']['data-start-view'] = $options['startView'];
        }

        $view->vars['attr']['data-toggle']      = 'datepicker';
        $view->vars['attr']['maxlength']        = 10;
        $view->vars['attr']['data-mask-format'] = '00/00/0000';
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'date';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'date_picker';
    }
}
