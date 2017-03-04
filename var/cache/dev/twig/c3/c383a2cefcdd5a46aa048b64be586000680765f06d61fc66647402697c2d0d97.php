<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_1a5531465b02a3411c7a490a70499c3e5896a7dfce9c587304fa2d6bed83ba2f extends Twig_Template
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
        $__internal_d1551ef6d55808afae5ff34ab62228ac13d7935018e88ea499275bd8fafe541f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1551ef6d55808afae5ff34ab62228ac13d7935018e88ea499275bd8fafe541f->enter($__internal_d1551ef6d55808afae5ff34ab62228ac13d7935018e88ea499275bd8fafe541f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $__internal_2eebb66b2536fc85d92b03343d4852c2a49028393a0543c30e08a7d03c44f9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eebb66b2536fc85d92b03343d4852c2a49028393a0543c30e08a7d03c44f9bd->enter($__internal_2eebb66b2536fc85d92b03343d4852c2a49028393a0543c30e08a7d03c44f9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1551ef6d55808afae5ff34ab62228ac13d7935018e88ea499275bd8fafe541f->leave($__internal_d1551ef6d55808afae5ff34ab62228ac13d7935018e88ea499275bd8fafe541f_prof);

        
        $__internal_2eebb66b2536fc85d92b03343d4852c2a49028393a0543c30e08a7d03c44f9bd->leave($__internal_2eebb66b2536fc85d92b03343d4852c2a49028393a0543c30e08a7d03c44f9bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc1d69440f39f6b5292b9b79a201e11eee8de5f0b3da6dec16d0c6e1b62df37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1d69440f39f6b5292b9b79a201e11eee8de5f0b3da6dec16d0c6e1b62df37d->enter($__internal_cc1d69440f39f6b5292b9b79a201e11eee8de5f0b3da6dec16d0c6e1b62df37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7aadd6ef17f83322bf19aa2405e6d7d74d678dacddfedc6353f3223b96629607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aadd6ef17f83322bf19aa2405e6d7d74d678dacddfedc6353f3223b96629607->enter($__internal_7aadd6ef17f83322bf19aa2405e6d7d74d678dacddfedc6353f3223b96629607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 6)->display($context);
        // line 7
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
                        <tr>
                            <td>AB29837</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>333,33€</td>
                        </tr>
                        <tr>
                            <td>AC34423</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>666,66€</td>
                        </tr>
                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>

                    <dt>TVA :</dt>
                    <dd>200€</dd>

                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
";
        
        $__internal_7aadd6ef17f83322bf19aa2405e6d7d74d678dacddfedc6353f3223b96629607->leave($__internal_7aadd6ef17f83322bf19aa2405e6d7d74d678dacddfedc6353f3223b96629607_prof);

        
        $__internal_cc1d69440f39f6b5292b9b79a201e11eee8de5f0b3da6dec16d0c6e1b62df37d->leave($__internal_cc1d69440f39f6b5292b9b79a201e11eee8de5f0b3da6dec16d0c6e1b62df37d_prof);

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
        return array (  110 => 57,  106 => 56,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                        <tr>
                            <td>AB29837</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>333,33€</td>
                        </tr>
                        <tr>
                            <td>AC34423</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>666,66€</td>
                        </tr>
                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>

                    <dt>TVA :</dt>
                    <dd>200€</dd>

                    <dt>Total:</dt>
                    <dd>999,99€</dd>
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
