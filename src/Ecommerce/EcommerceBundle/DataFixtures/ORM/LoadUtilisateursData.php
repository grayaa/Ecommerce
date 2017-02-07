<?php

namespace Ecommerce\EcomerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class LoadUtilisateursData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $utilisateur1 = new Utilisateurs();
        $utilisateur1->setUsername('hammed');
        $utilisateur1->setEmail('hammed.grayaa@hotmail.be');
        $utilisateur1->setEnabled('1');
        /* Défénir un password '123456' en utilisant l'encoder du container */
            $utilisateur1->setSalt(md5(uniqid()));
            $encoder = $this->container->get('security.password_encoder');
            $password = $encoder->encodePassword($utilisateur1, '123456');
            $utilisateur1->setPassword($password);

        $manager->persist($utilisateur1);

        $utilisateur2 = new Utilisateurs();
        $utilisateur2->setUsername('farid');
        $utilisateur2->setEmail('farid@test.fr');
        $utilisateur2->setEnabled('1');
        $utilisateur2->setSalt(md5(uniqid()));
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($utilisateur2, '20041422');
        $utilisateur2->setPassword($password);

        $manager->persist($utilisateur2);


        $manager->flush();

        $this->addReference('utilisateur1',$utilisateur1);
        $this->addReference('utilisateur2',$utilisateur2);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 5;
    }
}