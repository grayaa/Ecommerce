<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f45f44164ba036d71a5be9b49bd6b011ab8579d14e5cabb5492b817af5f333af extends Twig_Template
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
        $__internal_9fbd213be587168c54ad958f4b71abcddd78369b2a0a5bd3da80d7450ec79bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbd213be587168c54ad958f4b71abcddd78369b2a0a5bd3da80d7450ec79bc0->enter($__internal_9fbd213be587168c54ad958f4b71abcddd78369b2a0a5bd3da80d7450ec79bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_6bd8217b710101761d11bf2077914f41b60e3d75ad674e7c5e2a53fe29df2733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd8217b710101761d11bf2077914f41b60e3d75ad674e7c5e2a53fe29df2733->enter($__internal_6bd8217b710101761d11bf2077914f41b60e3d75ad674e7c5e2a53fe29df2733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9fbd213be587168c54ad958f4b71abcddd78369b2a0a5bd3da80d7450ec79bc0->leave($__internal_9fbd213be587168c54ad958f4b71abcddd78369b2a0a5bd3da80d7450ec79bc0_prof);

        
        $__internal_6bd8217b710101761d11bf2077914f41b60e3d75ad674e7c5e2a53fe29df2733->leave($__internal_6bd8217b710101761d11bf2077914f41b60e3d75ad674e7c5e2a53fe29df2733_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
