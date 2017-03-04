<?php

/* EcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_df28a2e3552344b4c18a71cac079b7ef73edd5df2b387e44f6882d89efb3a525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:panier/layout/livraison.html.twig", 1);
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
        $__internal_2710e1e8b28d88ee4e8ca1dd30c5048a7506bd845e9c571d3006791ea687dd22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2710e1e8b28d88ee4e8ca1dd30c5048a7506bd845e9c571d3006791ea687dd22->enter($__internal_2710e1e8b28d88ee4e8ca1dd30c5048a7506bd845e9c571d3006791ea687dd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/livraison.html.twig"));

        $__internal_ef4bd2f719f5d619af94c18c84ddd8d1717c60b816d06ab6ce9cb0046e0ac7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4bd2f719f5d619af94c18c84ddd8d1717c60b816d06ab6ce9cb0046e0ac7e7->enter($__internal_ef4bd2f719f5d619af94c18c84ddd8d1717c60b816d06ab6ce9cb0046e0ac7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2710e1e8b28d88ee4e8ca1dd30c5048a7506bd845e9c571d3006791ea687dd22->leave($__internal_2710e1e8b28d88ee4e8ca1dd30c5048a7506bd845e9c571d3006791ea687dd22_prof);

        
        $__internal_ef4bd2f719f5d619af94c18c84ddd8d1717c60b816d06ab6ce9cb0046e0ac7e7->leave($__internal_ef4bd2f719f5d619af94c18c84ddd8d1717c60b816d06ab6ce9cb0046e0ac7e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52777e741e31af10eb2cb32a42d35e0bb2be1076bdd3fffd816f5bd1d25c9bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52777e741e31af10eb2cb32a42d35e0bb2be1076bdd3fffd816f5bd1d25c9bfd->enter($__internal_52777e741e31af10eb2cb32a42d35e0bb2be1076bdd3fffd816f5bd1d25c9bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2726bd41c117de6c728eef02ea8fbf148a26ce5a6b97b33071723621d0156ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2726bd41c117de6c728eef02ea8fbf148a26ce5a6b97b33071723621d0156ff7->enter($__internal_2726bd41c117de6c728eef02ea8fbf148a26ce5a6b97b33071723621d0156ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <h2>Livraison</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner\">
                        <div class=\"span4\">
                            <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
        echo "\">
                                <h4>Adresse de livraison</h4>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>

                                <br /><br />

                                <h4>Adresse de facturation</h4>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                            </form>
                        </div>


                        <div class=\"span4 offset2\">
                            <h4>Ajouter une nouvelle adresse</h4>
                            <form>
                                <label>Nom</label>
                                <input type=\"text\">

                                <label>Prénom</label>
                                <input type=\"text\">

                                <label>Adresse</label>
                                <input type=\"text\">

                                <label>Ville</label>
                                <input type=\"text\">

                                <label>Code postal</label>
                                <input type=\"text\">

                                <label>Ville</label>
                                <input type=\"text\">

                                <label>Téléphone</label>
                                <input type=\"text\">

                                <br />
                                <button class=\"btn btn-primary\">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_2726bd41c117de6c728eef02ea8fbf148a26ce5a6b97b33071723621d0156ff7->leave($__internal_2726bd41c117de6c728eef02ea8fbf148a26ce5a6b97b33071723621d0156ff7_prof);

        
        $__internal_52777e741e31af10eb2cb32a42d35e0bb2be1076bdd3fffd816f5bd1d25c9bfd->leave($__internal_52777e741e31af10eb2cb32a42d35e0bb2be1076bdd3fffd816f5bd1d25c9bfd_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                <h2>Livraison</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner\">
                        <div class=\"span4\">
                            <form action=\"{{ path('validation') }}\">
                                <h4>Adresse de livraison</h4>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>

                                <br /><br />

                                <h4>Adresse de facturation</h4>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                            </form>
                        </div>


                        <div class=\"span4 offset2\">
                            <h4>Ajouter une nouvelle adresse</h4>
                            <form>
                                <label>Nom</label>
                                <input type=\"text\">

                                <label>Prénom</label>
                                <input type=\"text\">

                                <label>Adresse</label>
                                <input type=\"text\">

                                <label>Ville</label>
                                <input type=\"text\">

                                <label>Code postal</label>
                                <input type=\"text\">

                                <label>Ville</label>
                                <input type=\"text\">

                                <label>Téléphone</label>
                                <input type=\"text\">

                                <br />
                                <button class=\"btn btn-primary\">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "EcommerceBundle:Default:panier/layout/livraison.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/livraison.html.twig");
    }
}
