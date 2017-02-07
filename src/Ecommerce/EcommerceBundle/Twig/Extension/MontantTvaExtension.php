<?php

namespace Ecommerce\EcommerceBundle\Twig\Extension;

class MontantTvaExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('montantTva', array($this, 'calculMontantTva'))
        );
    }

    public function calculMontantTva($prixHT, $tva)
    {
        return round(( ($prixHT / $tva) - $prixHT), 2) ;
    }

    public function getName()
    {
        return 'montantTva_extension';
    }
}
