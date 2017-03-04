<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d2345e8b582c0e70a6853f0dddd64aeccda2bf659c66ac47c437ba0ea3f4c1d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_982d325c7f09bd4f36fc805499b219f790909dd154717a08113b268730cd9dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982d325c7f09bd4f36fc805499b219f790909dd154717a08113b268730cd9dc1->enter($__internal_982d325c7f09bd4f36fc805499b219f790909dd154717a08113b268730cd9dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_22d3eb60f5214385909e4dd2ef135dba73245de9ec5309e7b069e9a83520e8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d3eb60f5214385909e4dd2ef135dba73245de9ec5309e7b069e9a83520e8ce->enter($__internal_22d3eb60f5214385909e4dd2ef135dba73245de9ec5309e7b069e9a83520e8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_982d325c7f09bd4f36fc805499b219f790909dd154717a08113b268730cd9dc1->leave($__internal_982d325c7f09bd4f36fc805499b219f790909dd154717a08113b268730cd9dc1_prof);

        
        $__internal_22d3eb60f5214385909e4dd2ef135dba73245de9ec5309e7b069e9a83520e8ce->leave($__internal_22d3eb60f5214385909e4dd2ef135dba73245de9ec5309e7b069e9a83520e8ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e76fbd29c6c60c732ad72f095c37de57bd0be845003e987fa0c3a461d3c7a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e76fbd29c6c60c732ad72f095c37de57bd0be845003e987fa0c3a461d3c7a83->enter($__internal_5e76fbd29c6c60c732ad72f095c37de57bd0be845003e987fa0c3a461d3c7a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f56b206c59b5293de0bc082f49b546b755c14123a5d5ba2f9a14ae487e07191f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56b206c59b5293de0bc082f49b546b755c14123a5d5ba2f9a14ae487e07191f->enter($__internal_f56b206c59b5293de0bc082f49b546b755c14123a5d5ba2f9a14ae487e07191f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <div>
                    ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 14
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 16
        echo "                </div>

                ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                ";
        }
        // line 27
        echo "
                <div>
                    ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f56b206c59b5293de0bc082f49b546b755c14123a5d5ba2f9a14ae487e07191f->leave($__internal_f56b206c59b5293de0bc082f49b546b755c14123a5d5ba2f9a14ae487e07191f_prof);

        
        $__internal_5e76fbd29c6c60c732ad72f095c37de57bd0be845003e987fa0c3a461d3c7a83->leave($__internal_5e76fbd29c6c60c732ad72f095c37de57bd0be845003e987fa0c3a461d3c7a83_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43f4f2e67115ab0f1fc698c744620b3e17538c8b61694314f28159f7220998ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f4f2e67115ab0f1fc698c744620b3e17538c8b61694314f28159f7220998ad->enter($__internal_43f4f2e67115ab0f1fc698c744620b3e17538c8b61694314f28159f7220998ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0cb88ceee7733693704cfe4ca2d901d81122a2a45db6db0d4a8a6c203c946b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb88ceee7733693704cfe4ca2d901d81122a2a45db6db0d4a8a6c203c946b4a->enter($__internal_0cb88ceee7733693704cfe4ca2d901d81122a2a45db6db0d4a8a6c203c946b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "                    ";
        
        $__internal_0cb88ceee7733693704cfe4ca2d901d81122a2a45db6db0d4a8a6c203c946b4a->leave($__internal_0cb88ceee7733693704cfe4ca2d901d81122a2a45db6db0d4a8a6c203c946b4a_prof);

        
        $__internal_43f4f2e67115ab0f1fc698c744620b3e17538c8b61694314f28159f7220998ad->leave($__internal_43f4f2e67115ab0f1fc698c744620b3e17538c8b61694314f28159f7220998ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 30,  140 => 29,  126 => 31,  124 => 29,  120 => 27,  117 => 26,  111 => 25,  102 => 22,  97 => 21,  92 => 20,  87 => 19,  85 => 18,  81 => 16,  73 => 14,  67 => 11,  63 => 10,  58 => 9,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <div>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                        <a href=\"{{ path('fos_user_security_logout') }}\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        </a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                    {% endif %}
                </div>

                {% if app.request.hasPreviousSession %}
                    {% for type, messages in app.session.flashbag.all() %}
                        {% for message in messages %}
                            <div class=\"flash-{{ type }}\">
                                {{ message }}
                            </div>
                        {% endfor %}
                    {% endfor %}
                {% endif %}

                <div>
                    {% block fos_user_content %}
                    {% endblock fos_user_content %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
