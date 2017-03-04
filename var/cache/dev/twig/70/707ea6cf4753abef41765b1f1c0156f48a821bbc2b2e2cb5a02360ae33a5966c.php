<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_53c5add0459b42615278c4422472813596753df37ff89d415ce75453d3293f23 extends Twig_Template
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
        $__internal_671ad0b3214387f23dd906faa4821a253dbc815ad533b5ec7848110d65caabdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671ad0b3214387f23dd906faa4821a253dbc815ad533b5ec7848110d65caabdb->enter($__internal_671ad0b3214387f23dd906faa4821a253dbc815ad533b5ec7848110d65caabdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d3bc9bdfd6c7474a62588b8fab08a9c29e5edf02d40d433e7e82d507d7099514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bc9bdfd6c7474a62588b8fab08a9c29e5edf02d40d433e7e82d507d7099514->enter($__internal_d3bc9bdfd6c7474a62588b8fab08a9c29e5edf02d40d433e7e82d507d7099514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_671ad0b3214387f23dd906faa4821a253dbc815ad533b5ec7848110d65caabdb->leave($__internal_671ad0b3214387f23dd906faa4821a253dbc815ad533b5ec7848110d65caabdb_prof);

        
        $__internal_d3bc9bdfd6c7474a62588b8fab08a9c29e5edf02d40d433e7e82d507d7099514->leave($__internal_d3bc9bdfd6c7474a62588b8fab08a9c29e5edf02d40d433e7e82d507d7099514_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\Ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
