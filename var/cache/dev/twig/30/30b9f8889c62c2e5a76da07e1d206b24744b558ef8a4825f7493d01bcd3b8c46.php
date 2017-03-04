<?php

/* EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig */
class __TwigTemplate_f92ed008971da83580c621409167e6b6c0f0556e7caa1d577c5d625368652605 extends Twig_Template
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
        $__internal_b9b4e120e26ae42c1978fde93f57b1cc5975c17ef1b07c398d12080341f2699f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b4e120e26ae42c1978fde93f57b1cc5975c17ef1b07c398d12080341f2699f->enter($__internal_b9b4e120e26ae42c1978fde93f57b1cc5975c17ef1b07c398d12080341f2699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig"));

        $__internal_0a3a163eb386c2f59ec6eefe7c8e0612e7db994bdb1fe9f8605c7becacfc24b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3a163eb386c2f59ec6eefe7c8e0612e7db994bdb1fe9f8605c7becacfc24b1->enter($__internal_0a3a163eb386c2f59ec6eefe7c8e0612e7db994bdb1fe9f8605c7becacfc24b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercheProduit");
        echo "\" method=\"post\" name=\"form1\" class=\"navbar-form form-search pull-right\">
    <input id=\"Search\" name=\"search\" type=\"text\" class=\"input-medium search-query\">
    <button type=\"submit\" class=\"btn\">Rechercher</button>
</form>";
        
        $__internal_b9b4e120e26ae42c1978fde93f57b1cc5975c17ef1b07c398d12080341f2699f->leave($__internal_b9b4e120e26ae42c1978fde93f57b1cc5975c17ef1b07c398d12080341f2699f_prof);

        
        $__internal_0a3a163eb386c2f59ec6eefe7c8e0612e7db994bdb1fe9f8605c7becacfc24b1->leave($__internal_0a3a163eb386c2f59ec6eefe7c8e0612e7db994bdb1fe9f8605c7becacfc24b1_prof);

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
