<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_9593e2c97f85e18ca0a6e646332c5c6eb5ed87a357f8f3a593ca6c0f608db265 extends Twig_Template
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
        $__internal_0d170658579c3b36d3a097be74b3f5d8b2b0f8b110a11c88d55617671085fefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d170658579c3b36d3a097be74b3f5d8b2b0f8b110a11c88d55617671085fefe->enter($__internal_0d170658579c3b36d3a097be74b3f5d8b2b0f8b110a11c88d55617671085fefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        $__internal_233223a081b463fb60a3b4de74295762b1cbd7af09696945382b3bc9648f4f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233223a081b463fb60a3b4de74295762b1cbd7af09696945382b3bc9648f4f57->enter($__internal_233223a081b463fb60a3b4de74295762b1cbd7af09696945382b3bc9648f4f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"span3\">
    ";
        // line 2
        $this->loadTemplate("::modulesUsed/panier.html.twig", "::modulesUsed/navigation.html.twig", 2)->display($context);
        // line 3
        echo "
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
            </li>
            <li>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
            </li>
        </ul>
    </div>

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceBundle:Categories:menu"));
        echo "
        </ul>
    </div>
</div>";
        
        $__internal_0d170658579c3b36d3a097be74b3f5d8b2b0f8b110a11c88d55617671085fefe->leave($__internal_0d170658579c3b36d3a097be74b3f5d8b2b0f8b110a11c88d55617671085fefe_prof);

        
        $__internal_233223a081b463fb60a3b4de74295762b1cbd7af09696945382b3bc9648f4f57->leave($__internal_233223a081b463fb60a3b4de74295762b1cbd7af09696945382b3bc9648f4f57_prof);

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
        return array (  53 => 18,  42 => 10,  36 => 7,  30 => 3,  28 => 2,  25 => 1,);
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

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
            </li>
            <li>
                <a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
            </li>
        </ul>
    </div>

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            {{ render(controller('EcommerceBundle:Categories:menu')) }}
        </ul>
    </div>
</div>", "::modulesUsed/navigation.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources\\views/modulesUsed/navigation.html.twig");
    }
}
