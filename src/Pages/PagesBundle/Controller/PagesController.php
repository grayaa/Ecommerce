<?php

namespace Pages\PagesBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PagesController extends Controller
{
    public function menuAction(){
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PagesBundle:Pages')->findAll();

        return $this->render('PagesBundle:Default/pages/modulesUsed:menu.html.twig', array('pages' => $pages));
    }

    public function pageAction( $id )
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('PagesBundle:Pages')->find($id);

        if(!$page){
            throw new NotFoundHttpException("La page est Introuvable !");
        }

        return $this->render('PagesBundle:Default/pages/layout:page.html.twig', array('page' => $page));
    }


}
