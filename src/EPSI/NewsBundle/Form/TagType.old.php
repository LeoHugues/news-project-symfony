<?php
/**
 * Created by PhpStorm.
 * User: Otorie
 * Date: 26/02/2015
 * Time: 00:46
 */

namespace EPSI\NewsBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $option)
    {
        $builder->add('intitule', 'text');
    }

    public function getName()
    {
        return "tag";
    }
} 