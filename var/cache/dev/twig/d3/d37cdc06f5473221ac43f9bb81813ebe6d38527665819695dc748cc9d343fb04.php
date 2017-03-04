<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_9e9e515859d350657e0681d9080dad9d93f25451252f20e5d66128d0d4dde35b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_f9a745079a7aba654e72fd973ea9742e5e958cae2635b8d44c6d70d82a28fc5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a745079a7aba654e72fd973ea9742e5e958cae2635b8d44c6d70d82a28fc5a->enter($__internal_f9a745079a7aba654e72fd973ea9742e5e958cae2635b8d44c6d70d82a28fc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $__internal_da98900514a2a740827ceecde5e62a3211be3a98b7a5da2dfe1450bf4a904e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da98900514a2a740827ceecde5e62a3211be3a98b7a5da2dfe1450bf4a904e05->enter($__internal_da98900514a2a740827ceecde5e62a3211be3a98b7a5da2dfe1450bf4a904e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a745079a7aba654e72fd973ea9742e5e958cae2635b8d44c6d70d82a28fc5a->leave($__internal_f9a745079a7aba654e72fd973ea9742e5e958cae2635b8d44c6d70d82a28fc5a_prof);

        
        $__internal_da98900514a2a740827ceecde5e62a3211be3a98b7a5da2dfe1450bf4a904e05->leave($__internal_da98900514a2a740827ceecde5e62a3211be3a98b7a5da2dfe1450bf4a904e05_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_095d80ea2f94e1ca29a3216dc794b9deb4263c997291960deb02b8b2c1561c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095d80ea2f94e1ca29a3216dc794b9deb4263c997291960deb02b8b2c1561c7b->enter($__internal_095d80ea2f94e1ca29a3216dc794b9deb4263c997291960deb02b8b2c1561c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c39909e70798bb4627bffcf49506811516bcd898e300fa8677f1caa87c4e36e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39909e70798bb4627bffcf49506811516bcd898e300fa8677f1caa87c4e36e2->enter($__internal_c39909e70798bb4627bffcf49506811516bcd898e300fa8677f1caa87c4e36e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 9)->display($context);
        // line 10
        echo "
            <div class=\"span9\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "                    <div class=\"alert-success alert\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
                <h2>Votre parnier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 31
            echo "                                <tr>
                                     <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <form name=\"form";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\" >
                                            <select name=\"qte\" class=\"span1\" onchange=\"this.form.submit()\">
                                                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array") == $context["i"])) {
                    echo " selected=\"selected\" ";
                }
                echo ">
                                                        ";
                // line 38
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                                                    </option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                            </select>&nbsp;
                                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                            </form>
                                        </td>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>

                                </tr>

                                ";
            // line 50
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 51
            echo "                                ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())));
            // line 52
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt><dd>";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo " €</dd>

                    <dt>TVA :</dt><dd>";
        // line 61
        echo twig_escape_filter($this->env, ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) - (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT"))), "html", null, true);
        echo " €</dd>

                    <dt>Total:</dt><dd>";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
        echo " €</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
";
        
        $__internal_c39909e70798bb4627bffcf49506811516bcd898e300fa8677f1caa87c4e36e2->leave($__internal_c39909e70798bb4627bffcf49506811516bcd898e300fa8677f1caa87c4e36e2_prof);

        
        $__internal_095d80ea2f94e1ca29a3216dc794b9deb4263c997291960deb02b8b2c1561c7b->leave($__internal_095d80ea2f94e1ca29a3216dc794b9deb4263c997291960deb02b8b2c1561c7b_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 67,  191 => 66,  185 => 63,  180 => 61,  175 => 59,  168 => 54,  161 => 52,  158 => 51,  156 => 50,  149 => 46,  145 => 45,  139 => 42,  136 => 41,  127 => 38,  118 => 37,  114 => 36,  107 => 34,  102 => 32,  99 => 31,  95 => 30,  80 => 17,  71 => 14,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  54 => 7,  45 => 6,  35 => 1,  33 => 4,  31 => 3,  11 => 1,);
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

{% set totalHT = 0 %}
{% set totalTTC = 0 %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {% include '::modulesUsed/navigation.html.twig' %}

            <div class=\"span9\">
                {% for flashMessage in app.session.flashBag.get('success') %}
                    <div class=\"alert-success alert\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}

                <h2>Votre parnier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for produit in produits %}
                                <tr>
                                     <td>{{ produit.nom }}</td>
                                        <td>
                                            <form name=\"form{{ produit.id }}\" action=\"{{ path('ajouter',{'id': produit.id}) }}\" method=\"get\" >
                                            <select name=\"qte\" class=\"span1\" onchange=\"this.form.submit()\">
                                                {% for i in 1..10 %}
                                                    <option value=\"{{ i }}\" {% if panier[produit.id] == i %} selected=\"selected\" {% endif %}>
                                                        {{ i }}
                                                    </option>
                                                {% endfor %}
                                            </select>&nbsp;
                                            <a href=\"{{ path('supprimer', {'id': produit.id}) }}\"><i class=\"icon-trash\"></i></a>
                                            </form>
                                        </td>
                                        <td>{{ produit.prix }} €</td>
                                        <td>{{ produit.prix * panier[produit.id] }} €</td>

                                </tr>

                                {% set totalHT = totalHT + ( produit.prix * panier[produit.id] ) %}
                                {% set totalTTC = totalTTC + ( produit.prix * panier[produit.id] ) | tva(produit.tva.multiplicate) %}

                            {% endfor %}
                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>

                    <dt>TVA :</dt><dd>{{ totalTTC - totalHT }} €</dd>

                    <dt>Total:</dt><dd>{{ totalTTC }} €</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"{{ path('livraison') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"{{ path('validation') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
{% endblock %}", "EcommerceBundle:Default:panier/layout/panier.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}
