<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2ea864776215b16730068b46bd901e3f72261cea41834a669213b3d2a5817587 extends Twig_Template
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
        $__internal_60ff5355c72464c58afcbdee8204efd95adb2fd136cc37223e533de74cbad3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ff5355c72464c58afcbdee8204efd95adb2fd136cc37223e533de74cbad3ac->enter($__internal_60ff5355c72464c58afcbdee8204efd95adb2fd136cc37223e533de74cbad3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e5e843b1d2b07166e4a86a4ce5fc522ecc36264fd27cffa74faa3455451fd83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e843b1d2b07166e4a86a4ce5fc522ecc36264fd27cffa74faa3455451fd83e->enter($__internal_e5e843b1d2b07166e4a86a4ce5fc522ecc36264fd27cffa74faa3455451fd83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60ff5355c72464c58afcbdee8204efd95adb2fd136cc37223e533de74cbad3ac->leave($__internal_60ff5355c72464c58afcbdee8204efd95adb2fd136cc37223e533de74cbad3ac_prof);

        
        $__internal_e5e843b1d2b07166e4a86a4ce5fc522ecc36264fd27cffa74faa3455451fd83e->leave($__internal_e5e843b1d2b07166e4a86a4ce5fc522ecc36264fd27cffa74faa3455451fd83e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_762770109b3110ae12afb41e1d1318606ffa61266cb7bdf6b557987f6e016373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762770109b3110ae12afb41e1d1318606ffa61266cb7bdf6b557987f6e016373->enter($__internal_762770109b3110ae12afb41e1d1318606ffa61266cb7bdf6b557987f6e016373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5128bbd1b0667062466f71c96311dd2573bcb84962de40a9a41628bbae092058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5128bbd1b0667062466f71c96311dd2573bcb84962de40a9a41628bbae092058->enter($__internal_5128bbd1b0667062466f71c96311dd2573bcb84962de40a9a41628bbae092058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5128bbd1b0667062466f71c96311dd2573bcb84962de40a9a41628bbae092058->leave($__internal_5128bbd1b0667062466f71c96311dd2573bcb84962de40a9a41628bbae092058_prof);

        
        $__internal_762770109b3110ae12afb41e1d1318606ffa61266cb7bdf6b557987f6e016373->leave($__internal_762770109b3110ae12afb41e1d1318606ffa61266cb7bdf6b557987f6e016373_prof);

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
