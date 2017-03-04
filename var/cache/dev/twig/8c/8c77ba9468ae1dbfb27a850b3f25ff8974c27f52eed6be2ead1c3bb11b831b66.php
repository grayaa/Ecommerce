<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_db3ac44d976647a7e0f70081a81adeb5d44245f917bdd0b8a027201b6215b7e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b56ee4997cc71b86628404d6d3ab0c80ebed75e1fca3575dc7c941690d74270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b56ee4997cc71b86628404d6d3ab0c80ebed75e1fca3575dc7c941690d74270->enter($__internal_4b56ee4997cc71b86628404d6d3ab0c80ebed75e1fca3575dc7c941690d74270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        $__internal_b0711299bae136164e6b30d12282d89a8158386395842b7144e4d3b0ebd45457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0711299bae136164e6b30d12282d89a8158386395842b7144e4d3b0ebd45457->enter($__internal_b0711299bae136164e6b30d12282d89a8158386395842b7144e4d3b0ebd45457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"span3\">
    ";
        // line 2
        $this->loadTemplate("::modulesUsed/panier.html.twig", "::modulesUsed/navigation.html.twig", 2)->display($context);
        // line 3
        echo "
    ";
        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 5
            echo "        ";
            $this->loadTemplate("UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig", "::modulesUsed/navigation.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $this->loadTemplate("UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig", "::modulesUsed/navigation.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceBundle:Categories:menu"));
        echo "
        </ul>
    </div>
</div>";
        
        $__internal_4b56ee4997cc71b86628404d6d3ab0c80ebed75e1fca3575dc7c941690d74270->leave($__internal_4b56ee4997cc71b86628404d6d3ab0c80ebed75e1fca3575dc7c941690d74270_prof);

        
        $__internal_b0711299bae136164e6b30d12282d89a8158386395842b7144e4d3b0ebd45457->leave($__internal_b0711299bae136164e6b30d12282d89a8158386395842b7144e4d3b0ebd45457_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"span3\">
    {% include '::modulesUsed/panier.html.twig' %}

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {% include 'UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig' %}
    {% else %}
        {% include 'UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig' %}
    {% endif %}

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            {{ render(controller('EcommerceBundle:Categories:menu')) }}
        </ul>
    </div>
</div>", "::modulesUsed/navigation.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources\\views/modulesUsed/navigation.html.twig");
    }
}
