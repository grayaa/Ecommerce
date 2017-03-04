<?php

/* EcommerceBundle:Default:produits/layout/liste_produits.html.twig */
class __TwigTemplate_d5f1a659f2096f4bf1caec03f6adcb58c6f4863abba25b44f44c2b24285fc9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produits/layout/liste_produits.html.twig", 1);
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
        $__internal_10c2c65d0b3f91dc23461504ce6b4a5f1fa218846b1fc9244411a8711827bba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c2c65d0b3f91dc23461504ce6b4a5f1fa218846b1fc9244411a8711827bba3->enter($__internal_10c2c65d0b3f91dc23461504ce6b4a5f1fa218846b1fc9244411a8711827bba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/liste_produits.html.twig"));

        $__internal_8765415589a1862c4755027ac4c1cdf9165b2a1c70f52853561f51d57c5224d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8765415589a1862c4755027ac4c1cdf9165b2a1c70f52853561f51d57c5224d4->enter($__internal_8765415589a1862c4755027ac4c1cdf9165b2a1c70f52853561f51d57c5224d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/liste_produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10c2c65d0b3f91dc23461504ce6b4a5f1fa218846b1fc9244411a8711827bba3->leave($__internal_10c2c65d0b3f91dc23461504ce6b4a5f1fa218846b1fc9244411a8711827bba3_prof);

        
        $__internal_8765415589a1862c4755027ac4c1cdf9165b2a1c70f52853561f51d57c5224d4->leave($__internal_8765415589a1862c4755027ac4c1cdf9165b2a1c70f52853561f51d57c5224d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a63938f65c40e33ec8cf8e22ee52a211bd8e4efeb044036907410041f73869e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63938f65c40e33ec8cf8e22ee52a211bd8e4efeb044036907410041f73869e8->enter($__internal_a63938f65c40e33ec8cf8e22ee52a211bd8e4efeb044036907410041f73869e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38abcf7f21521be9512bbd662f95fe49631758ab70cb3688dc9b7925aff4295c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38abcf7f21521be9512bbd662f95fe49631758ab70cb3688dc9b7925aff4295c->enter($__internal_38abcf7f21521be9512bbd662f95fe49631758ab70cb3688dc9b7925aff4295c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/liste_produits.html.twig", 6)->display($context);
        // line 7
        echo "
            <div class=\"span9\">
                ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 10
            echo "
                    <ul class=\"thumbnails\">
                        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 13
                echo "                            <li class=\"span3\">
                                <div class=\"thumbnail\">
                                    <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
                echo "\" width=\"300\" height=\"300\">
                                    <div class=\"caption\">
                                        <h4>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                                        <p>";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " £</p>
                                        <a class=\"btn btn-primary\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                        <a class=\"btn btn-success\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Ajouter</a>
                                    </div>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    </ul>

                    <div class=\"pagination\">
                        <ul>
                            <li class=\"disabled\"><span>Précédent</span></li>
                            <li class=\"disabled\"><span>1</span></li>
                            <li><a href=\"#\">2</a></li>
                            <li><a href=\"#\">3</a></li>
                            <li><a href=\"#\">4</a></li>
                            <li><a href=\"#\">5</a></li>
                            <li><a href=\"#\">Suivant</a></li>
                        </ul>
                    </div>

                ";
        } else {
            // line 40
            echo "                        <b>Aucun Produit !</b>
                ";
        }
        // line 42
        echo "
            </div>

        </div>
    </div>
";
        
        $__internal_38abcf7f21521be9512bbd662f95fe49631758ab70cb3688dc9b7925aff4295c->leave($__internal_38abcf7f21521be9512bbd662f95fe49631758ab70cb3688dc9b7925aff4295c_prof);

        
        $__internal_a63938f65c40e33ec8cf8e22ee52a211bd8e4efeb044036907410041f73869e8->leave($__internal_a63938f65c40e33ec8cf8e22ee52a211bd8e4efeb044036907410041f73869e8_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/liste_produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  120 => 40,  103 => 25,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  73 => 15,  69 => 13,  65 => 12,  61 => 10,  59 => 9,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                {% if produits|length != 0 %}

                    <ul class=\"thumbnails\">
                        {% for produit in produits %}
                            <li class=\"span3\">
                                <div class=\"thumbnail\">
                                    <img src=\"{{ produit.image.path }}\" alt=\"{{ produit.image.path }}\" width=\"300\" height=\"300\">
                                    <div class=\"caption\">
                                        <h4>{{ produit.nom }}</h4>
                                        <p>{{ produit.prix|tva(produit.tva.multiplicate) }} £</p>
                                        <a class=\"btn btn-primary\" href=\"{{ path('produit', {'id' : produit.id}) }}\">Plus d'infos</a>
                                        <a class=\"btn btn-success\" href=\"{{ path('ajouter', {'id': produit.id}) }}\">Ajouter</a>
                                    </div>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>

                    <div class=\"pagination\">
                        <ul>
                            <li class=\"disabled\"><span>Précédent</span></li>
                            <li class=\"disabled\"><span>1</span></li>
                            <li><a href=\"#\">2</a></li>
                            <li><a href=\"#\">3</a></li>
                            <li><a href=\"#\">4</a></li>
                            <li><a href=\"#\">5</a></li>
                            <li><a href=\"#\">Suivant</a></li>
                        </ul>
                    </div>

                {% else %}
                        <b>Aucun Produit !</b>
                {% endif %}

            </div>

        </div>
    </div>
{% endblock %}", "EcommerceBundle:Default:produits/layout/liste_produits.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/liste_produits.html.twig");
    }
}
