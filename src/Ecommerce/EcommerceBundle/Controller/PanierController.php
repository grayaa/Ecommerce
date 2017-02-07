<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends Controller
{
    public function sidebarPanierAction(Request $request){
        $session = $request->getSession();
        $panier = $session->get('panier');

        $nbr_produits = count($panier);

        //Importer tt les informations des produits du panier par leurs 'ids'
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray( array_keys( $panier ) );

        return $this->render('EcommerceBundle:Default:panier/modulesUsed/panier.html.twig', array('nbr_produits' => $nbr_produits,'produits' => $produits, 'panier' => $panier));
    }

    public function supprimerAction($id, Request $request)
    {
        $session = $request->getSession();
        $panier = $session->get('panier');

        if(array_key_exists($id, $panier))
        {
            //Supprimer le produit en question
            unset($panier[$id]);
            $session->set('panier', $panier);
            $this->get('session')->getFlashBag()->add('success', 'Article supprimé avec succé.');
        }
        return $this->redirect( $this->generateUrl('panier') );
    }

    public function ajouterAction($id, Request $request)
    {
        $session = $request->getSession();

        //si le panier est vide, initialiser la variable session du panier
        if( !$session->has('panier') ){
            $session->set('panier', array());
        }

        $panier = $session->get('panier');  //$panier[IdDuProduit] => QUANTITE

        //si l'id du produit existe déja dans le panier, .. mettre à jours la quantité
        if(array_key_exists($id, $panier))
        {
            if( $request->get('qte') != null ) //s'il y a une qte passé dans la request
            {
                $panier[$id] = $request->get('qte');
                $this->get('session')->getFlashBag()->add('success', 'Quantité modifié avec succé.');
            }
        }else{ //si le produit n'existe pas déja dans le panier .. initialiser la qte à 1

            if( $request->get('qte') != null ) //s'il y a une qte passé dans la request
            {
                $panier[$id] = $request->get('qte');
                $this->get('session')->getFlashBag()->add('success', 'Quantité modifié avec succé.');

            }else{
                $panier[$id] = 1;
                $this->get('session')->getFlashBag()->add('success', 'Article ajouté avec succé.');
            }

        }

        //enregistrer le contenu du panier dans la variable 'panier' de session
        $session->set('panier', $panier);


        return $this->redirect( $this->generateUrl('panier') );
    }

    public function panierAction(Request $request)
    {
        $session = $request->getSession();
        if(!$session->has('panier')) $session->set('panier', array());

        //détruire la session:
        //$session->remove('panier');

        //var_dump($session->get('panier'));
        //die();

        //Importer tt les informations des produits du panier par leurs 'ids'
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray( array_keys( $session->get('panier') ) );

        return $this->render('EcommerceBundle:Default:panier/layout/panier.html.twig',
            array(
                'produits' => $produits,
                'panier' => $session->get('panier')
            )
        );
    }

    public function livraisonAction()
    {
        return $this->render('EcommerceBundle:Default:panier/layout/livraison.html.twig');
    }

    public function validationAction()
    {
        return $this->render('EcommerceBundle:Default:panier/layout/validation.html.twig');
    }

}
