<?php

namespace Ecommerce\EcomerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Ecommerce\EcommerceBundle\Entity\Media;

class LoadMediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://camerdish.e-monsite.com/medias/images/tomate-1.jpg');
        $media1->setAlt('Tomates');

        $manager->persist($media1);

        $media2 = new Media();
        $media2->setPath('http://media.gerbeaud.net/2011/01/haricots-blancs.jpg');
        $media2->setAlt('Haricots Blancs');

        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('https://www.francestickers.com/2013-thickbox/legumes-1.jpg');
        $media3->setAlt('Fruits');

        $manager->persist($media3);

        $media4 = new Media();
        $media4->setPath('https://www.tenstickers.at/aufkleber/img/preview/wandtattoo-kuche-gemuse-5530.png');
        $media4->setAlt('Légumes 2');

        $manager->persist($media4);

        $media5 = new Media();
        $media5->setPath('http://francolab.ca/media/4/f2/06/dd/c5/a6/4a/4f206ddc5a64a/480X294.jpg');
        $media5->setAlt('Légumes 3');

        $manager->persist($media5);

        $media6 = new Media();
        $media6->setPath('http://www.ufunk.net/wp-content/uploads/2012/08/edible-eyes-stickers-4.jpg');
        $media6->setAlt('Légumes fraiches');

        $manager->persist($media6);

        $media7 = new Media();
        $media7->setPath('http://stickeramoi.com/7052-7771-large/sticker-mural-tomates-grappe.jpg');
        $media7->setAlt('Tomates fraiches');

        $manager->persist($media7);

        $manager->flush();

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}