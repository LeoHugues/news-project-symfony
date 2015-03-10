<?php
/**
 * Created by PhpStorm.
 * User: Otorie
 * Date: 25/02/2015
 * Time: 19:57
 */

namespace EPSI\NewsBundle\Controller;

use Carbon\Carbon;
use EPSI\NewsBundle\Entity\news;
use EPSI\NewsBundle\Form\NewsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class NewsController
 * @package EPSI\NewsBundle\Controller
 */
class NewsController extends Controller
{
    /**
     * @Route("/", name="epsi_news_home")
     */
    public function indexAction()
    {
        return $this->render(
            'EPSINewsBundle:News:homeNews.html.twig',
            array()
        );
    }

    /**
     * @Route("/get", name="epsi_news_get")
     */
    public function getNewsAction()
    {
        $News = $this->getDoctrine()
            ->getManager()
            ->getRepository('EPSINewsBundle:news')
            ->getAllNews()
        ;

        return $this->render('EPSINewsBundle:TestTwig:getNews.html.twig', array('News' => $News));
    }

    /**
     * @Route("/insert", name="epsi_news_insert")
     */
    public function insertNewsAction(Request $request)
    {
        $user = $this->getUser();

        if(isset($user))
        {
            $news = new news();

            $form = $this->createForm(new NewsType(), $news);

            $form->add('save', 'submit');

            $form->handleRequest($request);

            if ($form->isValid()) {
                // fait quelque chose comme sauvegarder la tâche dans la bdd

                $form->getData();

                // return $this->redirect($this->generateUrl('task_success'));
            }

            return $this->render('EPSINewsBundle:TestTwig:insertNews.html.twig', array('form' => $form->createView()));
        }
        return $this->render('EPSINewsBundle:TestTwig:beRegister.html.twig');
    }

    /**
     * @Route("/update", name="epsi_news_update")
     */
    public function modifyNewsAction()
    {
        $reposNews = $this->getDoctrine()->getManager()->getRepository('EPSINewsBundle:news');
        $News = $reposNews->findAll();

        return $this->render('EPSINewsBundle:TestTwig:modifyNews.html.twig', array('News' => $News));
    }

    /**
     * @Route("/detail/{id}", name="epsi_news_detail")
     *
     * @param Int $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detailNewsAction($id)
    {
        $News = $this->getDoctrine()
            ->getManager()
            ->getRepository('EPSINewsBundle:news')
            ->getNewsById($id)
        ;

        return $this->render('EPSINewsBundle:TestTwig:detailNews.html.twig', array('new' => $News));
    }
}
