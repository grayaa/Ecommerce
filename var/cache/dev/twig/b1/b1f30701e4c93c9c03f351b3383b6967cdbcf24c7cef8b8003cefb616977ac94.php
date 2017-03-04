<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_04eb8f77b2db8446be558f7f70a68c3fad1ae0fb6191dcc72828021d665683e9 extends Twig_Template
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
        $__internal_64e13ea93d064e0c7da7218db63754b7223b73951f9095147f3c6e19e6f30db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e13ea93d064e0c7da7218db63754b7223b73951f9095147f3c6e19e6f30db5->enter($__internal_64e13ea93d064e0c7da7218db63754b7223b73951f9095147f3c6e19e6f30db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7594b2ecd693cfdcfa12667e566dc1d7d5ade8fc20fc11a9fecf2c5944b4730b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7594b2ecd693cfdcfa12667e566dc1d7d5ade8fc20fc11a9fecf2c5944b4730b->enter($__internal_7594b2ecd693cfdcfa12667e566dc1d7d5ade8fc20fc11a9fecf2c5944b4730b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64e13ea93d064e0c7da7218db63754b7223b73951f9095147f3c6e19e6f30db5->leave($__internal_64e13ea93d064e0c7da7218db63754b7223b73951f9095147f3c6e19e6f30db5_prof);

        
        $__internal_7594b2ecd693cfdcfa12667e566dc1d7d5ade8fc20fc11a9fecf2c5944b4730b->leave($__internal_7594b2ecd693cfdcfa12667e566dc1d7d5ade8fc20fc11a9fecf2c5944b4730b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe14a497e0547406c4e0e7f52086c18bc4ff4603a63c778ff176237a0f9dafb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe14a497e0547406c4e0e7f52086c18bc4ff4603a63c778ff176237a0f9dafb7->enter($__internal_fe14a497e0547406c4e0e7f52086c18bc4ff4603a63c778ff176237a0f9dafb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e75fa3d2a9a64599345217bfa4f4ea231d35aa89890f0a3d377486c3513487e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75fa3d2a9a64599345217bfa4f4ea231d35aa89890f0a3d377486c3513487e4->enter($__internal_e75fa3d2a9a64599345217bfa4f4ea231d35aa89890f0a3d377486c3513487e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e75fa3d2a9a64599345217bfa4f4ea231d35aa89890f0a3d377486c3513487e4->leave($__internal_e75fa3d2a9a64599345217bfa4f4ea231d35aa89890f0a3d377486c3513487e4_prof);

        
        $__internal_fe14a497e0547406c4e0e7f52086c18bc4ff4603a63c778ff176237a0f9dafb7->leave($__internal_fe14a497e0547406c4e0e7f52086c18bc4ff4603a63c778ff176237a0f9dafb7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_008d546c90187f6f3b99ade118c96a0e63f53d0d1113c94e7b5299c362e403b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008d546c90187f6f3b99ade118c96a0e63f53d0d1113c94e7b5299c362e403b4->enter($__internal_008d546c90187f6f3b99ade118c96a0e63f53d0d1113c94e7b5299c362e403b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b0d51f86b6983cfc2019bb4cd16bdf2a1d59123dd0849c88767f5015fd425e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d51f86b6983cfc2019bb4cd16bdf2a1d59123dd0849c88767f5015fd425e20->enter($__internal_b0d51f86b6983cfc2019bb4cd16bdf2a1d59123dd0849c88767f5015fd425e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b0d51f86b6983cfc2019bb4cd16bdf2a1d59123dd0849c88767f5015fd425e20->leave($__internal_b0d51f86b6983cfc2019bb4cd16bdf2a1d59123dd0849c88767f5015fd425e20_prof);

        
        $__internal_008d546c90187f6f3b99ade118c96a0e63f53d0d1113c94e7b5299c362e403b4->leave($__internal_008d546c90187f6f3b99ade118c96a0e63f53d0d1113c94e7b5299c362e403b4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_805b6463b29c021ce3d5b55d3793a2980ae2eee3ab8822604d02bdd7c841df29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805b6463b29c021ce3d5b55d3793a2980ae2eee3ab8822604d02bdd7c841df29->enter($__internal_805b6463b29c021ce3d5b55d3793a2980ae2eee3ab8822604d02bdd7c841df29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_692ee59f1f6f4be0c0422a18f362bfb12894868bfeccf839b01259c43de7aee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692ee59f1f6f4be0c0422a18f362bfb12894868bfeccf839b01259c43de7aee3->enter($__internal_692ee59f1f6f4be0c0422a18f362bfb12894868bfeccf839b01259c43de7aee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_692ee59f1f6f4be0c0422a18f362bfb12894868bfeccf839b01259c43de7aee3->leave($__internal_692ee59f1f6f4be0c0422a18f362bfb12894868bfeccf839b01259c43de7aee3_prof);

        
        $__internal_805b6463b29c021ce3d5b55d3793a2980ae2eee3ab8822604d02bdd7c841df29->leave($__internal_805b6463b29c021ce3d5b55d3793a2980ae2eee3ab8822604d02bdd7c841df29_prof);

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
