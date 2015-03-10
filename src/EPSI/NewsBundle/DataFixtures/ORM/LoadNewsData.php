<?php
/**
 * Created by PhpStorm.
 * User: Otorie
 * Date: 24/02/2015
 * Time: 22:38
 */

namespace EPSI\NewsBundle\DataFixtures\ORM;

use Carbon\Carbon;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EPSI\NewsBundle\Entity\news;

class LoadNewsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $date = Carbon::now();

        for ($i = 0; $i < 30; $i++) {

            $content ="mon content news test"; /*simplexml_load_file('http://www.lipsum.com/feed/xml?amount=1&what=paras&start=0')->lipsum;*/
            $date->addDay();
            $tags = new ArrayCollection();

            $news = new News();

            for ($j = 0; $j < 3; $j++)
            {
                $tags->add($this->getReference("tag" . rand(0,59)));
            }

            if ($i < 10) {
                $news->setTitle("MathNews " . ($i+1));
                $news->setUser($this->getReference("math"));

            } elseif ($i > 9 && $i < 20) {
                $news->setTitle("JeanNews " . ($i+1));
                $news->setUser($this->getReference("jean"));
            } else {
                $news->setTitle("MoradNews " . ($i+1));
                $news->setUser($this->getReference("morad"));
            }

            $news->setCategorie($this->getReference("cat" . rand(0,9)));
            $news->setContent($content);
            $news->setDate($date);
            $news->setTags($tags);

            $manager->persist($news);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
} 