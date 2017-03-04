<?php

/* UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig */
class __TwigTemplate_2e894bc769601308559870fdfb6d896e76648bfeecc455e7fe4dcdf5a6152836 extends Twig_Template
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
        $__internal_116c8330b83d689cc1d7bd10517dd007567dd83fa07e78cd2f4cf558b58632f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116c8330b83d689cc1d7bd10517dd007567dd83fa07e78cd2f4cf558b58632f6->enter($__internal_116c8330b83d689cc1d7bd10517dd007567dd83fa07e78cd2f4cf558b58632f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig"));

        $__internal_6bd952a400fdb24159628e389f8c8502a780af02ed49edce4e4c739e1b76b410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd952a400fdb24159628e389f8c8502a780af02ed49edce4e4c739e1b76b410->enter($__internal_6bd952a400fdb24159628e389f8c8502a780af02ed49edce4e4c739e1b76b410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Modifier mot de passe</a>
        </li>
        <li>
            <a href=\"#\">Mes Factures</a>
        </li>
        <li>
            <a href=\"#\">Mes Adresses</a>
        </li>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a>
        </li>
    </ul>
</div>";
        
        $__internal_116c8330b83d689cc1d7bd10517dd007567dd83fa07e78cd2f4cf558b58632f6->leave($__internal_116c8330b83d689cc1d7bd10517dd007567dd83fa07e78cd2f4cf558b58632f6_prof);

        
        $__internal_6bd952a400fdb24159628e389f8c8502a780af02ed49edce4e4c739e1b76b410->leave($__internal_6bd952a400fdb24159628e389f8c8502a780af02ed49edce4e4c739e1b76b410_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  42 => 10,  36 => 7,  30 => 4,  25 => 1,);
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
            <a href=\"{{ path('fos_user_profile_show') }}\">Mes informations</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_profile_edit') }}\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_change_password') }}\">Modifier mot de passe</a>
        </li>
        <li>
            <a href=\"#\">Mes Factures</a>
        </li>
        <li>
            <a href=\"#\">Mes Adresses</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a>
        </li>
    </ul>
</div>", "UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateursConnecte.html.twig");
    }
}
