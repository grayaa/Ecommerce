<?php

/* ::modulesUsed/panier.html.twig */
class __TwigTemplate_44bbe9358b3495800059acec173ceb309795d8aed3279c2478fdd5c8ed76486c extends Twig_Template
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
        $__internal_aaa8103bfab6b10a8adf802dd3d36b4596cc93586336e0b7c8574c35fd2ed010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa8103bfab6b10a8adf802dd3d36b4596cc93586336e0b7c8574c35fd2ed010->enter($__internal_aaa8103bfab6b10a8adf802dd3d36b4596cc93586336e0b7c8574c35fd2ed010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/panier.html.twig"));

        $__internal_1b172c843e468a75f371f8156193ef0ac5f2b8506c18726a7ca9dee07b095154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b172c843e468a75f371f8156193ef0ac5f2b8506c18726a7ca9dee07b095154->enter($__internal_1b172c843e468a75f371f8156193ef0ac5f2b8506c18726a7ca9dee07b095154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/panier.html.twig"));

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
        
        $__internal_aaa8103bfab6b10a8adf802dd3d36b4596cc93586336e0b7c8574c35fd2ed010->leave($__internal_aaa8103bfab6b10a8adf802dd3d36b4596cc93586336e0b7c8574c35fd2ed010_prof);

        
        $__internal_1b172c843e468a75f371f8156193ef0ac5f2b8506c18726a7ca9dee07b095154->leave($__internal_1b172c843e468a75f371f8156193ef0ac5f2b8506c18726a7ca9dee07b095154_prof);

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
