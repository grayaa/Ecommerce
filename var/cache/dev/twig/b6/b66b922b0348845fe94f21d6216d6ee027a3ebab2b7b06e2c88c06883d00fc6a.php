<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_3b94849e27d7a6aa75f06bdd691fdf101d90bd904c3a4350e1d12751ac21b8f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
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
        $__internal_6a450b71efd78eb59799cd05de592d10d5fb18d77d78e804d061a17139e0a4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a450b71efd78eb59799cd05de592d10d5fb18d77d78e804d061a17139e0a4cd->enter($__internal_6a450b71efd78eb59799cd05de592d10d5fb18d77d78e804d061a17139e0a4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $__internal_29255e74c4f5d3307d9c13b9279387d9f834e6b9e2d62caa5c8a0af943b63194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29255e74c4f5d3307d9c13b9279387d9f834e6b9e2d62caa5c8a0af943b63194->enter($__internal_29255e74c4f5d3307d9c13b9279387d9f834e6b9e2d62caa5c8a0af943b63194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a450b71efd78eb59799cd05de592d10d5fb18d77d78e804d061a17139e0a4cd->leave($__internal_6a450b71efd78eb59799cd05de592d10d5fb18d77d78e804d061a17139e0a4cd_prof);

        
        $__internal_29255e74c4f5d3307d9c13b9279387d9f834e6b9e2d62caa5c8a0af943b63194->leave($__internal_29255e74c4f5d3307d9c13b9279387d9f834e6b9e2d62caa5c8a0af943b63194_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2814c481fb458df1356f23343db8d329eec7e2cfc3f9dcb9b3c6cda32e4d5572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2814c481fb458df1356f23343db8d329eec7e2cfc3f9dcb9b3c6cda32e4d5572->enter($__internal_2814c481fb458df1356f23343db8d329eec7e2cfc3f9dcb9b3c6cda32e4d5572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fdfd2e93ffed0880c3a68d0431136dff4e2c3f02278373b6a917ae6eab61495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdfd2e93ffed0880c3a68d0431136dff4e2c3f02278373b6a917ae6eab61495->enter($__internal_9fdfd2e93ffed0880c3a68d0431136dff4e2c3f02278373b6a917ae6eab61495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 6)->display($context);
        // line 7
        echo "
            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h4>3.33€</h4>
                        <form action=\"panier.php\">


                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
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
        
        $__internal_9fdfd2e93ffed0880c3a68d0431136dff4e2c3f02278373b6a917ae6eab61495->leave($__internal_9fdfd2e93ffed0880c3a68d0431136dff4e2c3f02278373b6a917ae6eab61495_prof);

        
        $__internal_2814c481fb458df1356f23343db8d329eec7e2cfc3f9dcb9b3c6cda32e4d5572->leave($__internal_2814c481fb458df1356f23343db8d329eec7e2cfc3f9dcb9b3c6cda32e4d5572_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h4>3.33€</h4>
                        <form action=\"panier.php\">


                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
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
{% endblock %}", "EcommerceBundle:Default:produits/layout/produits.html.twig", "C:\\wamp64\\www\\Ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/produits.html.twig");
    }
}
