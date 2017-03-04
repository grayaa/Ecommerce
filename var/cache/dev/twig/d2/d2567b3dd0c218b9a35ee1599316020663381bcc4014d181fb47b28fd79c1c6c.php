<?php

/* EcommerceBundle:Default:panier/modulesUsed/panier.html.twig */
class __TwigTemplate_42cb82cee0ec76d00e0b0ef964c916056e3d515b595519db462a0079506e087c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c67a556d25407c7fbfaf476a1c50864300257c938e7f0f60bde94c61eba3d916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67a556d25407c7fbfaf476a1c50864300257c938e7f0f60bde94c61eba3d916->enter($__internal_c67a556d25407c7fbfaf476a1c50864300257c938e7f0f60bde94c61eba3d916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

        $__internal_0b50409287c28c07323d0ec3907f60a7e0674c71741344c9162fce866d1f52e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b50409287c28c07323d0ec3907f60a7e0674c71741344c9162fce866d1f52e2->enter($__internal_0b50409287c28c07323d0ec3907f60a7e0674c71741344c9162fce866d1f52e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <div class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"icon-shopping-cart\"></i>
            ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nbr_produits"]) ? $context["nbr_produits"] : $this->getContext($context, "nbr_produits")), "html", null, true);
        echo " articles - 54,27 €
            <b class=\"caret\"></b></a>
        </a>
        <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 10
            echo "                <p><small><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</a>  x ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"), "html", null, true);
            echo " <span class=\"pull-right\"> ";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</span></small></p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\" class=\"btn btn-primary\">Mon Panier</a>
        </div>
    </div>
</div>";
        
        $__internal_c67a556d25407c7fbfaf476a1c50864300257c938e7f0f60bde94c61eba3d916->leave($__internal_c67a556d25407c7fbfaf476a1c50864300257c938e7f0f60bde94c61eba3d916_prof);

        
        $__internal_0b50409287c28c07323d0ec3907f60a7e0674c71741344c9162fce866d1f52e2->leave($__internal_0b50409287c28c07323d0ec3907f60a7e0674c71741344c9162fce866d1f52e2_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  42 => 10,  38 => 9,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <div class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"icon-shopping-cart\"></i>
            {{ nbr_produits }} articles - 54,27 €
            <b class=\"caret\"></b></a>
        </a>
        <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
            {% for produit in produits %}
                <p><small><a href=\"{{ path('produit', {'id': produit.id}) }}\">{{ produit.nom }}</a>  x {{ panier[produit.id] }} <span class=\"pull-right\"> {{ produit.prix * panier[produit.id] }} €</span></small></p>
            {% endfor %}
            <a href=\"{{ path('panier') }}\" class=\"btn btn-primary\">Mon Panier</a>
        </div>
    </div>
</div>", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/modulesUsed/panier.html.twig");
    }
}
