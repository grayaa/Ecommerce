<?php

namespace Ecommerce\EcomerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class LoadUtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $UtilisateurAdresse1 = new UtilisateursAdresses();
        $UtilisateurAdresse1->setUtilisateur($this->getReference('utilisateur1'));
        $UtilisateurAdresse1->setNom('Grayaa');
        $UtilisateurAdresse1->setPrenom('Hammed');
        $UtilisateurAdresse1->setTelephone('230461468');
        $UtilisateurAdresse1->setCp('5121');
        $UtilisateurAdresse1->setPays('Tunisie');
        $UtilisateurAdresse1->setVille('Mahdia');
        $UtilisateurAdresse1->setComplement('Rejiche');
        $UtilisateurAdresse1->setAdresse('1 rue essalema');

        $manager->persist($UtilisateurAdresse1);

        $UtilisateurAdresse2 = new UtilisateursAdresses();
        $UtilisateurAdresse2->setUtilisateur($this->getReference('utilisateur2'));
        $UtilisateurAdresse2->setNom('Msaddack');
        $UtilisateurAdresse2->setPrenom('Farid');
        $UtilisateurAdresse2->setTelephone('20041422');
        $UtilisateurAdresse2->setCp('5121');
        $UtilisateurAdresse2->setPays('Tunisie');
        $UtilisateurAdresse2->setVille('Mahdia');
        $UtilisateurAdresse2->setComplement('Rejiche');
        $UtilisateurAdresse2->setAdresse('1 rue essalema');

        $manager->persist($UtilisateurAdresse2);


        $manager->flush();

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 6;
    }
}