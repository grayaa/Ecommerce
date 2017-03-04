<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_10615598e5a4df24f723b11e491dc3a32b5ed80cb31127a7896fd80dfab8290a extends Twig_Template
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
        $__internal_f552edb43c8431f520b4dee85d64fde544a1f159c6878c91bbbee8bb3f598107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f552edb43c8431f520b4dee85d64fde544a1f159c6878c91bbbee8bb3f598107->enter($__internal_f552edb43c8431f520b4dee85d64fde544a1f159c6878c91bbbee8bb3f598107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_55b08df4eb06c2f6e7a62a03471438fb9cab632df20ceb7ec49d1aca53e52eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b08df4eb06c2f6e7a62a03471438fb9cab632df20ceb7ec49d1aca53e52eec->enter($__internal_55b08df4eb06c2f6e7a62a03471438fb9cab632df20ceb7ec49d1aca53e52eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<h2>Connexion</h2>
<div id=\"collapseOne\" class=\"accordion-body collapse in\">
    <div class=\"accordion-inner\">
        <div class=\"span4\">
            <h4>Pas encore inscrit ?</h4>
            <em>
                nous vous invitons à vous inscrire<br/>
                afin de passer votre commande et de manger équilibré.
            </em>
        </div>

        <div class=\"span4 offset2\">
            <h4>Inscription</h4>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div>
                <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            </div>
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</div>

";
        
        $__internal_f552edb43c8431f520b4dee85d64fde544a1f159c6878c91bbbee8bb3f598107->leave($__internal_f552edb43c8431f520b4dee85d64fde544a1f159c6878c91bbbee8bb3f598107_prof);

        
        $__internal_55b08df4eb06c2f6e7a62a03471438fb9cab632df20ceb7ec49d1aca53e52eec->leave($__internal_55b08df4eb06c2f6e7a62a03471438fb9cab632df20ceb7ec49d1aca53e52eec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  50 => 19,  45 => 17,  41 => 16,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<h2>Connexion</h2>
<div id=\"collapseOne\" class=\"accordion-body collapse in\">
    <div class=\"accordion-inner\">
        <div class=\"span4\">
            <h4>Pas encore inscrit ?</h4>
            <em>
                nous vous invitons à vous inscrire<br/>
                afin de passer votre commande et de manger équilibré.
            </em>
        </div>

        <div class=\"span4 offset2\">
            <h4>Inscription</h4>
            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
            {{ form_widget(form) }}
            <div>
                <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\"/>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>

", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
