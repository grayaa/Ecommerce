<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_a269db18fc4dbdb7b3375711146c1b7672180e7a48d706edb64dc708cc1b7e9a extends Twig_Template
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
        $__internal_c51b8716595a047ea269a62b1e2836431e7833f94689950e0147ac232880b8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51b8716595a047ea269a62b1e2836431e7833f94689950e0147ac232880b8ef->enter($__internal_c51b8716595a047ea269a62b1e2836431e7833f94689950e0147ac232880b8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_e2fd2040e01ebb2f0490a478faeb59087cbc66e405574390fdaff8e3c75a6908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fd2040e01ebb2f0490a478faeb59087cbc66e405574390fdaff8e3c75a6908->enter($__internal_e2fd2040e01ebb2f0490a478faeb59087cbc66e405574390fdaff8e3c75a6908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" accesskey=\"D\">
            ";
            // line 5
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
        </a>
    </div>
    <style";
            // line 8
            if ((isset($context["csp_style_nonce"]) ? $context["csp_style_nonce"] : $this->getContext($context, "csp_style_nonce"))) {
                echo " nonce=\"";
                echo twig_escape_filter($this->env, (isset($context["csp_style_nonce"]) ? $context["csp_style_nonce"] : $this->getContext($context, "csp_style_nonce")), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 9
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig", array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true));
            echo "
    </style>
    <div id=\"sfToolbarClearer-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-toolbar-clearer\"></div>
";
        }
        // line 13
        echo "
<div id=\"sfToolbarMainContent-";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 16
            echo "        ";
            $__internal_af3cd1e5f8a84eee8e2f4c40b59ce575ac3ab354108ef3917af668bc09440989 = array("collector" => $this->getAttribute(            // line 17
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>             // line 18
(isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(            // line 19
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token", array()), "name" =>             // line 20
$context["name"], "profiler_markup_version" =>             // line 21
(isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), "csp_script_nonce" =>             // line 22
(isset($context["csp_script_nonce"]) ? $context["csp_script_nonce"] : $this->getContext($context, "csp_script_nonce")), "csp_style_nonce" =>             // line 23
(isset($context["csp_style_nonce"]) ? $context["csp_style_nonce"] : $this->getContext($context, "csp_style_nonce")));
            if (!is_array($__internal_af3cd1e5f8a84eee8e2f4c40b59ce575ac3ab354108ef3917af668bc09440989)) {
                throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_af3cd1e5f8a84eee8e2f4c40b59ce575ac3ab354108ef3917af668bc09440989);
            // line 25
            echo "            ";
            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 25)->displayBlock("toolbar", $context);
            echo "
        ";
            $context = $context['_parent'];
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    ";
        // line 29
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 30
            echo "        <a class=\"hide-button\" id=\"sfToolbarHideButton-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
            ";
            // line 31
            echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
            echo "
        </a>
    ";
        }
        // line 34
        echo "</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_c51b8716595a047ea269a62b1e2836431e7833f94689950e0147ac232880b8ef->leave($__internal_c51b8716595a047ea269a62b1e2836431e7833f94689950e0147ac232880b8ef_prof);

        
        $__internal_e2fd2040e01ebb2f0490a478faeb59087cbc66e405574390fdaff8e3c75a6908->leave($__internal_e2fd2040e01ebb2f0490a478faeb59087cbc66e405574390fdaff8e3c75a6908_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  132 => 31,  127 => 30,  125 => 29,  122 => 28,  108 => 27,  102 => 25,  95 => 23,  94 => 22,  93 => 21,  92 => 20,  91 => 19,  90 => 18,  89 => 17,  87 => 16,  70 => 15,  66 => 14,  63 => 13,  58 => 11,  53 => 9,  45 => 8,  39 => 5,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
{% if 'normal' != position %}
    <div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
            {{ include('@WebProfiler/Icon/symfony.svg') }}
        </a>
    </div>
    <style{% if csp_style_nonce %} nonce=\"{{ csp_style_nonce }}\"{% endif %}>
        {{ include('@WebProfiler/Profiler/toolbar.css.twig', { 'position': position, 'floatable': true }) }}
    </style>
    <div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>
{% endif %}

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% with {
            collector: profile.getcollector(name),
            profiler_url: profiler_url,
            token: profile.token,
            name: name,
            profiler_markup_version: profiler_markup_version,
            csp_script_nonce: csp_script_nonce,
            csp_style_nonce: csp_style_nonce
          } %}
            {{ block('toolbar', template) }}
        {% endwith %}
    {% endfor %}

    {% if 'normal' != position %}
        <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
            {{ include('@WebProfiler/Icon/close.svg') }}
        </a>
    {% endif %}
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\wamp64\\www\\Ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar.html.twig");
    }
}