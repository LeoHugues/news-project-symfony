<?php
/**
 * Created by PhpStorm.
 * User: Otorie
 * Date: 25/02/2015
 * Time: 00:19
 */

namespace EPSI\UserBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EPSI\UserBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setEmail("jean@gmail.com");
        $user->setUsername("jean");
        $user->setPassword("pass");
        $this->addReference("jean", $user);

        $user1 = new User();

        $user1->setEmail("mathieu@hotmail.fr");
        $user1->setUsername("math");
        $user1->setPassword("pass");
        $this->addReference("math", $user1);

        $user2 = new User();

        $user2->setEmail("morad@epsi.fr");
        $user2->setUsername("morad");
        $user2->setPassword("pass");
        $this->addReference("morad", $user2);

        $manager->persist($user);
        $manager->persist($user1);
        $manager->persist($user2);
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
} 