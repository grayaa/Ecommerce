<?php

/* PagesBundle:Default/pages/modulesUsed:menu.html.twig */
class __TwigTemplate_ac099db7b242c058fa99c873a2909c96597e510f4e7ad4ec3ea676161bdd910f extends Twig_Template
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
        $__internal_0e784b9bf9d076473aaf7654e24fc60e5c9fde578b9815ef5705c24ef049a92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e784b9bf9d076473aaf7654e24fc60e5c9fde578b9815ef5705c24ef049a92d->enter($__internal_0e784b9bf9d076473aaf7654e24fc60e5c9fde578b9815ef5705c24ef049a92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/modulesUsed:menu.html.twig"));

        $__internal_903f92685a905c5af3ddc7377eff925ad0d47736544a8587691ad9d4e5f993aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903f92685a905c5af3ddc7377eff925ad0d47736544a8587691ad9d4e5f993aa->enter($__internal_903f92685a905c5af3ddc7377eff925ad0d47736544a8587691ad9d4e5f993aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/modulesUsed:menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0e784b9bf9d076473aaf7654e24fc60e5c9fde578b9815ef5705c24ef049a92d->leave($__internal_0e784b9bf9d076473aaf7654e24fc60e5c9fde578b9815ef5705c24ef049a92d_prof);

        
        $__internal_903f92685a905c5af3ddc7377eff925ad0d47736544a8587691ad9d4e5f993aa->leave($__internal_903f92685a905c5af3ddc7377eff925ad0d47736544a8587691ad9d4e5f993aa_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/pages/modulesUsed:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for page in pages %}
    <li><a href=\"{{ path('page',{ 'id' : page.id }) }}\">{{ page.titre }}</a></li>
{% endfor %}", "PagesBundle:Default/pages/modulesUsed:menu.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Pages\\PagesBundle/Resources/views/Default/pages/modulesUsed/menu.html.twig");
    }
}
