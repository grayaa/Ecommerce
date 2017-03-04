<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a1c56ed7ddeb0e8c4857e1efb3b47a552e302df1735552daa83f13c124192122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0185b3c71f32cc2d8d32e9d5e6b3811c29510bd497ac287ecf797d3ef0cc55b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0185b3c71f32cc2d8d32e9d5e6b3811c29510bd497ac287ecf797d3ef0cc55b3->enter($__internal_0185b3c71f32cc2d8d32e9d5e6b3811c29510bd497ac287ecf797d3ef0cc55b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b700cd538757c16db0d24c3bd641927fb00e55a8e041f407724551010926ed8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b700cd538757c16db0d24c3bd641927fb00e55a8e041f407724551010926ed8c->enter($__internal_b700cd538757c16db0d24c3bd641927fb00e55a8e041f407724551010926ed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0185b3c71f32cc2d8d32e9d5e6b3811c29510bd497ac287ecf797d3ef0cc55b3->leave($__internal_0185b3c71f32cc2d8d32e9d5e6b3811c29510bd497ac287ecf797d3ef0cc55b3_prof);

        
        $__internal_b700cd538757c16db0d24c3bd641927fb00e55a8e041f407724551010926ed8c->leave($__internal_b700cd538757c16db0d24c3bd641927fb00e55a8e041f407724551010926ed8c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd16ff508e6a20f5821024f6ce4454166f963b652287f754e0d4c64b7130b126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd16ff508e6a20f5821024f6ce4454166f963b652287f754e0d4c64b7130b126->enter($__internal_bd16ff508e6a20f5821024f6ce4454166f963b652287f754e0d4c64b7130b126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6c9c7e1b12f7c460668b164ce960df7e22df6c6954a1b4959bc0bff366907810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9c7e1b12f7c460668b164ce960df7e22df6c6954a1b4959bc0bff366907810->enter($__internal_6c9c7e1b12f7c460668b164ce960df7e22df6c6954a1b4959bc0bff366907810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c9c7e1b12f7c460668b164ce960df7e22df6c6954a1b4959bc0bff366907810->leave($__internal_6c9c7e1b12f7c460668b164ce960df7e22df6c6954a1b4959bc0bff366907810_prof);

        
        $__internal_bd16ff508e6a20f5821024f6ce4454166f963b652287f754e0d4c64b7130b126->leave($__internal_bd16ff508e6a20f5821024f6ce4454166f963b652287f754e0d4c64b7130b126_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e21e39495c054601a73deee0e5071c5800c1bbacdc7695262375befcf271d281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21e39495c054601a73deee0e5071c5800c1bbacdc7695262375befcf271d281->enter($__internal_e21e39495c054601a73deee0e5071c5800c1bbacdc7695262375befcf271d281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_02545384317c16b6d208c7486308b89c1f4c276acf9b38a0902e5b9a8e8bc7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02545384317c16b6d208c7486308b89c1f4c276acf9b38a0902e5b9a8e8bc7c1->enter($__internal_02545384317c16b6d208c7486308b89c1f4c276acf9b38a0902e5b9a8e8bc7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02545384317c16b6d208c7486308b89c1f4c276acf9b38a0902e5b9a8e8bc7c1->leave($__internal_02545384317c16b6d208c7486308b89c1f4c276acf9b38a0902e5b9a8e8bc7c1_prof);

        
        $__internal_e21e39495c054601a73deee0e5071c5800c1bbacdc7695262375befcf271d281->leave($__internal_e21e39495c054601a73deee0e5071c5800c1bbacdc7695262375befcf271d281_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce048ec65ca9f1b92ce0d56ec9e8278775ff557bca0e9fc2538373e5e34b4a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce048ec65ca9f1b92ce0d56ec9e8278775ff557bca0e9fc2538373e5e34b4a7c->enter($__internal_ce048ec65ca9f1b92ce0d56ec9e8278775ff557bca0e9fc2538373e5e34b4a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9a2dc7f0edac701ff1b30eb195e347a953ce86f019d3f5ae96fceea126103edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2dc7f0edac701ff1b30eb195e347a953ce86f019d3f5ae96fceea126103edd->enter($__internal_9a2dc7f0edac701ff1b30eb195e347a953ce86f019d3f5ae96fceea126103edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a2dc7f0edac701ff1b30eb195e347a953ce86f019d3f5ae96fceea126103edd->leave($__internal_9a2dc7f0edac701ff1b30eb195e347a953ce86f019d3f5ae96fceea126103edd_prof);

        
        $__internal_ce048ec65ca9f1b92ce0d56ec9e8278775ff557bca0e9fc2538373e5e34b4a7c->leave($__internal_ce048ec65ca9f1b92ce0d56ec9e8278775ff557bca0e9fc2538373e5e34b4a7c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
