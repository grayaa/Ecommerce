<?php

/* ::modulesUsed/panier.html.twig */
class __TwigTemplate_64e9f7540dda527fda91afe59b430ba5d487e2100e5c722751293b1636d056a7 extends Twig_Template
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
        $__internal_404ed51d3b3332b9b5defa3357f081f188424939caab58c81d0af1bcdec36ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404ed51d3b3332b9b5defa3357f081f188424939caab58c81d0af1bcdec36ab1->enter($__internal_404ed51d3b3332b9b5defa3357f081f188424939caab58c81d0af1bcdec36ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/panier.html.twig"));

        $__internal_a2a6f998ff2f5e6388cb454a3d22295fe339a1a84c502a0bb389f163a653590d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a6f998ff2f5e6388cb454a3d22295fe339a1a84c502a0bb389f163a653590d->enter($__internal_a2a6f998ff2f5e6388cb454a3d22295fe339a1a84c502a0bb389f163a653590d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/panier.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <div class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"icon-shopping-cart\"></i>
            3 item - 54,27 €
            <b class=\"caret\"></b></a>
        </a>
        <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
            <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
            <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
            <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\" class=\"btn btn-primary\">Mon Panier</a>
        </div>
    </div>
</div>";
        
        $__internal_404ed51d3b3332b9b5defa3357f081f188424939caab58c81d0af1bcdec36ab1->leave($__internal_404ed51d3b3332b9b5defa3357f081f188424939caab58c81d0af1bcdec36ab1_prof);

        
        $__internal_a2a6f998ff2f5e6388cb454a3d22295fe339a1a84c502a0bb389f163a653590d->leave($__internal_a2a6f998ff2f5e6388cb454a3d22295fe339a1a84c502a0bb389f163a653590d_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  25 => 1,);
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
            3 item - 54,27 €
            <b class=\"caret\"></b></a>
        </a>
        <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
            <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
            <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
            <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
            <a href=\"{{ path('panier') }}\" class=\"btn btn-primary\">Mon Panier</a>
        </div>
    </div>
</div>", "::modulesUsed/panier.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources\\views/modulesUsed/panier.html.twig");
    }
}
