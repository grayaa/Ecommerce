<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f86692b8fe0f94ff2090bbf967dd0aeff69cd52cbabc6bfca7de4b3db9fa1f55 extends Twig_Template
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
        $__internal_532cb159a310a417d25e17a9bce4439f4379ba72182a750b520cf9fa618c71de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532cb159a310a417d25e17a9bce4439f4379ba72182a750b520cf9fa618c71de->enter($__internal_532cb159a310a417d25e17a9bce4439f4379ba72182a750b520cf9fa618c71de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_b0b2a866c5796671c185c174e7fbbf338a18f6acce16bd71ee54298706287fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b2a866c5796671c185c174e7fbbf338a18f6acce16bd71ee54298706287fd5->enter($__internal_b0b2a866c5796671c185c174e7fbbf338a18f6acce16bd71ee54298706287fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_532cb159a310a417d25e17a9bce4439f4379ba72182a750b520cf9fa618c71de->leave($__internal_532cb159a310a417d25e17a9bce4439f4379ba72182a750b520cf9fa618c71de_prof);

        
        $__internal_b0b2a866c5796671c185c174e7fbbf338a18f6acce16bd71ee54298706287fd5->leave($__internal_b0b2a866c5796671c185c174e7fbbf338a18f6acce16bd71ee54298706287fd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f397da15b06cfb1a5293e67f12891980a023f920c9a81d3db4565eeefe18800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f397da15b06cfb1a5293e67f12891980a023f920c9a81d3db4565eeefe18800->enter($__internal_1f397da15b06cfb1a5293e67f12891980a023f920c9a81d3db4565eeefe18800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_64a939a4fb660ee81e2e86fc001e28a59730ef3be54b6c40594a5dbe1cf141b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a939a4fb660ee81e2e86fc001e28a59730ef3be54b6c40594a5dbe1cf141b8->enter($__internal_64a939a4fb660ee81e2e86fc001e28a59730ef3be54b6c40594a5dbe1cf141b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "

";
        
        $__internal_64a939a4fb660ee81e2e86fc001e28a59730ef3be54b6c40594a5dbe1cf141b8->leave($__internal_64a939a4fb660ee81e2e86fc001e28a59730ef3be54b6c40594a5dbe1cf141b8_prof);

        
        $__internal_1f397da15b06cfb1a5293e67f12891980a023f920c9a81d3db4565eeefe18800->leave($__internal_1f397da15b06cfb1a5293e67f12891980a023f920c9a81d3db4565eeefe18800_prof);

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
