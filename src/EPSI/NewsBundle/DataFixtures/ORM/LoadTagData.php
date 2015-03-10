<?php
/**
 * Created by PhpStorm.
 * User: Otorie
 * Date: 25/02/2015
 * Time: 00:18
 */

namespace EPSI\NewsBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EPSI\NewsBundle\Entity\tag;

class LoadTagData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 60; $i++)
        {
            $tag = new tag();

            $tag->setIntitule("tag".$i);
            $this->addReference("tag".$i, $tag);

            $manager->persist($tag);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
} 