<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0c461de219d46c3e00f02477e3fc823a43932cffee4f9cd18bf5d3c9f2c90b70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2670ad9a839742b5263612cf06ea0cb7023044ee5b28661eca3886b15d64430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2670ad9a839742b5263612cf06ea0cb7023044ee5b28661eca3886b15d64430->enter($__internal_a2670ad9a839742b5263612cf06ea0cb7023044ee5b28661eca3886b15d64430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1ce0ab26736846716fdf4b492d1ab58c5cda918cd44a3de978d783787c331793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce0ab26736846716fdf4b492d1ab58c5cda918cd44a3de978d783787c331793->enter($__internal_1ce0ab26736846716fdf4b492d1ab58c5cda918cd44a3de978d783787c331793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2670ad9a839742b5263612cf06ea0cb7023044ee5b28661eca3886b15d64430->leave($__internal_a2670ad9a839742b5263612cf06ea0cb7023044ee5b28661eca3886b15d64430_prof);

        
        $__internal_1ce0ab26736846716fdf4b492d1ab58c5cda918cd44a3de978d783787c331793->leave($__internal_1ce0ab26736846716fdf4b492d1ab58c5cda918cd44a3de978d783787c331793_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e643538112bc16ac84e33af87652a3210efa6306419ba2e23f36e3cc1eccc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e643538112bc16ac84e33af87652a3210efa6306419ba2e23f36e3cc1eccc59->enter($__internal_0e643538112bc16ac84e33af87652a3210efa6306419ba2e23f36e3cc1eccc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f149dfcc07b21ee1fe87034f9d32a4d3e4f6e48ee1951322a6aac794e6c63ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f149dfcc07b21ee1fe87034f9d32a4d3e4f6e48ee1951322a6aac794e6c63ed8->enter($__internal_f149dfcc07b21ee1fe87034f9d32a4d3e4f6e48ee1951322a6aac794e6c63ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f149dfcc07b21ee1fe87034f9d32a4d3e4f6e48ee1951322a6aac794e6c63ed8->leave($__internal_f149dfcc07b21ee1fe87034f9d32a4d3e4f6e48ee1951322a6aac794e6c63ed8_prof);

        
        $__internal_0e643538112bc16ac84e33af87652a3210efa6306419ba2e23f36e3cc1eccc59->leave($__internal_0e643538112bc16ac84e33af87652a3210efa6306419ba2e23f36e3cc1eccc59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
