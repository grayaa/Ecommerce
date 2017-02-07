<?php

namespace Ecommerce\EcomerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Ecommerce\EcommerceBundle\Entity\Categories;

class LoadCategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categories();
        $categorie1->setNom('Légumes');
        $categorie1->setImage($this->getReference('media1'));

        $manager->persist($categorie1);

        $categorie2 = new Categories();
        $categorie2->setNom('Fruits');
        $categorie2->setImage($this->getReference('media3'));

        $manager->persist($categorie2);

        $manager->flush();

        $this->addReference('categorie1',$categorie1);
        $this->addReference('categorie2',$categorie2);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}