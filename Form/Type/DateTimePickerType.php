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
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Date time picker form type
 */
class DateTimePickerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'date_widget' => 'single_text',
            'date_format' => 'dd/MM/y',
            'endDate'     => false,
            'startView'   => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $dateView = $view->children['date'];

        if ($options['endDate']) {
            $dateView->vars['attr']['data-end-date'] = $options['endDate'];
        }

        if ($options['startView']) {
            $dateView->vars['attr']['data-start-view'] = $options['startView'];
        }

        $dateView->vars['attr']['data-toggle']      = 'datepicker';
        $dateView->vars['attr']['maxlength']        = 10;
        $dateView->vars['attr']['data-mask-format'] = '00/00/0000';
        $dateView->vars['block_prefixes'][] = 'date_picker';
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'datetime';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'datetime_picker';
    }
}
