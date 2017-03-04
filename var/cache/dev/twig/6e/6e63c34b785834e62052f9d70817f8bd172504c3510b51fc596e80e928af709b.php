<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f603911da812ada9c07a295463879021699ad88c09216b88bfde6ad5ff2a9479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3b376e9780686c5a21306f217a15043e260dfdeb75d7fb50534ec5a2bccf0e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b376e9780686c5a21306f217a15043e260dfdeb75d7fb50534ec5a2bccf0e80->enter($__internal_3b376e9780686c5a21306f217a15043e260dfdeb75d7fb50534ec5a2bccf0e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_186275a096d2997ef08f94a1fd6ac7993c1c9b4036ccc45ee52f2b24506a0166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186275a096d2997ef08f94a1fd6ac7993c1c9b4036ccc45ee52f2b24506a0166->enter($__internal_186275a096d2997ef08f94a1fd6ac7993c1c9b4036ccc45ee52f2b24506a0166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b376e9780686c5a21306f217a15043e260dfdeb75d7fb50534ec5a2bccf0e80->leave($__internal_3b376e9780686c5a21306f217a15043e260dfdeb75d7fb50534ec5a2bccf0e80_prof);

        
        $__internal_186275a096d2997ef08f94a1fd6ac7993c1c9b4036ccc45ee52f2b24506a0166->leave($__internal_186275a096d2997ef08f94a1fd6ac7993c1c9b4036ccc45ee52f2b24506a0166_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e10be430d41f3d9d7af2f2594ed97c35b582e1e698724662b320c29f9973bd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10be430d41f3d9d7af2f2594ed97c35b582e1e698724662b320c29f9973bd02->enter($__internal_e10be430d41f3d9d7af2f2594ed97c35b582e1e698724662b320c29f9973bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb20c257a1c222d5a46b8b3f2bea2707fedb9bcb2eb546473591f1d64e295166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb20c257a1c222d5a46b8b3f2bea2707fedb9bcb2eb546473591f1d64e295166->enter($__internal_bb20c257a1c222d5a46b8b3f2bea2707fedb9bcb2eb546473591f1d64e295166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bb20c257a1c222d5a46b8b3f2bea2707fedb9bcb2eb546473591f1d64e295166->leave($__internal_bb20c257a1c222d5a46b8b3f2bea2707fedb9bcb2eb546473591f1d64e295166_prof);

        
        $__internal_e10be430d41f3d9d7af2f2594ed97c35b582e1e698724662b320c29f9973bd02->leave($__internal_e10be430d41f3d9d7af2f2594ed97c35b582e1e698724662b320c29f9973bd02_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fec975a7761252eccc2c689b967ba5b74cc535b1e9ebb693dc042fd39e17ad9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec975a7761252eccc2c689b967ba5b74cc535b1e9ebb693dc042fd39e17ad9b->enter($__internal_fec975a7761252eccc2c689b967ba5b74cc535b1e9ebb693dc042fd39e17ad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f68507199202ba952649d007ddb0f0ac97d6366b0c6c5134dfcb9bcfae67a04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68507199202ba952649d007ddb0f0ac97d6366b0c6c5134dfcb9bcfae67a04a->enter($__internal_f68507199202ba952649d007ddb0f0ac97d6366b0c6c5134dfcb9bcfae67a04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f68507199202ba952649d007ddb0f0ac97d6366b0c6c5134dfcb9bcfae67a04a->leave($__internal_f68507199202ba952649d007ddb0f0ac97d6366b0c6c5134dfcb9bcfae67a04a_prof);

        
        $__internal_fec975a7761252eccc2c689b967ba5b74cc535b1e9ebb693dc042fd39e17ad9b->leave($__internal_fec975a7761252eccc2c689b967ba5b74cc535b1e9ebb693dc042fd39e17ad9b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b179531fc934eff15adeb2fa65e6946db69f79098fef8a9a14870ee8aa4114b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b179531fc934eff15adeb2fa65e6946db69f79098fef8a9a14870ee8aa4114b->enter($__internal_7b179531fc934eff15adeb2fa65e6946db69f79098fef8a9a14870ee8aa4114b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c68fe1426e53e00e986412ca9f95888d00ae4c1acd448109b2fee2bb61dc003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c68fe1426e53e00e986412ca9f95888d00ae4c1acd448109b2fee2bb61dc003->enter($__internal_8c68fe1426e53e00e986412ca9f95888d00ae4c1acd448109b2fee2bb61dc003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8c68fe1426e53e00e986412ca9f95888d00ae4c1acd448109b2fee2bb61dc003->leave($__internal_8c68fe1426e53e00e986412ca9f95888d00ae4c1acd448109b2fee2bb61dc003_prof);

        
        $__internal_7b179531fc934eff15adeb2fa65e6946db69f79098fef8a9a14870ee8aa4114b->leave($__internal_7b179531fc934eff15adeb2fa65e6946db69f79098fef8a9a14870ee8aa4114b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
