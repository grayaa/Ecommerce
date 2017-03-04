<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_8fafade36d6c4d10761589c3cb06840a7edd74370a9bbb54a1c3c72dd026abd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
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
        $__internal_778504829738878d5bed4ae7852a0cfb9ea491d57950563b74f6c6b30683b69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778504829738878d5bed4ae7852a0cfb9ea491d57950563b74f6c6b30683b69f->enter($__internal_778504829738878d5bed4ae7852a0cfb9ea491d57950563b74f6c6b30683b69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $__internal_3ba32af8035da2de9f8651a315fa74f5e5c70b69ed58332ed28bbcf8e5eaebf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba32af8035da2de9f8651a315fa74f5e5c70b69ed58332ed28bbcf8e5eaebf6->enter($__internal_3ba32af8035da2de9f8651a315fa74f5e5c70b69ed58332ed28bbcf8e5eaebf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778504829738878d5bed4ae7852a0cfb9ea491d57950563b74f6c6b30683b69f->leave($__internal_778504829738878d5bed4ae7852a0cfb9ea491d57950563b74f6c6b30683b69f_prof);

        
        $__internal_3ba32af8035da2de9f8651a315fa74f5e5c70b69ed58332ed28bbcf8e5eaebf6->leave($__internal_3ba32af8035da2de9f8651a315fa74f5e5c70b69ed58332ed28bbcf8e5eaebf6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed6c0b80675d08459885b6819eab7608c574b39db04b6e5a4e3622cf117eddda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6c0b80675d08459885b6819eab7608c574b39db04b6e5a4e3622cf117eddda->enter($__internal_ed6c0b80675d08459885b6819eab7608c574b39db04b6e5a4e3622cf117eddda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94ec56179d85a9c701a3daafd189be1821928f5652b6efc6cddc0ca8e37da7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ec56179d85a9c701a3daafd189be1821928f5652b6efc6cddc0ca8e37da7e5->enter($__internal_94ec56179d85a9c701a3daafd189be1821928f5652b6efc6cddc0ca8e37da7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 6)->display($context);
        // line 7
        echo "
            <div class=\"span9\">

                <ul class=\"thumbnails\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 12
            echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" width=\"300\" height=\"300\">
                                <div class=\"caption\">
                                    <h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</h4>
                                    <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</p>
                                    <a class=\"btn btn-primary\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                    <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
                                </div>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </ul>

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

            </div>

        </div>
    </div>
";
        
        $__internal_94ec56179d85a9c701a3daafd189be1821928f5652b6efc6cddc0ca8e37da7e5->leave($__internal_94ec56179d85a9c701a3daafd189be1821928f5652b6efc6cddc0ca8e37da7e5_prof);

        
        $__internal_ed6c0b80675d08459885b6819eab7608c574b39db04b6e5a4e3622cf117eddda->leave($__internal_ed6c0b80675d08459885b6819eab7608c574b39db04b6e5a4e3622cf117eddda_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  84 => 18,  80 => 17,  76 => 16,  69 => 14,  65 => 12,  61 => 11,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

                <ul class=\"thumbnails\">
                    {% for produit in produits %}
                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"{{ produit.image.path }}\" alt=\"{{ produit.image.path }}\" width=\"300\" height=\"300\">
                                <div class=\"caption\">
                                    <h4>{{ produit.nom }}</h4>
                                    <p>{{ produit.prix }}</p>
                                    <a class=\"btn btn-primary\" href=\"{{ path('produit', {'id' : produit.id}) }}\">Plus d'infos</a>
                                    <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
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

            </div>

        </div>
    </div>
{% endblock %}", "EcommerceBundle:Default:produits/layout/presentation.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/presentation.html.twig");
    }
}
