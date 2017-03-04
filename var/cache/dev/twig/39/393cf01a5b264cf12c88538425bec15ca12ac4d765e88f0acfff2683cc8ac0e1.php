<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4177d464f0cbf5208edcd62cef29adf0864ed442bb3ec61b9d381d2d4e175e1c extends Twig_Template
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
        $__internal_5f5b776488387ce07d57efc0252709122f89b76d5311678563c6e70a0920e133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5b776488387ce07d57efc0252709122f89b76d5311678563c6e70a0920e133->enter($__internal_5f5b776488387ce07d57efc0252709122f89b76d5311678563c6e70a0920e133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1eb3ac961f8e34e12626de5a0c3cb277668f49e673a974a583ef97bc144d4c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb3ac961f8e34e12626de5a0c3cb277668f49e673a974a583ef97bc144d4c54->enter($__internal_1eb3ac961f8e34e12626de5a0c3cb277668f49e673a974a583ef97bc144d4c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f5b776488387ce07d57efc0252709122f89b76d5311678563c6e70a0920e133->leave($__internal_5f5b776488387ce07d57efc0252709122f89b76d5311678563c6e70a0920e133_prof);

        
        $__internal_1eb3ac961f8e34e12626de5a0c3cb277668f49e673a974a583ef97bc144d4c54->leave($__internal_1eb3ac961f8e34e12626de5a0c3cb277668f49e673a974a583ef97bc144d4c54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a829ff9878f15f20beeee81dbd625f018102b6fec3c76f66f9a502f245dac4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a829ff9878f15f20beeee81dbd625f018102b6fec3c76f66f9a502f245dac4e->enter($__internal_6a829ff9878f15f20beeee81dbd625f018102b6fec3c76f66f9a502f245dac4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cefe8764cf4deae6ecb30bb93678e2c95803cc6b5c747065a100ad5ca639d014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefe8764cf4deae6ecb30bb93678e2c95803cc6b5c747065a100ad5ca639d014->enter($__internal_cefe8764cf4deae6ecb30bb93678e2c95803cc6b5c747065a100ad5ca639d014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cefe8764cf4deae6ecb30bb93678e2c95803cc6b5c747065a100ad5ca639d014->leave($__internal_cefe8764cf4deae6ecb30bb93678e2c95803cc6b5c747065a100ad5ca639d014_prof);

        
        $__internal_6a829ff9878f15f20beeee81dbd625f018102b6fec3c76f66f9a502f245dac4e->leave($__internal_6a829ff9878f15f20beeee81dbd625f018102b6fec3c76f66f9a502f245dac4e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5da91041086a71ae5f98fa86e88ca7506cac7bf501c46609e3e42c4f7b6267e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da91041086a71ae5f98fa86e88ca7506cac7bf501c46609e3e42c4f7b6267e7->enter($__internal_5da91041086a71ae5f98fa86e88ca7506cac7bf501c46609e3e42c4f7b6267e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a28b22c524dc01c00e8857f2720cd1d617ffce9841118a9ec1bc17d715a55000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28b22c524dc01c00e8857f2720cd1d617ffce9841118a9ec1bc17d715a55000->enter($__internal_a28b22c524dc01c00e8857f2720cd1d617ffce9841118a9ec1bc17d715a55000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a28b22c524dc01c00e8857f2720cd1d617ffce9841118a9ec1bc17d715a55000->leave($__internal_a28b22c524dc01c00e8857f2720cd1d617ffce9841118a9ec1bc17d715a55000_prof);

        
        $__internal_5da91041086a71ae5f98fa86e88ca7506cac7bf501c46609e3e42c4f7b6267e7->leave($__internal_5da91041086a71ae5f98fa86e88ca7506cac7bf501c46609e3e42c4f7b6267e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79b7df7801b52beb6231a66843417d5843528c643ccef1ce117ad23da590f072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b7df7801b52beb6231a66843417d5843528c643ccef1ce117ad23da590f072->enter($__internal_79b7df7801b52beb6231a66843417d5843528c643ccef1ce117ad23da590f072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_637bfc05cd4828030c386b997f9c886d4d4a5d1811738fe7c98b46392a79da7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637bfc05cd4828030c386b997f9c886d4d4a5d1811738fe7c98b46392a79da7d->enter($__internal_637bfc05cd4828030c386b997f9c886d4d4a5d1811738fe7c98b46392a79da7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_637bfc05cd4828030c386b997f9c886d4d4a5d1811738fe7c98b46392a79da7d->leave($__internal_637bfc05cd4828030c386b997f9c886d4d4a5d1811738fe7c98b46392a79da7d_prof);

        
        $__internal_79b7df7801b52beb6231a66843417d5843528c643ccef1ce117ad23da590f072->leave($__internal_79b7df7801b52beb6231a66843417d5843528c643ccef1ce117ad23da590f072_prof);

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
