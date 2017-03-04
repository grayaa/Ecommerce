<?php

/* EcommerceBundle:Default:produits/layout/produit.html.twig */
class __TwigTemplate_c3d7c147f2aac996ed2762203644ccbd65446f7e73664b8458877cb684370f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produits/layout/produit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagedescription' => array($this, 'block_pagedescription'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1666f7362f5fe8878d3f811aa53190a350ad3771f25c67881202b3d66865dc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1666f7362f5fe8878d3f811aa53190a350ad3771f25c67881202b3d66865dc13->enter($__internal_1666f7362f5fe8878d3f811aa53190a350ad3771f25c67881202b3d66865dc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produit.html.twig"));

        $__internal_ee0fabb9cfebd24f6fc0107cbc3bbcdeac53f0f67678264a5ac40a9635753796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0fabb9cfebd24f6fc0107cbc3bbcdeac53f0f67678264a5ac40a9635753796->enter($__internal_ee0fabb9cfebd24f6fc0107cbc3bbcdeac53f0f67678264a5ac40a9635753796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1666f7362f5fe8878d3f811aa53190a350ad3771f25c67881202b3d66865dc13->leave($__internal_1666f7362f5fe8878d3f811aa53190a350ad3771f25c67881202b3d66865dc13_prof);

        
        $__internal_ee0fabb9cfebd24f6fc0107cbc3bbcdeac53f0f67678264a5ac40a9635753796->leave($__internal_ee0fabb9cfebd24f6fc0107cbc3bbcdeac53f0f67678264a5ac40a9635753796_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f79bae51983dd3af353bd657232f58f7692ee10821b349c66e7936061545719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f79bae51983dd3af353bd657232f58f7692ee10821b349c66e7936061545719->enter($__internal_5f79bae51983dd3af353bd657232f58f7692ee10821b349c66e7936061545719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44d49ca09ff22cb4c995ff5cb3d1faadee9f654e055eaad841bbbb6331ca66e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d49ca09ff22cb4c995ff5cb3d1faadee9f654e055eaad841bbbb6331ca66e2->enter($__internal_44d49ca09ff22cb4c995ff5cb3d1faadee9f654e055eaad841bbbb6331ca66e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "
";
        
        $__internal_44d49ca09ff22cb4c995ff5cb3d1faadee9f654e055eaad841bbbb6331ca66e2->leave($__internal_44d49ca09ff22cb4c995ff5cb3d1faadee9f654e055eaad841bbbb6331ca66e2_prof);

        
        $__internal_5f79bae51983dd3af353bd657232f58f7692ee10821b349c66e7936061545719->leave($__internal_5f79bae51983dd3af353bd657232f58f7692ee10821b349c66e7936061545719_prof);

    }

    // line 7
    public function block_pagedescription($context, array $blocks = array())
    {
        $__internal_cc72c2beddcc6ce1dc89a66d2a25bc28ab28b8c0d860e8876306ddc2e55f514d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc72c2beddcc6ce1dc89a66d2a25bc28ab28b8c0d860e8876306ddc2e55f514d->enter($__internal_cc72c2beddcc6ce1dc89a66d2a25bc28ab28b8c0d860e8876306ddc2e55f514d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagedescription"));

        $__internal_434c019bea51925b77f1a0b00f94fdb979a50817f8c37351df0402f913647c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434c019bea51925b77f1a0b00f94fdb979a50817f8c37351df0402f913647c14->enter($__internal_434c019bea51925b77f1a0b00f94fdb979a50817f8c37351df0402f913647c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagedescription"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "
";
        
        $__internal_434c019bea51925b77f1a0b00f94fdb979a50817f8c37351df0402f913647c14->leave($__internal_434c019bea51925b77f1a0b00f94fdb979a50817f8c37351df0402f913647c14_prof);

        
        $__internal_cc72c2beddcc6ce1dc89a66d2a25bc28ab28b8c0d860e8876306ddc2e55f514d->leave($__internal_cc72c2beddcc6ce1dc89a66d2a25bc28ab28b8c0d860e8876306ddc2e55f514d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2837f14d8c929b2f133825a463b1a7499d4a040bd970abe93336b310d557cf69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2837f14d8c929b2f133825a463b1a7499d4a040bd970abe93336b310d557cf69->enter($__internal_2837f14d8c929b2f133825a463b1a7499d4a040bd970abe93336b310d557cf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ebeb7f498ac3a1fd88bd7dcff7e64ded13bc3427fd18efb5c5eadd0fe0ced8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebeb7f498ac3a1fd88bd7dcff7e64ded13bc3427fd18efb5c5eadd0fe0ced8d->enter($__internal_1ebeb7f498ac3a1fd88bd7dcff7e64ded13bc3427fd18efb5c5eadd0fe0ced8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 14
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produit.html.twig", 14)->display($context);
        // line 15
        echo "
            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "alt", array()), "html", null, true);
        echo "\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                        <h4>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo " £</h4>
                        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
        echo "\" method=\"get\">

                            <select name=\"qte\" class=\"span1\">
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_1ebeb7f498ac3a1fd88bd7dcff7e64ded13bc3427fd18efb5c5eadd0fe0ced8d->leave($__internal_1ebeb7f498ac3a1fd88bd7dcff7e64ded13bc3427fd18efb5c5eadd0fe0ced8d_prof);

        
        $__internal_2837f14d8c929b2f133825a463b1a7499d4a040bd970abe93336b310d557cf69->leave($__internal_2837f14d8c929b2f133825a463b1a7499d4a040bd970abe93336b310d557cf69_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 32,  138 => 30,  134 => 29,  128 => 26,  124 => 25,  120 => 24,  116 => 23,  107 => 19,  101 => 15,  99 => 14,  95 => 12,  86 => 11,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

{% block title %}
    {{ produit.nom }}
{% endblock %}

{% block pagedescription %}
    {{ produit.description }}
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {% include '::modulesUsed/navigation.html.twig' %}

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"{{ produit.image.path }}\" alt=\"{{ produit.image.alt }}\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>{{ produit.nom }}</h4>
                        <p>{{ produit.description }}</p>
                        <h4>{{ produit.prix|tva(produit.tva.multiplicate) }} £</h4>
                        <form action=\"{{ path('ajouter',{'id': produit.id}) }}\" method=\"get\">

                            <select name=\"qte\" class=\"span1\">
                                {% for i in 1..10 %}
                                    <option value=\"{{ i }}\">{{ i }}</option>
                                {% endfor %}
                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}", "EcommerceBundle:Default:produits/layout/produit.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/produit.html.twig");
    }
}
