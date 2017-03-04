<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7cefff1441c8db42d9232a01e10c0f6bcc4eb4fd338199806e7935538b710e45 extends Twig_Template
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
        $__internal_0c457844c336df590406fab8e86d59586e7468d9ad4b113d7de7ed10775092fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c457844c336df590406fab8e86d59586e7468d9ad4b113d7de7ed10775092fe->enter($__internal_0c457844c336df590406fab8e86d59586e7468d9ad4b113d7de7ed10775092fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_903910dfed12fedb7e30814a70158dd353cf44ba468f0595ec65bf13b218aba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903910dfed12fedb7e30814a70158dd353cf44ba468f0595ec65bf13b218aba1->enter($__internal_903910dfed12fedb7e30814a70158dd353cf44ba468f0595ec65bf13b218aba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c457844c336df590406fab8e86d59586e7468d9ad4b113d7de7ed10775092fe->leave($__internal_0c457844c336df590406fab8e86d59586e7468d9ad4b113d7de7ed10775092fe_prof);

        
        $__internal_903910dfed12fedb7e30814a70158dd353cf44ba468f0595ec65bf13b218aba1->leave($__internal_903910dfed12fedb7e30814a70158dd353cf44ba468f0595ec65bf13b218aba1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67114ac8653fff7e0ded062f392d357467ba79faf58f6d38f3fcf949add46302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67114ac8653fff7e0ded062f392d357467ba79faf58f6d38f3fcf949add46302->enter($__internal_67114ac8653fff7e0ded062f392d357467ba79faf58f6d38f3fcf949add46302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_217e8c87c1f6b41c23d78cbdac7647713b704b4d69bf843d1d4fd134db0ed289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217e8c87c1f6b41c23d78cbdac7647713b704b4d69bf843d1d4fd134db0ed289->enter($__internal_217e8c87c1f6b41c23d78cbdac7647713b704b4d69bf843d1d4fd134db0ed289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_217e8c87c1f6b41c23d78cbdac7647713b704b4d69bf843d1d4fd134db0ed289->leave($__internal_217e8c87c1f6b41c23d78cbdac7647713b704b4d69bf843d1d4fd134db0ed289_prof);

        
        $__internal_67114ac8653fff7e0ded062f392d357467ba79faf58f6d38f3fcf949add46302->leave($__internal_67114ac8653fff7e0ded062f392d357467ba79faf58f6d38f3fcf949add46302_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ddae4adbd19fee9d456b52388089ecb159fc61ba1496417831fa7dac2342669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ddae4adbd19fee9d456b52388089ecb159fc61ba1496417831fa7dac2342669->enter($__internal_3ddae4adbd19fee9d456b52388089ecb159fc61ba1496417831fa7dac2342669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dcd688fe8f02a4a22e688a4807575d1d1f2580011703fbee1481abdfb3056731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd688fe8f02a4a22e688a4807575d1d1f2580011703fbee1481abdfb3056731->enter($__internal_dcd688fe8f02a4a22e688a4807575d1d1f2580011703fbee1481abdfb3056731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dcd688fe8f02a4a22e688a4807575d1d1f2580011703fbee1481abdfb3056731->leave($__internal_dcd688fe8f02a4a22e688a4807575d1d1f2580011703fbee1481abdfb3056731_prof);

        
        $__internal_3ddae4adbd19fee9d456b52388089ecb159fc61ba1496417831fa7dac2342669->leave($__internal_3ddae4adbd19fee9d456b52388089ecb159fc61ba1496417831fa7dac2342669_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e46493aa62509ae81540228edd0cb910a4923c03c9a55a3da63ddd238f4ecde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46493aa62509ae81540228edd0cb910a4923c03c9a55a3da63ddd238f4ecde7->enter($__internal_e46493aa62509ae81540228edd0cb910a4923c03c9a55a3da63ddd238f4ecde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5854106388b22c768bff0bba88133163d99f2671c578f17e4b383fcc245370e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5854106388b22c768bff0bba88133163d99f2671c578f17e4b383fcc245370e->enter($__internal_f5854106388b22c768bff0bba88133163d99f2671c578f17e4b383fcc245370e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f5854106388b22c768bff0bba88133163d99f2671c578f17e4b383fcc245370e->leave($__internal_f5854106388b22c768bff0bba88133163d99f2671c578f17e4b383fcc245370e_prof);

        
        $__internal_e46493aa62509ae81540228edd0cb910a4923c03c9a55a3da63ddd238f4ecde7->leave($__internal_e46493aa62509ae81540228edd0cb910a4923c03c9a55a3da63ddd238f4ecde7_prof);

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
