<?php
/**
 * Created by PhpStorm.
 * User: Otorie
 * Date: 26/02/2015
 * Time: 00:18
 */

namespace EPSI\NewsBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class NewsType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', array(
            'required' => true,
            'attr' => array(

            ),
            'label' => 'Titre de la news'
        ));
        $builder->add('content', 'textarea');
        $builder->add('date', 'date');
        //cascade validation true   php app/console generate:doctrine:form EPSINewsBundle:tag
        /*$builder->add('categorie', new categorieType());*/
        $builder->add('categorie', 'entity', array(
                'property' => 'categorieName',
                'class' => 'EPSINewsBundle:categorie',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('categorie')
                        ->groupBy('categorie.id')
                        ->orderBy('categorie.categorieName', 'ASC');
                })
        );
      /*   $builder->add('tags', new tagType());*/
    }

    public function getName()
    {
        return 'news';
    }
} 