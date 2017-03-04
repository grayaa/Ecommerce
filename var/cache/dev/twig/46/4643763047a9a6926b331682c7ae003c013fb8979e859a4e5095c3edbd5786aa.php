<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d5e40ca0fcea1c9c3a7a0044d28e5aa8ce9de81e89fb7909bccd2411d6ccf25b extends Twig_Template
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
        $__internal_8e6f616f72d9fd27063e79f07c308f123afd16ec3f05a2056837de114d8a5b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6f616f72d9fd27063e79f07c308f123afd16ec3f05a2056837de114d8a5b50->enter($__internal_8e6f616f72d9fd27063e79f07c308f123afd16ec3f05a2056837de114d8a5b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d4eae674f5db5a46adb64dcbb11e5f8380d42b4f2ad206ae87735991d897e7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4eae674f5db5a46adb64dcbb11e5f8380d42b4f2ad206ae87735991d897e7f2->enter($__internal_d4eae674f5db5a46adb64dcbb11e5f8380d42b4f2ad206ae87735991d897e7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e6f616f72d9fd27063e79f07c308f123afd16ec3f05a2056837de114d8a5b50->leave($__internal_8e6f616f72d9fd27063e79f07c308f123afd16ec3f05a2056837de114d8a5b50_prof);

        
        $__internal_d4eae674f5db5a46adb64dcbb11e5f8380d42b4f2ad206ae87735991d897e7f2->leave($__internal_d4eae674f5db5a46adb64dcbb11e5f8380d42b4f2ad206ae87735991d897e7f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d57e73c0a2618fdd4f1b7eaa604a7e85f434ab18d164c8f1328c69ef13d89e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57e73c0a2618fdd4f1b7eaa604a7e85f434ab18d164c8f1328c69ef13d89e7d->enter($__internal_d57e73c0a2618fdd4f1b7eaa604a7e85f434ab18d164c8f1328c69ef13d89e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_547db21d96a0a508c78d66d9a85fcd124499e01812ed218ded53b6f9d121e996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547db21d96a0a508c78d66d9a85fcd124499e01812ed218ded53b6f9d121e996->enter($__internal_547db21d96a0a508c78d66d9a85fcd124499e01812ed218ded53b6f9d121e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_547db21d96a0a508c78d66d9a85fcd124499e01812ed218ded53b6f9d121e996->leave($__internal_547db21d96a0a508c78d66d9a85fcd124499e01812ed218ded53b6f9d121e996_prof);

        
        $__internal_d57e73c0a2618fdd4f1b7eaa604a7e85f434ab18d164c8f1328c69ef13d89e7d->leave($__internal_d57e73c0a2618fdd4f1b7eaa604a7e85f434ab18d164c8f1328c69ef13d89e7d_prof);

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
