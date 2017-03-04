<?php

/* EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig */
class __TwigTemplate_7a4b61354cd8c28636f223ae436089fdd7a117010fa284f78b6db90c2daed2e2 extends Twig_Template
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
        $__internal_e620b89aee3b93a78eb0c9435a010474b4fb2a6e706b5db15d58d59ad9c413fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e620b89aee3b93a78eb0c9435a010474b4fb2a6e706b5db15d58d59ad9c413fa->enter($__internal_e620b89aee3b93a78eb0c9435a010474b4fb2a6e706b5db15d58d59ad9c413fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig"));

        $__internal_0bd698a459c3c24c63748c1c11e43c7b51e0651eb7b837244c18def39a89232b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd698a459c3c24c63748c1c11e43c7b51e0651eb7b837244c18def39a89232b->enter($__internal_0bd698a459c3c24c63748c1c11e43c7b51e0651eb7b837244c18def39a89232b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercheProduit");
        echo "\" method=\"post\" name=\"form1\" class=\"navbar-form form-search pull-right\">
    <input id=\"Search\" name=\"search\" type=\"text\" class=\"input-medium search-query\">
    <button type=\"submit\" class=\"btn\">Rechercher</button>
</form>";
        
        $__internal_e620b89aee3b93a78eb0c9435a010474b4fb2a6e706b5db15d58d59ad9c413fa->leave($__internal_e620b89aee3b93a78eb0c9435a010474b4fb2a6e706b5db15d58d59ad9c413fa_prof);

        
        $__internal_0bd698a459c3c24c63748c1c11e43c7b51e0651eb7b837244c18def39a89232b->leave($__internal_0bd698a459c3c24c63748c1c11e43c7b51e0651eb7b837244c18def39a89232b_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('rechercheProduit') }}\" method=\"post\" name=\"form1\" class=\"navbar-form form-search pull-right\">
    <input id=\"Search\" name=\"search\" type=\"text\" class=\"input-medium search-query\">
    <button type=\"submit\" class=\"btn\">Rechercher</button>
</form>", "EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/recherche/modulesUsed/recherche.html.twig");
    }
}
