<?php

/* EcommerceBundle:Default/categories/modulesUsed:menu.html.twig */
class __TwigTemplate_fd1f0938a0c98c380f5868c97fbb53b17376ee4e83481083a4aa48b75350ff7a extends Twig_Template
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
        $__internal_b578f44a1743c183960ca6a57a76ecae2c949a120bb97f3ca9f35530fef205cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b578f44a1743c183960ca6a57a76ecae2c949a120bb97f3ca9f35530fef205cb->enter($__internal_b578f44a1743c183960ca6a57a76ecae2c949a120bb97f3ca9f35530fef205cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/categories/modulesUsed:menu.html.twig"));

        $__internal_18468f8cc8e0357048f0d10ebaca573159bee591efce6a15d50825274b68e4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18468f8cc8e0357048f0d10ebaca573159bee591efce6a15d50825274b68e4cb->enter($__internal_18468f8cc8e0357048f0d10ebaca573159bee591efce6a15d50825274b68e4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/categories/modulesUsed:menu.html.twig"));

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
        
        $__internal_b578f44a1743c183960ca6a57a76ecae2c949a120bb97f3ca9f35530fef205cb->leave($__internal_b578f44a1743c183960ca6a57a76ecae2c949a120bb97f3ca9f35530fef205cb_prof);

        
        $__internal_18468f8cc8e0357048f0d10ebaca573159bee591efce6a15d50825274b68e4cb->leave($__internal_18468f8cc8e0357048f0d10ebaca573159bee591efce6a15d50825274b68e4cb_prof);

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
