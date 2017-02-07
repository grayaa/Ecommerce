<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\RechercheType\RechercheType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProduitsController extends Controller
{
    public function produitAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);

        return $this->render('EcommerceBundle:Default:produits/layout/produit.html.twig', array('produit' => $produit));
    }


    public function listeProduitsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll(array('diponible' => 1));

        return $this->render('EcommerceBundle:Default:produits/layout/liste_produits.html.twig', array('produits' => $produits));
    }

    public function categorieAction( $id )
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findByCategory($id);


        $categorie = $em->getRepository('EcommerceBundle:Categories')->find($id);
        if(!$categorie){
            throw $this->createNotFoundException('La Page n\'existe pas !');
        }

        return $this->render('EcommerceBundle:Default:produits/layout/liste_produits.html.twig', array('produits' => $produits));
    }

    public function rechercheFormAction()
    {
        return $this->render('EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig');
    }

    public function rechercheTraitementAction(Request $request)
    {
        $chaine = "";
        if($request->getMethod() == 'POST')
        {
            $data = $request->request->all();
            $chaine = $data['search'];
            //die($chaine);
        }else{
            throw $this->createNotFoundException('La page n\'existe pas !');
        }
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($chaine);

        return $this->render('EcommerceBundle:Default:produits/layout/liste_produits.html.twig', array('produits' => $produits));
    }
}
