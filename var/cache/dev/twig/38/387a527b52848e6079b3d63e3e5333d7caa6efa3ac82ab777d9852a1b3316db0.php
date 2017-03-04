<?php

/* ::modulesUsed/panier.html.twig */
class __TwigTemplate_096f092d80a5b258dd4ee9770cd969c0383fbf812e2a410d67479c96a952dbdd extends Twig_Template
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
        $__internal_be85c11db68e7ff98d1577d37f04f466a8f587f57c5ee666ff8122bd5c368202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be85c11db68e7ff98d1577d37f04f466a8f587f57c5ee666ff8122bd5c368202->enter($__internal_be85c11db68e7ff98d1577d37f04f466a8f587f57c5ee666ff8122bd5c368202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/panier.html.twig"));

        $__internal_0d80c035946ceffd499087b5dc2d994f1f2031afec291516093ed1bc6fc86b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d80c035946ceffd499087b5dc2d994f1f2031afec291516093ed1bc6fc86b4e->enter($__internal_0d80c035946ceffd499087b5dc2d994f1f2031afec291516093ed1bc6fc86b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/panier.html.twig"));

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
        
        $__internal_be85c11db68e7ff98d1577d37f04f466a8f587f57c5ee666ff8122bd5c368202->leave($__internal_be85c11db68e7ff98d1577d37f04f466a8f587f57c5ee666ff8122bd5c368202_prof);

        
        $__internal_0d80c035946ceffd499087b5dc2d994f1f2031afec291516093ed1bc6fc86b4e->leave($__internal_0d80c035946ceffd499087b5dc2d994f1f2031afec291516093ed1bc6fc86b4e_prof);

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
