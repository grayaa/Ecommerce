<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_66938dcc738d9cdd15670b20b9958beb698f64443d2767409e3aa0295dcd3971 extends Twig_Template
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
        $__internal_ab9c0ed35f0ee75121e5bf687ec39ed6a1185783453a7bf3cd12bd187305af74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9c0ed35f0ee75121e5bf687ec39ed6a1185783453a7bf3cd12bd187305af74->enter($__internal_ab9c0ed35f0ee75121e5bf687ec39ed6a1185783453a7bf3cd12bd187305af74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e757a4bd6bfa378c1470e5a9cb0f1ac1a1ccdd953a4a80a89a7944a8dec8d330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e757a4bd6bfa378c1470e5a9cb0f1ac1a1ccdd953a4a80a89a7944a8dec8d330->enter($__internal_e757a4bd6bfa378c1470e5a9cb0f1ac1a1ccdd953a4a80a89a7944a8dec8d330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab9c0ed35f0ee75121e5bf687ec39ed6a1185783453a7bf3cd12bd187305af74->leave($__internal_ab9c0ed35f0ee75121e5bf687ec39ed6a1185783453a7bf3cd12bd187305af74_prof);

        
        $__internal_e757a4bd6bfa378c1470e5a9cb0f1ac1a1ccdd953a4a80a89a7944a8dec8d330->leave($__internal_e757a4bd6bfa378c1470e5a9cb0f1ac1a1ccdd953a4a80a89a7944a8dec8d330_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cadd8e32639a2847212d2f67901b56e6cbc4b21041fa5ac4de93fc025e0f5273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadd8e32639a2847212d2f67901b56e6cbc4b21041fa5ac4de93fc025e0f5273->enter($__internal_cadd8e32639a2847212d2f67901b56e6cbc4b21041fa5ac4de93fc025e0f5273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_31161a2f69bb4bc4c3c0ab11120bdf66460aef39f32f572a1636bbc33b0b9603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31161a2f69bb4bc4c3c0ab11120bdf66460aef39f32f572a1636bbc33b0b9603->enter($__internal_31161a2f69bb4bc4c3c0ab11120bdf66460aef39f32f572a1636bbc33b0b9603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31161a2f69bb4bc4c3c0ab11120bdf66460aef39f32f572a1636bbc33b0b9603->leave($__internal_31161a2f69bb4bc4c3c0ab11120bdf66460aef39f32f572a1636bbc33b0b9603_prof);

        
        $__internal_cadd8e32639a2847212d2f67901b56e6cbc4b21041fa5ac4de93fc025e0f5273->leave($__internal_cadd8e32639a2847212d2f67901b56e6cbc4b21041fa5ac4de93fc025e0f5273_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ead8d136fc24ef0f17af7de0017409feb93afe1b0de2c25ad962026249babeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead8d136fc24ef0f17af7de0017409feb93afe1b0de2c25ad962026249babeff->enter($__internal_ead8d136fc24ef0f17af7de0017409feb93afe1b0de2c25ad962026249babeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef3bc341f1030fe02943c594c8ec387befa7eefdafd55072ddb249ac3144e2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3bc341f1030fe02943c594c8ec387befa7eefdafd55072ddb249ac3144e2ae->enter($__internal_ef3bc341f1030fe02943c594c8ec387befa7eefdafd55072ddb249ac3144e2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef3bc341f1030fe02943c594c8ec387befa7eefdafd55072ddb249ac3144e2ae->leave($__internal_ef3bc341f1030fe02943c594c8ec387befa7eefdafd55072ddb249ac3144e2ae_prof);

        
        $__internal_ead8d136fc24ef0f17af7de0017409feb93afe1b0de2c25ad962026249babeff->leave($__internal_ead8d136fc24ef0f17af7de0017409feb93afe1b0de2c25ad962026249babeff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f45fe78dae90eeecc2c24445b874f3bcdb68c8514c9d9943d38deb6b7b3a644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f45fe78dae90eeecc2c24445b874f3bcdb68c8514c9d9943d38deb6b7b3a644->enter($__internal_5f45fe78dae90eeecc2c24445b874f3bcdb68c8514c9d9943d38deb6b7b3a644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2acb31616eba2b0003fdab29acc8ab6210af230d86b74bc3cbf24f9cd09486c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acb31616eba2b0003fdab29acc8ab6210af230d86b74bc3cbf24f9cd09486c9->enter($__internal_2acb31616eba2b0003fdab29acc8ab6210af230d86b74bc3cbf24f9cd09486c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2acb31616eba2b0003fdab29acc8ab6210af230d86b74bc3cbf24f9cd09486c9->leave($__internal_2acb31616eba2b0003fdab29acc8ab6210af230d86b74bc3cbf24f9cd09486c9_prof);

        
        $__internal_5f45fe78dae90eeecc2c24445b874f3bcdb68c8514c9d9943d38deb6b7b3a644->leave($__internal_5f45fe78dae90eeecc2c24445b874f3bcdb68c8514c9d9943d38deb6b7b3a644_prof);

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
