<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ce6415ae659bbabec29cf6536b61a75696cb83aa05db74f11d46a63ea54b779d extends Twig_Template
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
        $__internal_822355052dd37ea476309c2b96b4df2c45913b30e94db1af739ba46f6a2a5b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822355052dd37ea476309c2b96b4df2c45913b30e94db1af739ba46f6a2a5b34->enter($__internal_822355052dd37ea476309c2b96b4df2c45913b30e94db1af739ba46f6a2a5b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_36d3bfadd884b4d703ed18e4118be36c025fa130d7cc5a631f7eb3a430d9cea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d3bfadd884b4d703ed18e4118be36c025fa130d7cc5a631f7eb3a430d9cea7->enter($__internal_36d3bfadd884b4d703ed18e4118be36c025fa130d7cc5a631f7eb3a430d9cea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822355052dd37ea476309c2b96b4df2c45913b30e94db1af739ba46f6a2a5b34->leave($__internal_822355052dd37ea476309c2b96b4df2c45913b30e94db1af739ba46f6a2a5b34_prof);

        
        $__internal_36d3bfadd884b4d703ed18e4118be36c025fa130d7cc5a631f7eb3a430d9cea7->leave($__internal_36d3bfadd884b4d703ed18e4118be36c025fa130d7cc5a631f7eb3a430d9cea7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14d8b0ee03f1541caa11fedbfd3a033d01a90e9797d16f7246d68a4acd5beb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d8b0ee03f1541caa11fedbfd3a033d01a90e9797d16f7246d68a4acd5beb13->enter($__internal_14d8b0ee03f1541caa11fedbfd3a033d01a90e9797d16f7246d68a4acd5beb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbbe60e47fb09b3670d3986045f84d55227648e5e1ac9d7f2247382cd0a3f181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbe60e47fb09b3670d3986045f84d55227648e5e1ac9d7f2247382cd0a3f181->enter($__internal_fbbe60e47fb09b3670d3986045f84d55227648e5e1ac9d7f2247382cd0a3f181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fbbe60e47fb09b3670d3986045f84d55227648e5e1ac9d7f2247382cd0a3f181->leave($__internal_fbbe60e47fb09b3670d3986045f84d55227648e5e1ac9d7f2247382cd0a3f181_prof);

        
        $__internal_14d8b0ee03f1541caa11fedbfd3a033d01a90e9797d16f7246d68a4acd5beb13->leave($__internal_14d8b0ee03f1541caa11fedbfd3a033d01a90e9797d16f7246d68a4acd5beb13_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59648d529ade59498f16c75d0120d3d283a6694190bc9ac9cbc68e74e0c886c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59648d529ade59498f16c75d0120d3d283a6694190bc9ac9cbc68e74e0c886c5->enter($__internal_59648d529ade59498f16c75d0120d3d283a6694190bc9ac9cbc68e74e0c886c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4ddd6102ecaa7083f8ed0e4e99741446b5f9e3e2366db0ae28d6aca888eb11fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddd6102ecaa7083f8ed0e4e99741446b5f9e3e2366db0ae28d6aca888eb11fb->enter($__internal_4ddd6102ecaa7083f8ed0e4e99741446b5f9e3e2366db0ae28d6aca888eb11fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "                    ";
        
        $__internal_4ddd6102ecaa7083f8ed0e4e99741446b5f9e3e2366db0ae28d6aca888eb11fb->leave($__internal_4ddd6102ecaa7083f8ed0e4e99741446b5f9e3e2366db0ae28d6aca888eb11fb_prof);

        
        $__internal_59648d529ade59498f16c75d0120d3d283a6694190bc9ac9cbc68e74e0c886c5->leave($__internal_59648d529ade59498f16c75d0120d3d283a6694190bc9ac9cbc68e74e0c886c5_prof);

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
