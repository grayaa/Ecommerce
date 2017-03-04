<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_2cf775b2328c9a18c00ae3910e8754ff80772920e9825c422faa3cea4cf05ac0 extends Twig_Template
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
        $__internal_63bf8f9b80f9338b9da42645a00c11021be014420ec1ea742ee57121176cbe78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bf8f9b80f9338b9da42645a00c11021be014420ec1ea742ee57121176cbe78->enter($__internal_63bf8f9b80f9338b9da42645a00c11021be014420ec1ea742ee57121176cbe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_48d62dd19780fdb426c9a87e33d5c393aaaea22a692d376c2e552e95dfb28454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d62dd19780fdb426c9a87e33d5c393aaaea22a692d376c2e552e95dfb28454->enter($__internal_48d62dd19780fdb426c9a87e33d5c393aaaea22a692d376c2e552e95dfb28454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_63bf8f9b80f9338b9da42645a00c11021be014420ec1ea742ee57121176cbe78->leave($__internal_63bf8f9b80f9338b9da42645a00c11021be014420ec1ea742ee57121176cbe78_prof);

        
        $__internal_48d62dd19780fdb426c9a87e33d5c393aaaea22a692d376c2e552e95dfb28454->leave($__internal_48d62dd19780fdb426c9a87e33d5c393aaaea22a692d376c2e552e95dfb28454_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\wamp64\\www\\Ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
