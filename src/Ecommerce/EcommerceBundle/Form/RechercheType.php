<?php

namespace Ecommerce\EcommerceBundle\Form\RechercheType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recherche','text')
        ;
    }

    public function getName()
    {
        return 'ecommerce_ecommercebundle_recherche';
    }
}