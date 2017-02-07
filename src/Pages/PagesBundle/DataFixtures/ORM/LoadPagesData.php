<?php

namespace Ecommerce\EcomerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Pages\PagesBundle\Entity\Pages;

class LoadPagesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $page1 = new Pages();
        $page1->setTitre('titre de la premiere page');
        $page1->setContenu('<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent placerat varius commodo. Suspendisse placerat, nunc eu hendrerit rhoncus,
            dui mauris blandit justo, eget convallis nisl elit ac purus. Maecenas tempus,
            enim vitae elementum fringilla, massa ligula fermentum ex, ut consequat massa
            nulla sit amet justo. Ut auctor et lectus ut rhoncus. Mauris sapien est, varius at rhoncus et,
            bibendum eget nisi. Morbi volutpat nibh et mi sagittis, id porttitor ipsum ultricies.
            Nullam ultrices congue arcu sit amet pellentesque. Cras lacinia nunc sit amet vehicula scelerisque.
            Duis a ante in orci lacinia bibendum vitae id nibh. Integer varius nec magna vitae vulputate.
            Nulla facilisis eros id volutpat vulputate.</p>
            <p>Donec cursus eget augue vel condimentum. Nulla tristique felis non justo hendrerit sodales.
            Maecenas cursus odio sit amet finibus suscipit. Sed rhoncus bibendum nibh, non aliquet purus.
            Pellentesque est purus, tempus sed ligula nec, feugiat tempus libero.
            Phasellus ultrices nibh gravida dolor auctor viverra. Integer eget luctus tortor.
            Phasellus pharetra accumsan mauris, eget condimentum diam lacinia in.
            Cras elementum sit amet magna facilisis pretium. Sed eget ultrices dolor.</p>'
        );

        $manager->persist($page1);

        $page2 = new Pages();
        $page2->setTitre('titre de la deuxième page');
        $page2->setContenu('<p>Praesent placerat varius commodo. Suspendisse placerat, nunc eu hendrerit rhoncus,
            dui mauris blandit justo, eget convallis nisl elit ac purus. Maecenas tempus,
            enim vitae elementum fringilla, massa ligula fermentum ex, ut consequat massa
            nulla sit amet justo. Ut auctor et lectus ut rhoncus. Mauris sapien est, varius at rhoncus et,
            bibendum eget nisi. Morbi volutpat nibh et mi sagittis, id porttitor ipsum ultricies.
            Nullam ultrices congue arcu sit amet pellentesque. Cras lacinia nunc sit amet vehicula scelerisque.
            Duis a ante in orci lacinia bibendum vitae id nibh. Integer varius nec magna vitae vulputate.
            Nulla facilisis eros id volutpat vulputate.</p>
            <p>Donec cursus eget augue vel condimentum. Nulla tristique felis non justo hendrerit sodales.
            Maecenas cursus odio sit amet finibus suscipit. Sed rhoncus bibendum nibh, non aliquet purus.
            Pellentesque est purus, tempus sed ligula nec, feugiat tempus libero.
            Phasellus ultrices nibh gravida dolor auctor viverra. Integer eget luctus tortor.
            Phasellus pharetra accumsan mauris, eget condimentum diam lacinia in.
            Cras elementum sit amet magna facilisis pretium. Sed eget ultrices dolor.</p>'
        );

        $manager->persist($page2);

        $manager->flush();

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}