<?php

/* EcommerceBundle:Default:produits/layout/produit.html.twig */
class __TwigTemplate_b07eedd97a4884d4d6ce92d1a8e90aacfaa080167fe927fa6bb096646f184a6a extends Twig_Template
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
        $__internal_00a0f4a16be17532c465d832f7c2bb2cb9dafef76e3a6f224d01f5d6f7099b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a0f4a16be17532c465d832f7c2bb2cb9dafef76e3a6f224d01f5d6f7099b96->enter($__internal_00a0f4a16be17532c465d832f7c2bb2cb9dafef76e3a6f224d01f5d6f7099b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produit.html.twig"));

        $__internal_76e635a009974c8f93dfeafcfa56f6295db126c2995f33ab3e62c0dc1bb3789e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e635a009974c8f93dfeafcfa56f6295db126c2995f33ab3e62c0dc1bb3789e->enter($__internal_76e635a009974c8f93dfeafcfa56f6295db126c2995f33ab3e62c0dc1bb3789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00a0f4a16be17532c465d832f7c2bb2cb9dafef76e3a6f224d01f5d6f7099b96->leave($__internal_00a0f4a16be17532c465d832f7c2bb2cb9dafef76e3a6f224d01f5d6f7099b96_prof);

        
        $__internal_76e635a009974c8f93dfeafcfa56f6295db126c2995f33ab3e62c0dc1bb3789e->leave($__internal_76e635a009974c8f93dfeafcfa56f6295db126c2995f33ab3e62c0dc1bb3789e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_544f9b87cd5977523bc95eb5dbfaf9e226a99e69b22781a64d59595c02231d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544f9b87cd5977523bc95eb5dbfaf9e226a99e69b22781a64d59595c02231d54->enter($__internal_544f9b87cd5977523bc95eb5dbfaf9e226a99e69b22781a64d59595c02231d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce174a6a8cf0b2f8431ce2de0e8a39ddf844684d4d09204c4e9a2876be6dd8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce174a6a8cf0b2f8431ce2de0e8a39ddf844684d4d09204c4e9a2876be6dd8c4->enter($__internal_ce174a6a8cf0b2f8431ce2de0e8a39ddf844684d4d09204c4e9a2876be6dd8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "
";
        
        $__internal_ce174a6a8cf0b2f8431ce2de0e8a39ddf844684d4d09204c4e9a2876be6dd8c4->leave($__internal_ce174a6a8cf0b2f8431ce2de0e8a39ddf844684d4d09204c4e9a2876be6dd8c4_prof);

        
        $__internal_544f9b87cd5977523bc95eb5dbfaf9e226a99e69b22781a64d59595c02231d54->leave($__internal_544f9b87cd5977523bc95eb5dbfaf9e226a99e69b22781a64d59595c02231d54_prof);

    }

    // line 7
    public function block_pagedescription($context, array $blocks = array())
    {
        $__internal_8d14e0a8a12f5662e3a0d57f63797966853019f7c6197cae6df659a451e1c7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d14e0a8a12f5662e3a0d57f63797966853019f7c6197cae6df659a451e1c7a1->enter($__internal_8d14e0a8a12f5662e3a0d57f63797966853019f7c6197cae6df659a451e1c7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagedescription"));

        $__internal_15fe730d11fda52285277e12f65d495e9be406a87a25f329faaeb2e40ea7b287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fe730d11fda52285277e12f65d495e9be406a87a25f329faaeb2e40ea7b287->enter($__internal_15fe730d11fda52285277e12f65d495e9be406a87a25f329faaeb2e40ea7b287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagedescription"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "
";
        
        $__internal_15fe730d11fda52285277e12f65d495e9be406a87a25f329faaeb2e40ea7b287->leave($__internal_15fe730d11fda52285277e12f65d495e9be406a87a25f329faaeb2e40ea7b287_prof);

        
        $__internal_8d14e0a8a12f5662e3a0d57f63797966853019f7c6197cae6df659a451e1c7a1->leave($__internal_8d14e0a8a12f5662e3a0d57f63797966853019f7c6197cae6df659a451e1c7a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_490c5cae33022dca836d762fa7367f23976f8f8f88dc582c8552365035882909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490c5cae33022dca836d762fa7367f23976f8f8f88dc582c8552365035882909->enter($__internal_490c5cae33022dca836d762fa7367f23976f8f8f88dc582c8552365035882909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5301da553c654fe56f27e8189d54b5a3ff1adbf8b4ad8cd03302e08b61a812d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5301da553c654fe56f27e8189d54b5a3ff1adbf8b4ad8cd03302e08b61a812d1->enter($__internal_5301da553c654fe56f27e8189d54b5a3ff1adbf8b4ad8cd03302e08b61a812d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5301da553c654fe56f27e8189d54b5a3ff1adbf8b4ad8cd03302e08b61a812d1->leave($__internal_5301da553c654fe56f27e8189d54b5a3ff1adbf8b4ad8cd03302e08b61a812d1_prof);

        
        $__internal_490c5cae33022dca836d762fa7367f23976f8f8f88dc582c8552365035882909->leave($__internal_490c5cae33022dca836d762fa7367f23976f8f8f88dc582c8552365035882909_prof);

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
