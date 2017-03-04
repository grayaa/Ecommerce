<?php

/* EcommerceBundle:Default/categories/modulesUsed:menu.html.twig */
class __TwigTemplate_b1382b529ad3e2bda31ad6da473a57db5e4e6c6db03852f9b410605abac066d8 extends Twig_Template
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
        $__internal_98c0949fe8a740aae0868dd5b90a6cecab580e20d55613260b57c7f28d37ad97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c0949fe8a740aae0868dd5b90a6cecab580e20d55613260b57c7f28d37ad97->enter($__internal_98c0949fe8a740aae0868dd5b90a6cecab580e20d55613260b57c7f28d37ad97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/categories/modulesUsed:menu.html.twig"));

        $__internal_1205a8c715b7d06810349f6512a70f905f5ea9047672c3d203b97216233f9674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1205a8c715b7d06810349f6512a70f905f5ea9047672c3d203b97216233f9674->enter($__internal_1205a8c715b7d06810349f6512a70f905f5ea9047672c3d203b97216233f9674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/categories/modulesUsed:menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "    <li>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduit", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_98c0949fe8a740aae0868dd5b90a6cecab580e20d55613260b57c7f28d37ad97->leave($__internal_98c0949fe8a740aae0868dd5b90a6cecab580e20d55613260b57c7f28d37ad97_prof);

        
        $__internal_1205a8c715b7d06810349f6512a70f905f5ea9047672c3d203b97216233f9674->leave($__internal_1205a8c715b7d06810349f6512a70f905f5ea9047672c3d203b97216233f9674_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/categories/modulesUsed:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for categorie in categories %}
    <li>
        <a href=\"{{ path('categorieProduit', {'id' : categorie.id}) }}\">{{ categorie.nom }}</a>
    </li>
{% endfor %}", "EcommerceBundle:Default/categories/modulesUsed:menu.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/categories/modulesUsed/menu.html.twig");
    }
}
