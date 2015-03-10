<?php
/**
 * Created by PhpStorm.
 * User: Otorie
 * Date: 25/02/2015
 * Time: 00:17
 */

namespace EPSI\NewsBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EPSI\NewsBundle\Entity\categorie;

class LoadCategorieData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++)
        {
            $categorie = new categorie();

            $categorie->setCategorieName("catégorie ".$i);
            $this->addReference("cat".$i, $categorie);

            $manager->persist($categorie);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
} 