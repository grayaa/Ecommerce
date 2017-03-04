<?php

/* EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig */
class __TwigTemplate_08c721ffbae3330532a4303b63e3627fcd4b13279a90b45ce6cfe82773304aa0 extends Twig_Template
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
        $__internal_b406e0cca06a73d4c9581d88a236075ce54f0077541f31a72829a59e6d1fe23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b406e0cca06a73d4c9581d88a236075ce54f0077541f31a72829a59e6d1fe23a->enter($__internal_b406e0cca06a73d4c9581d88a236075ce54f0077541f31a72829a59e6d1fe23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig"));

        $__internal_7308244549765294808167ecce72bf712b2d42ac71d582aa37afc2375ead981c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7308244549765294808167ecce72bf712b2d42ac71d582aa37afc2375ead981c->enter($__internal_7308244549765294808167ecce72bf712b2d42ac71d582aa37afc2375ead981c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercheProduit");
        echo "\" method=\"post\" name=\"form1\" class=\"navbar-form form-search pull-right\">
    <input id=\"Search\" name=\"search\" type=\"text\" class=\"input-medium search-query\">
    <button type=\"submit\" class=\"btn\">Rechercher</button>
</form>";
        
        $__internal_b406e0cca06a73d4c9581d88a236075ce54f0077541f31a72829a59e6d1fe23a->leave($__internal_b406e0cca06a73d4c9581d88a236075ce54f0077541f31a72829a59e6d1fe23a_prof);

        
        $__internal_7308244549765294808167ecce72bf712b2d42ac71d582aa37afc2375ead981c->leave($__internal_7308244549765294808167ecce72bf712b2d42ac71d582aa37afc2375ead981c_prof);

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
