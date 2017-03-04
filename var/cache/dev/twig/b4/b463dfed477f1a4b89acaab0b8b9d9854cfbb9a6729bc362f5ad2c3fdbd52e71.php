<?php

/* PagesBundle:Default/pages/modulesUsed:menu.html.twig */
class __TwigTemplate_7d29f44c9e4f34ab281e2ae3b7945fec3f3328fe7822edd8cc8a0caec1821dce extends Twig_Template
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
        $__internal_ec3eb473f81dbe28a6dfcbbd402ffbe3706713ce25182ee502c84d03030f3472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3eb473f81dbe28a6dfcbbd402ffbe3706713ce25182ee502c84d03030f3472->enter($__internal_ec3eb473f81dbe28a6dfcbbd402ffbe3706713ce25182ee502c84d03030f3472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/modulesUsed:menu.html.twig"));

        $__internal_46e4a78849fd0f2b7ad4d220e4232f3cf50d986c5fa8b09e15806a78fe79b7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e4a78849fd0f2b7ad4d220e4232f3cf50d986c5fa8b09e15806a78fe79b7df->enter($__internal_46e4a78849fd0f2b7ad4d220e4232f3cf50d986c5fa8b09e15806a78fe79b7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/modulesUsed:menu.html.twig"));

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
        
        $__internal_ec3eb473f81dbe28a6dfcbbd402ffbe3706713ce25182ee502c84d03030f3472->leave($__internal_ec3eb473f81dbe28a6dfcbbd402ffbe3706713ce25182ee502c84d03030f3472_prof);

        
        $__internal_46e4a78849fd0f2b7ad4d220e4232f3cf50d986c5fa8b09e15806a78fe79b7df->leave($__internal_46e4a78849fd0f2b7ad4d220e4232f3cf50d986c5fa8b09e15806a78fe79b7df_prof);

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
