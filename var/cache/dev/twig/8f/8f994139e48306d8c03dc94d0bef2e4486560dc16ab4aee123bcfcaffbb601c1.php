<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_35076438a9722eef82de3e520c5802ceb5de880c04f30404047fea503430ebf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f5ca0303088995b89b5df773e1421d5d21bd6588f0730fc64943774975ef0d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ca0303088995b89b5df773e1421d5d21bd6588f0730fc64943774975ef0d2c->enter($__internal_f5ca0303088995b89b5df773e1421d5d21bd6588f0730fc64943774975ef0d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_54259ba778355221fcbd0224892ec67f423dbc51bb5c9f3d8c766907b04ccad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54259ba778355221fcbd0224892ec67f423dbc51bb5c9f3d8c766907b04ccad4->enter($__internal_54259ba778355221fcbd0224892ec67f423dbc51bb5c9f3d8c766907b04ccad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ca0303088995b89b5df773e1421d5d21bd6588f0730fc64943774975ef0d2c->leave($__internal_f5ca0303088995b89b5df773e1421d5d21bd6588f0730fc64943774975ef0d2c_prof);

        
        $__internal_54259ba778355221fcbd0224892ec67f423dbc51bb5c9f3d8c766907b04ccad4->leave($__internal_54259ba778355221fcbd0224892ec67f423dbc51bb5c9f3d8c766907b04ccad4_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f1154f5b08759d87c04e80248c77b075f4b8166045157c266be78dfb1a607a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1154f5b08759d87c04e80248c77b075f4b8166045157c266be78dfb1a607a0->enter($__internal_4f1154f5b08759d87c04e80248c77b075f4b8166045157c266be78dfb1a607a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7321532a65802feccc9a5c4d4288eab63a52a40cbef8e2a19533d3e1ceab5f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7321532a65802feccc9a5c4d4288eab63a52a40cbef8e2a19533d3e1ceab5f91->enter($__internal_7321532a65802feccc9a5c4d4288eab63a52a40cbef8e2a19533d3e1ceab5f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        
        $__internal_7321532a65802feccc9a5c4d4288eab63a52a40cbef8e2a19533d3e1ceab5f91->leave($__internal_7321532a65802feccc9a5c4d4288eab63a52a40cbef8e2a19533d3e1ceab5f91_prof);

        
        $__internal_4f1154f5b08759d87c04e80248c77b075f4b8166045157c266be78dfb1a607a0->leave($__internal_4f1154f5b08759d87c04e80248c77b075f4b8166045157c266be78dfb1a607a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
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
    {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
