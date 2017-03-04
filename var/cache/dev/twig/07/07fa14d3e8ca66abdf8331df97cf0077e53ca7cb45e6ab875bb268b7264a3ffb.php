<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_4641ebb0b1a48846911530c9c2afc439b36a1cddcd50fc7527e2241fc83ea8d1 extends Twig_Template
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
        $__internal_e426db322c2d1292a85a4a2af09e5d513c22c7e28ddc4cc027c2223b032d54cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e426db322c2d1292a85a4a2af09e5d513c22c7e28ddc4cc027c2223b032d54cb->enter($__internal_e426db322c2d1292a85a4a2af09e5d513c22c7e28ddc4cc027c2223b032d54cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_a3299365618636507ae3f933b503ca8a6fd042adf053c2cdfb732957f611a6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3299365618636507ae3f933b503ca8a6fd042adf053c2cdfb732957f611a6f5->enter($__internal_a3299365618636507ae3f933b503ca8a6fd042adf053c2cdfb732957f611a6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "

<h2>Connexion</h2>
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "<div id=\"collapseOne\" class=\"accordion-body collapse in\">
    <div class=\"accordion-inner\">
        <div class=\"span4\">
            <h4>Pas encore inscrit ?</h4>
            <em>
                nous vous invitons à vous inscrire<br/>
                afin de passer votre commande et de manger équilibré.
            </em>
            <br/><br/>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>

        </div>

        <div class=\"span4 offset2\">
            <h4>Connexion</h4>

            <form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                ";
        // line 25
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 26
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
                ";
        }
        // line 28
        echo "                <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                       required=\"required\"/>

                <label for=\"password\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                <br>

                <input class=\"pull-left\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                <br/>
                <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                       value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>

            </form>
        </div>
        <div class=\"span10\">
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Mot de passe perdu ?</a>
        </div>
    </div>
</div>
";
        
        $__internal_e426db322c2d1292a85a4a2af09e5d513c22c7e28ddc4cc027c2223b032d54cb->leave($__internal_e426db322c2d1292a85a4a2af09e5d513c22c7e28ddc4cc027c2223b032d54cb_prof);

        
        $__internal_a3299365618636507ae3f933b503ca8a6fd042adf053c2cdfb732957f611a6f5->leave($__internal_a3299365618636507ae3f933b503ca8a6fd042adf053c2cdfb732957f611a6f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 46,  97 => 41,  90 => 37,  82 => 32,  76 => 29,  71 => 28,  65 => 26,  63 => 25,  59 => 24,  49 => 17,  38 => 8,  32 => 6,  30 => 5,  25 => 2,);
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


<h2>Connexion</h2>
{% if error %}
    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div id=\"collapseOne\" class=\"accordion-body collapse in\">
    <div class=\"accordion-inner\">
        <div class=\"span4\">
            <h4>Pas encore inscrit ?</h4>
            <em>
                nous vous invitons à vous inscrire<br/>
                afin de passer votre commande et de manger équilibré.
            </em>
            <br/><br/>
            <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-primary\">S'inscrire</a>

        </div>

        <div class=\"span4 offset2\">
            <h4>Connexion</h4>

            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                {% endif %}
                <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
                       required=\"required\"/>

                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                <br>

                <input class=\"pull-left\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

                <br/>
                <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                       value=\"{{ 'security.login.submit'|trans }}\"/>

            </form>
        </div>
        <div class=\"span10\">
            <a href=\"{{ path('fos_user_change_password') }}\">Mot de passe perdu ?</a>
        </div>
    </div>
</div>
", "FOSUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
