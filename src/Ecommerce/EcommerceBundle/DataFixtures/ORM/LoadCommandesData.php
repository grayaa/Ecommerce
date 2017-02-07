<?php

namespace Ecommerce\EcomerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Ecommerce\EcommerceBundle\Entity\Commandes;

class LoadCommandesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commande1 = new Commandes();
        $commande1->setDate(new \DateTime());
        $commande1->setUtilisateur($this->getReference('utilisateur1'));
        $commande1->setValider('1');
        $commande1->setReference('1');
        // Défénir le panier: ('id_produit' => 'qté') ..
        $commande1->setProduits(array(
            '0' => array('1'=>'2'),
            '1' => array('2'=>'1'),
            '2' => array('3'=>'5')
        ));


        $manager->persist($commande1);

        $commande2 = new Commandes();
        $commande2->setDate(new \DateTime());
        $commande2->setUtilisateur($this->getReference('utilisateur2'));
        $commande2->setValider('1');
        $commande2->setReference('1');
        // Défénir le panier: ('id_produit' => 'qté') ..
        $commande2->setProduits(array(
            '0' => array('1'=>'2'),
            '1' => array('2'=>'1'),
            '2' => array('3'=>'5')
        ));


        $manager->persist($commande2);



        $manager->flush();


    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 7;
    }
}