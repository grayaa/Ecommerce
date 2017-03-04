<?php

/* UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig */
class __TwigTemplate_f71f7e891ce888ee724ef01cdf19326b0f905e035b3fe091a3c504919574af96 extends Twig_Template
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
        $__internal_79667b242442761d1282d8adcc3b2822e50de064641b3e1758319f6413590c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79667b242442761d1282d8adcc3b2822e50de064641b3e1758319f6413590c8a->enter($__internal_79667b242442761d1282d8adcc3b2822e50de064641b3e1758319f6413590c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig"));

        $__internal_b805da5d6c8539a909f1c5c5e1d4afecfd0a0a385c828dcd2b58400db9c059df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b805da5d6c8539a909f1c5c5e1d4afecfd0a0a385c828dcd2b58400db9c059df->enter($__internal_b805da5d6c8539a909f1c5c5e1d4afecfd0a0a385c828dcd2b58400db9c059df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig"));

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
        
        $__internal_79667b242442761d1282d8adcc3b2822e50de064641b3e1758319f6413590c8a->leave($__internal_79667b242442761d1282d8adcc3b2822e50de064641b3e1758319f6413590c8a_prof);

        
        $__internal_b805da5d6c8539a909f1c5c5e1d4afecfd0a0a385c828dcd2b58400db9c059df->leave($__internal_b805da5d6c8539a909f1c5c5e1d4afecfd0a0a385c828dcd2b58400db9c059df_prof);

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
