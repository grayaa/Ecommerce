<?php

/* UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig */
class __TwigTemplate_b5c4ad885a37731ece2957f08e5130fb6934ff5f2db64ad37882486846da28c0 extends Twig_Template
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
        $__internal_02260947d84fd4b9fb74a74b377152ca3115001bef694948aef3c2aecf443a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02260947d84fd4b9fb74a74b377152ca3115001bef694948aef3c2aecf443a8e->enter($__internal_02260947d84fd4b9fb74a74b377152ca3115001bef694948aef3c2aecf443a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig"));

        $__internal_de82a647c75c7f3cd5f40d3e5adb2dd2faa88b466c18c62968d549cacd80e814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de82a647c75c7f3cd5f40d3e5adb2dd2faa88b466c18c62968d549cacd80e814->enter($__internal_de82a647c75c7f3cd5f40d3e5adb2dd2faa88b466c18c62968d549cacd80e814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
        
        $__internal_02260947d84fd4b9fb74a74b377152ca3115001bef694948aef3c2aecf443a8e->leave($__internal_02260947d84fd4b9fb74a74b377152ca3115001bef694948aef3c2aecf443a8e_prof);

        
        $__internal_de82a647c75c7f3cd5f40d3e5adb2dd2faa88b466c18c62968d549cacd80e814->leave($__internal_de82a647c75c7f3cd5f40d3e5adb2dd2faa88b466c18c62968d549cacd80e814_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
        </li>
    </ul>
</div>", "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateurs.html.twig");
    }
}
