<?php

/* EcommerceBundle:Default:produits/layout/liste_produits.html.twig */
class __TwigTemplate_251a7ff09c07cc46e7456fb38db67a89e516dc3b36d5bf17f8d37deb33af1bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produits/layout/liste_produits.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/liste_produits.html.twig", 6)->display($context);
        // line 7
        echo "
            <div class=\"span9\">

                <ul class=\"thumbnails\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 12
            echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" width=\"300\" height=\"300\">
                                <div class=\"caption\">
                                    <h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</h4>
                                    <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</p>
                                    <a class=\"btn btn-primary\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                    <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
                                </div>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/liste_produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  66 => 18,  62 => 17,  58 => 16,  51 => 14,  47 => 12,  43 => 11,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceBundle:Default:produits/layout/liste_produits.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/liste_produits.html.twig");
    }
}
