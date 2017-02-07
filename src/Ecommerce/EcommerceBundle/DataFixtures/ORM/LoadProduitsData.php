<?php

namespace Ecommerce\EcomerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Ecommerce\EcommerceBundle\Entity\Produits;

class LoadProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat varius commodo.');
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media1'));
        $produit1->setNom('Poivron rouge');
        $produit1->setPrix('1.99');
        $produit1->setTva($this->getReference('tva2'));

        $manager->persist($produit1);


        $produit2 = new Produits();
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat varius commodo.');
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media2'));
        $produit2->setNom('Piment');
        $produit2->setPrix('3.93');
        $produit2->setTva($this->getReference('tva2'));

        $manager->persist($produit2);

        $produit3 = new Produits();
        $produit3->setCategorie($this->getReference('categorie2'));
        $produit3->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat varius commodo.');
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media3'));
        $produit3->setNom('Piment 2');
        $produit3->setPrix('3.93');
        $produit3->setTva($this->getReference('tva2'));

        $manager->persist($produit3);

        $produit4 = new Produits();
        $produit4->setCategorie($this->getReference('categorie2'));
        $produit4->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat varius commodo.');
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media4'));
        $produit4->setNom('Piment 3');
        $produit4->setPrix('3.93');
        $produit4->setTva($this->getReference('tva2'));

        $manager->persist($produit4);

        $produit5 = new Produits();
        $produit5->setCategorie($this->getReference('categorie1'));
        $produit5->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat varius commodo.');
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media5'));
        $produit5->setNom('Légumes fraiches');
        $produit5->setPrix('3.93');
        $produit5->setTva($this->getReference('tva2'));

        $manager->persist($produit5);

        $produit6 = new Produits();
        $produit6->setCategorie($this->getReference('categorie1'));
        $produit6->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat varius commodo.');
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media6'));
        $produit6->setNom('Tomates fraiches');
        $produit6->setPrix('3.93');
        $produit6->setTva($this->getReference('tva2'));

        $manager->persist($produit6);



        $manager->flush();

        $this->addReference('produit1',$produit1);
        $this->addReference('produit2',$produit2);
        $this->addReference('produit3',$produit3);
        $this->addReference('produit4',$produit4);
        $this->addReference('produit5',$produit5);
        $this->addReference('produit6',$produit6);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 4;
    }
}