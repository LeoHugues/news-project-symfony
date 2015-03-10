<?php

namespace EPSI\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Class categorieType
 * @package EPSI\NewsBundle\Form
 *
 * @ORM\HasLifecycleCallbacks
 */
class categorieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorieName')
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'epsi_newsbundle_categorie';
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EPSI\NewsBundle\Entity\categorie',
            'cascade_validation' => true
        ));
    }

    /**
     * @Assert\Callback()
     *
     * Check TestimonyForm
     */
    public function validate(ExecutionContextInterface $context)
    {
        // Validation code
    }
}
