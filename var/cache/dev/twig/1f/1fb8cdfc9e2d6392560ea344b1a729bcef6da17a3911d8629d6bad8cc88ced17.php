<?php

/* PagesBundle:Default/pages/layout:page.html.twig */
class __TwigTemplate_10909a30b565f66b129ade32f101c680ab29c976d40c28a2adcdc976dbb11dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PagesBundle:Default/pages/layout:page.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd704c5d394e1502479c8fdd02614d98dd45ed25e5591dce9fdf71f819d41a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd704c5d394e1502479c8fdd02614d98dd45ed25e5591dce9fdf71f819d41a2d->enter($__internal_dd704c5d394e1502479c8fdd02614d98dd45ed25e5591dce9fdf71f819d41a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/layout:page.html.twig"));

        $__internal_a8ce5b5ccb606b79d103e991e04c9c700cc00c78b33b18c781364abbcd06b8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ce5b5ccb606b79d103e991e04c9c700cc00c78b33b18c781364abbcd06b8a1->enter($__internal_a8ce5b5ccb606b79d103e991e04c9c700cc00c78b33b18c781364abbcd06b8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/layout:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd704c5d394e1502479c8fdd02614d98dd45ed25e5591dce9fdf71f819d41a2d->leave($__internal_dd704c5d394e1502479c8fdd02614d98dd45ed25e5591dce9fdf71f819d41a2d_prof);

        
        $__internal_a8ce5b5ccb606b79d103e991e04c9c700cc00c78b33b18c781364abbcd06b8a1->leave($__internal_a8ce5b5ccb606b79d103e991e04c9c700cc00c78b33b18c781364abbcd06b8a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b72460df01faf11ddf76728e9e28d72f5c5d5b65aaa2ef98383fde840c9cf817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72460df01faf11ddf76728e9e28d72f5c5d5b65aaa2ef98383fde840c9cf817->enter($__internal_b72460df01faf11ddf76728e9e28d72f5c5d5b65aaa2ef98383fde840c9cf817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d99deb362073371263b88654a41243676b4f68ec166c096dbe6c432154df83e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99deb362073371263b88654a41243676b4f68ec166c096dbe6c432154df83e3->enter($__internal_d99deb362073371263b88654a41243676b4f68ec166c096dbe6c432154df83e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span12\">
                <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
                ";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_d99deb362073371263b88654a41243676b4f68ec166c096dbe6c432154df83e3->leave($__internal_d99deb362073371263b88654a41243676b4f68ec166c096dbe6c432154df83e3_prof);

        
        $__internal_b72460df01faf11ddf76728e9e28d72f5c5d5b65aaa2ef98383fde840c9cf817->leave($__internal_b72460df01faf11ddf76728e9e28d72f5c5d5b65aaa2ef98383fde840c9cf817_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/pages/layout:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
                <h1>{{ page.titre }}</h1>
                {{ page.contenu | raw }}
            </div>
        </div>
    </div>
{% endblock %}", "PagesBundle:Default/pages/layout:page.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Pages\\PagesBundle/Resources/views/Default/pages/layout/page.html.twig");
    }
}
