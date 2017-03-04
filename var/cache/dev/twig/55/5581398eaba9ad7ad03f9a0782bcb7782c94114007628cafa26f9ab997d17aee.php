<?php

/* EcommerceBundle:Default:produits/layout/produit.html.twig */
class __TwigTemplate_057e2176859d972893e5b4d05faa0f54e61e28ea88e1acfdd5868e49b72883ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produits/layout/produit.html.twig", 1);
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
        $__internal_cb515eabd76c1e064a663579bb1a5e83e4148de9e4fcdef2a74afdbb1bd89c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb515eabd76c1e064a663579bb1a5e83e4148de9e4fcdef2a74afdbb1bd89c5b->enter($__internal_cb515eabd76c1e064a663579bb1a5e83e4148de9e4fcdef2a74afdbb1bd89c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produit.html.twig"));

        $__internal_7f293f8c48ba30932f357474d9eb0844ffca1c1a1df36988bdd2b2b68a39eef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f293f8c48ba30932f357474d9eb0844ffca1c1a1df36988bdd2b2b68a39eef4->enter($__internal_7f293f8c48ba30932f357474d9eb0844ffca1c1a1df36988bdd2b2b68a39eef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb515eabd76c1e064a663579bb1a5e83e4148de9e4fcdef2a74afdbb1bd89c5b->leave($__internal_cb515eabd76c1e064a663579bb1a5e83e4148de9e4fcdef2a74afdbb1bd89c5b_prof);

        
        $__internal_7f293f8c48ba30932f357474d9eb0844ffca1c1a1df36988bdd2b2b68a39eef4->leave($__internal_7f293f8c48ba30932f357474d9eb0844ffca1c1a1df36988bdd2b2b68a39eef4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5be4cab71022dde88ddf63825ebc57a7bfa3a9d732afc043ee90ccda670b9924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be4cab71022dde88ddf63825ebc57a7bfa3a9d732afc043ee90ccda670b9924->enter($__internal_5be4cab71022dde88ddf63825ebc57a7bfa3a9d732afc043ee90ccda670b9924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2549d6f109723c4db379d4fcffd8b370b736aeac64f06181317f61ad6ac0dbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2549d6f109723c4db379d4fcffd8b370b736aeac64f06181317f61ad6ac0dbe5->enter($__internal_2549d6f109723c4db379d4fcffd8b370b736aeac64f06181317f61ad6ac0dbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produit.html.twig", 6)->display($context);
        // line 7
        echo "
            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "alt", array()), "html", null, true);
        echo "\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                        <h4>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo "</h4>
                        <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">

                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
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
";
        
        $__internal_2549d6f109723c4db379d4fcffd8b370b736aeac64f06181317f61ad6ac0dbe5->leave($__internal_2549d6f109723c4db379d4fcffd8b370b736aeac64f06181317f61ad6ac0dbe5_prof);

        
        $__internal_5be4cab71022dde88ddf63825ebc57a7bfa3a9d732afc043ee90ccda670b9924->leave($__internal_5be4cab71022dde88ddf63825ebc57a7bfa3a9d732afc043ee90ccda670b9924_prof);

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
        return array (  82 => 18,  78 => 17,  74 => 16,  70 => 15,  61 => 11,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            {% include '::modulesUsed/navigation.html.twig' %}

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"{{ produit.image.path }}\" alt=\"{{ produit.image.alt }}\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>{{ produit.nom }}</h4>
                        <p>{{ produit.description }}</p>
                        <h4>{{ produit.prix }}</h4>
                        <form action=\"{{ path('panier') }}\">

                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
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
