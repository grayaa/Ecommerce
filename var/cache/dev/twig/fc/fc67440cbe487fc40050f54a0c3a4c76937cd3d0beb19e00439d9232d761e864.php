<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_23bab9aa832739ce8858395d39c2cbe0e628361a25b317bb5d80f4072b06c347 extends Twig_Template
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
        $__internal_29a066c07610ddb75ef6bc86e4f4f573aa438459f96e2c1a1cab474044c2ebe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a066c07610ddb75ef6bc86e4f4f573aa438459f96e2c1a1cab474044c2ebe4->enter($__internal_29a066c07610ddb75ef6bc86e4f4f573aa438459f96e2c1a1cab474044c2ebe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $__internal_5400936649bbaee2479f77dd217fa8326b5b34c5334ac16679efdb53d0af9a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5400936649bbaee2479f77dd217fa8326b5b34c5334ac16679efdb53d0af9a49->enter($__internal_5400936649bbaee2479f77dd217fa8326b5b34c5334ac16679efdb53d0af9a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a066c07610ddb75ef6bc86e4f4f573aa438459f96e2c1a1cab474044c2ebe4->leave($__internal_29a066c07610ddb75ef6bc86e4f4f573aa438459f96e2c1a1cab474044c2ebe4_prof);

        
        $__internal_5400936649bbaee2479f77dd217fa8326b5b34c5334ac16679efdb53d0af9a49->leave($__internal_5400936649bbaee2479f77dd217fa8326b5b34c5334ac16679efdb53d0af9a49_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_87245e5bec3bdcbe1fbe07b726230ecd8fcaf22788edfa87d1af2ed5a0078b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87245e5bec3bdcbe1fbe07b726230ecd8fcaf22788edfa87d1af2ed5a0078b1e->enter($__internal_87245e5bec3bdcbe1fbe07b726230ecd8fcaf22788edfa87d1af2ed5a0078b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d732b26f04dcdcd5a3676824b69bad28be68c2e4491fa14605a44b18ce50b2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d732b26f04dcdcd5a3676824b69bad28be68c2e4491fa14605a44b18ce50b2af->enter($__internal_d732b26f04dcdcd5a3676824b69bad28be68c2e4491fa14605a44b18ce50b2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 9)->display($context);
        // line 10
        echo "
            <div class=\"span9\">
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 25
            echo "                                <tr>
                                     <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <form name=\"form";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\" >
                                            <select name=\"qte\" class=\"span1\" onchange=\"this.form.submit()\">
                                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 31
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array") == $context["i"])) {
                    echo " selected=\"selected\" ";
                }
                echo ">
                                                        ";
                // line 32
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                                                    </option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                                            </select>&nbsp;
                                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                            </form>
                                        </td>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>

                                </tr>

                                ";
            // line 44
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 45
            echo "                                ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())));
            // line 46
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt><dd>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo " €</dd>

                    <dt>TVA :</dt><dd>";
        // line 55
        echo twig_escape_filter($this->env, ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) - (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT"))), "html", null, true);
        echo " €</dd>

                    <dt>Total:</dt><dd>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
        echo " €</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
";
        
        $__internal_d732b26f04dcdcd5a3676824b69bad28be68c2e4491fa14605a44b18ce50b2af->leave($__internal_d732b26f04dcdcd5a3676824b69bad28be68c2e4491fa14605a44b18ce50b2af_prof);

        
        $__internal_87245e5bec3bdcbe1fbe07b726230ecd8fcaf22788edfa87d1af2ed5a0078b1e->leave($__internal_87245e5bec3bdcbe1fbe07b726230ecd8fcaf22788edfa87d1af2ed5a0078b1e_prof);

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
        return array (  176 => 61,  172 => 60,  166 => 57,  161 => 55,  156 => 53,  149 => 48,  142 => 46,  139 => 45,  137 => 44,  130 => 40,  126 => 39,  120 => 36,  117 => 35,  108 => 32,  99 => 31,  95 => 30,  88 => 28,  83 => 26,  80 => 25,  76 => 24,  60 => 10,  58 => 9,  54 => 7,  45 => 6,  35 => 1,  33 => 4,  31 => 3,  11 => 1,);
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
