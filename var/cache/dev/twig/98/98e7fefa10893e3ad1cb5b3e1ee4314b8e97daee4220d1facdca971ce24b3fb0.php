<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fa4b3973fa0a6c2b7b43d9c5af5e39a128e100b6604d41892fa5530032516c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_24f39bffad9d908a859f3032b066e9969f456a78cb70a2fa75c671175724ae30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f39bffad9d908a859f3032b066e9969f456a78cb70a2fa75c671175724ae30->enter($__internal_24f39bffad9d908a859f3032b066e9969f456a78cb70a2fa75c671175724ae30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_5fe7626ba16b8a17c17694718b670efe878d2e750015da5f68fc78bc058622d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe7626ba16b8a17c17694718b670efe878d2e750015da5f68fc78bc058622d4->enter($__internal_5fe7626ba16b8a17c17694718b670efe878d2e750015da5f68fc78bc058622d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f39bffad9d908a859f3032b066e9969f456a78cb70a2fa75c671175724ae30->leave($__internal_24f39bffad9d908a859f3032b066e9969f456a78cb70a2fa75c671175724ae30_prof);

        
        $__internal_5fe7626ba16b8a17c17694718b670efe878d2e750015da5f68fc78bc058622d4->leave($__internal_5fe7626ba16b8a17c17694718b670efe878d2e750015da5f68fc78bc058622d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e150404f8ba809642315c000c04076653dea0319dc38756bcc53b2a0e902e947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e150404f8ba809642315c000c04076653dea0319dc38756bcc53b2a0e902e947->enter($__internal_e150404f8ba809642315c000c04076653dea0319dc38756bcc53b2a0e902e947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ebaaa81be958fa007bbb907736e13560eb76d00b646df548438bb8755beb4726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebaaa81be958fa007bbb907736e13560eb76d00b646df548438bb8755beb4726->enter($__internal_ebaaa81be958fa007bbb907736e13560eb76d00b646df548438bb8755beb4726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "

";
        
        $__internal_ebaaa81be958fa007bbb907736e13560eb76d00b646df548438bb8755beb4726->leave($__internal_ebaaa81be958fa007bbb907736e13560eb76d00b646df548438bb8755beb4726_prof);

        
        $__internal_e150404f8ba809642315c000c04076653dea0319dc38756bcc53b2a0e902e947->leave($__internal_e150404f8ba809642315c000c04076653dea0319dc38756bcc53b2a0e902e947_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    {{ include('FOSUserBundle:Security:login_content.html.twig') }}

{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
