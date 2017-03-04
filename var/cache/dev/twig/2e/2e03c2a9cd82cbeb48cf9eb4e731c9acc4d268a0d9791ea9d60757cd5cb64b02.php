<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_3aad5c1d76ea2b727ded7b1161c4dc46956c9f53644650dc8d87f5856ec2b5bb extends Twig_Template
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
        $__internal_50b041d0495dabd6b4c46053cfbcf9828de8c0f1800611bd034701f57af77abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b041d0495dabd6b4c46053cfbcf9828de8c0f1800611bd034701f57af77abd->enter($__internal_50b041d0495dabd6b4c46053cfbcf9828de8c0f1800611bd034701f57af77abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        $__internal_bb32c4c8cbff68739bde967631c146088bcdba0710eeba79caa788f4e9535954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb32c4c8cbff68739bde967631c146088bcdba0710eeba79caa788f4e9535954->enter($__internal_bb32c4c8cbff68739bde967631c146088bcdba0710eeba79caa788f4e9535954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"span3\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceBundle:Panier:sidebarPanier"));
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
        
        $__internal_50b041d0495dabd6b4c46053cfbcf9828de8c0f1800611bd034701f57af77abd->leave($__internal_50b041d0495dabd6b4c46053cfbcf9828de8c0f1800611bd034701f57af77abd_prof);

        
        $__internal_bb32c4c8cbff68739bde967631c146088bcdba0710eeba79caa788f4e9535954->leave($__internal_bb32c4c8cbff68739bde967631c146088bcdba0710eeba79caa788f4e9535954_prof);

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
        return array (  53 => 13,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  33 => 4,  28 => 2,  25 => 1,);
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
    {{ render(controller('EcommerceBundle:Panier:sidebarPanier')) }}

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
