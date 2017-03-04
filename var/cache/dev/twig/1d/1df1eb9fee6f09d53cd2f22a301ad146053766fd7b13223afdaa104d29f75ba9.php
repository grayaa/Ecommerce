<?php

/* PagesBundle:Default/pages/modulesUsed:menu.html.twig */
class __TwigTemplate_eb54720c46824dbc3a725c69ccbe84e7dcdd17f1dc3104626c00e1a9c4ce41a1 extends Twig_Template
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
        $__internal_ea4a2c2d2cc2605cb1a46b14669610b3877b74fb5169cd275d81cbf07b6a52dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4a2c2d2cc2605cb1a46b14669610b3877b74fb5169cd275d81cbf07b6a52dd->enter($__internal_ea4a2c2d2cc2605cb1a46b14669610b3877b74fb5169cd275d81cbf07b6a52dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/modulesUsed:menu.html.twig"));

        $__internal_0d3a0f0d0bbb202cb8f01093178ca21e21409442ca5c6a4190f8da6f6a1c7551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3a0f0d0bbb202cb8f01093178ca21e21409442ca5c6a4190f8da6f6a1c7551->enter($__internal_0d3a0f0d0bbb202cb8f01093178ca21e21409442ca5c6a4190f8da6f6a1c7551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/modulesUsed:menu.html.twig"));

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
        
        $__internal_ea4a2c2d2cc2605cb1a46b14669610b3877b74fb5169cd275d81cbf07b6a52dd->leave($__internal_ea4a2c2d2cc2605cb1a46b14669610b3877b74fb5169cd275d81cbf07b6a52dd_prof);

        
        $__internal_0d3a0f0d0bbb202cb8f01093178ca21e21409442ca5c6a4190f8da6f6a1c7551->leave($__internal_0d3a0f0d0bbb202cb8f01093178ca21e21409442ca5c6a4190f8da6f6a1c7551_prof);

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
