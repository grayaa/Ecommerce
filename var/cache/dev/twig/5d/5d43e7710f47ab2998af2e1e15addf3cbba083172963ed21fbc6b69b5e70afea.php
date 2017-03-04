<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_530a385e71ed6afcf58af3434cfe338af4348de47a448baaa4c1132544091c01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0627b8d104ff0d9afb58b8568ce0a05e8ca875ba58ec8cc68fdf8706a4500b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0627b8d104ff0d9afb58b8568ce0a05e8ca875ba58ec8cc68fdf8706a4500b63->enter($__internal_0627b8d104ff0d9afb58b8568ce0a05e8ca875ba58ec8cc68fdf8706a4500b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fcfa60856c77f6f6c3258260de2842f862b935c71ab37aecf1dbff7dea7442ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfa60856c77f6f6c3258260de2842f862b935c71ab37aecf1dbff7dea7442ce->enter($__internal_fcfa60856c77f6f6c3258260de2842f862b935c71ab37aecf1dbff7dea7442ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0627b8d104ff0d9afb58b8568ce0a05e8ca875ba58ec8cc68fdf8706a4500b63->leave($__internal_0627b8d104ff0d9afb58b8568ce0a05e8ca875ba58ec8cc68fdf8706a4500b63_prof);

        
        $__internal_fcfa60856c77f6f6c3258260de2842f862b935c71ab37aecf1dbff7dea7442ce->leave($__internal_fcfa60856c77f6f6c3258260de2842f862b935c71ab37aecf1dbff7dea7442ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_788163138f1ec51c3e21d79b01e5600448fc902d88f023c9e1f016696d7774d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788163138f1ec51c3e21d79b01e5600448fc902d88f023c9e1f016696d7774d0->enter($__internal_788163138f1ec51c3e21d79b01e5600448fc902d88f023c9e1f016696d7774d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_07991e49c003d03c3e0472eb8c83405a65a0c6dbfb33f76663df850c6a7b8c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07991e49c003d03c3e0472eb8c83405a65a0c6dbfb33f76663df850c6a7b8c44->enter($__internal_07991e49c003d03c3e0472eb8c83405a65a0c6dbfb33f76663df850c6a7b8c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_07991e49c003d03c3e0472eb8c83405a65a0c6dbfb33f76663df850c6a7b8c44->leave($__internal_07991e49c003d03c3e0472eb8c83405a65a0c6dbfb33f76663df850c6a7b8c44_prof);

        
        $__internal_788163138f1ec51c3e21d79b01e5600448fc902d88f023c9e1f016696d7774d0->leave($__internal_788163138f1ec51c3e21d79b01e5600448fc902d88f023c9e1f016696d7774d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
