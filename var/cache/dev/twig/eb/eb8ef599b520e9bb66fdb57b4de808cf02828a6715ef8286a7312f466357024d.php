<?php

/* ::base.html.twig */
class __TwigTemplate_d10e822d4276e5a8097e0128c49b6b0ae96f2eede2d7dc0c11acb257713be1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2795b0a025a61385264f394e0fb834e0b822c8af729cd550d930013104b0317b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2795b0a025a61385264f394e0fb834e0b822c8af729cd550d930013104b0317b->enter($__internal_2795b0a025a61385264f394e0fb834e0b822c8af729cd550d930013104b0317b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_df838a97e67c2036453ee1f1266c119458e8ca618591ad9b3c1344419292601b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df838a97e67c2036453ee1f1266c119458e8ca618591ad9b3c1344419292601b->enter($__internal_df838a97e67c2036453ee1f1266c119458e8ca618591ad9b3c1344419292601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">DevAndClick</a>
                    <div class=\"nav-collapse collapse\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceBundle:Produits:rechercheForm"));
        echo "
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
        <hr />

        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PagesBundle:Pages:menu"));
        echo "
                        </ul>
                    </div>

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - DevAndClick</p>
                    </div>
                </div>
            </div>
        </footer>

        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>";
        
        $__internal_2795b0a025a61385264f394e0fb834e0b822c8af729cd550d930013104b0317b->leave($__internal_2795b0a025a61385264f394e0fb834e0b822c8af729cd550d930013104b0317b_prof);

        
        $__internal_df838a97e67c2036453ee1f1266c119458e8ca618591ad9b3c1344419292601b->leave($__internal_df838a97e67c2036453ee1f1266c119458e8ca618591ad9b3c1344419292601b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8904622610ad9dbeb923f286a3210ba2e5840d22e8199cbe44746aa5b84b9238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8904622610ad9dbeb923f286a3210ba2e5840d22e8199cbe44746aa5b84b9238->enter($__internal_8904622610ad9dbeb923f286a3210ba2e5840d22e8199cbe44746aa5b84b9238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9793f58dfb52908588310526c45f3a60067f64738a501cac54ed906e9da8291a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9793f58dfb52908588310526c45f3a60067f64738a501cac54ed906e9da8291a->enter($__internal_9793f58dfb52908588310526c45f3a60067f64738a501cac54ed906e9da8291a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9793f58dfb52908588310526c45f3a60067f64738a501cac54ed906e9da8291a->leave($__internal_9793f58dfb52908588310526c45f3a60067f64738a501cac54ed906e9da8291a_prof);

        
        $__internal_8904622610ad9dbeb923f286a3210ba2e5840d22e8199cbe44746aa5b84b9238->leave($__internal_8904622610ad9dbeb923f286a3210ba2e5840d22e8199cbe44746aa5b84b9238_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40f02ab37fb049178f02aafbd26894aead36496aaa951d1bb86d355ee8a35ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f02ab37fb049178f02aafbd26894aead36496aaa951d1bb86d355ee8a35ff9->enter($__internal_40f02ab37fb049178f02aafbd26894aead36496aaa951d1bb86d355ee8a35ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_715f05d1ba324dfaaf9aba8d023ea37126b526f7399af638359dc6107101e91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715f05d1ba324dfaaf9aba8d023ea37126b526f7399af638359dc6107101e91b->enter($__internal_715f05d1ba324dfaaf9aba8d023ea37126b526f7399af638359dc6107101e91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_715f05d1ba324dfaaf9aba8d023ea37126b526f7399af638359dc6107101e91b->leave($__internal_715f05d1ba324dfaaf9aba8d023ea37126b526f7399af638359dc6107101e91b_prof);

        
        $__internal_40f02ab37fb049178f02aafbd26894aead36496aaa951d1bb86d355ee8a35ff9->leave($__internal_40f02ab37fb049178f02aafbd26894aead36496aaa951d1bb86d355ee8a35ff9_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_bedb07f1d0f7ab39cc73fef8924886b5eed99b0503e4fda5761f7ccc7f875d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bedb07f1d0f7ab39cc73fef8924886b5eed99b0503e4fda5761f7ccc7f875d1e->enter($__internal_bedb07f1d0f7ab39cc73fef8924886b5eed99b0503e4fda5761f7ccc7f875d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8de50817fb043f689058d723afe17766c080f5b39b2dd1f7ce68e0ad25ac9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8de50817fb043f689058d723afe17766c080f5b39b2dd1f7ce68e0ad25ac9bf->enter($__internal_a8de50817fb043f689058d723afe17766c080f5b39b2dd1f7ce68e0ad25ac9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8de50817fb043f689058d723afe17766c080f5b39b2dd1f7ce68e0ad25ac9bf->leave($__internal_a8de50817fb043f689058d723afe17766c080f5b39b2dd1f7ce68e0ad25ac9bf_prof);

        
        $__internal_bedb07f1d0f7ab39cc73fef8924886b5eed99b0503e4fda5761f7ccc7f875d1e->leave($__internal_bedb07f1d0f7ab39cc73fef8924886b5eed99b0503e4fda5761f7ccc7f875d1e_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42f3f98bc1fc6882ee7006e5a7d19ff2c61743b85e9650d8eb586b62a41574b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f3f98bc1fc6882ee7006e5a7d19ff2c61743b85e9650d8eb586b62a41574b6->enter($__internal_42f3f98bc1fc6882ee7006e5a7d19ff2c61743b85e9650d8eb586b62a41574b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5bf15e3016ee3a1ad922baf2e4740ed23a19e0bb73ce21dbadf9938a50ffeb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf15e3016ee3a1ad922baf2e4740ed23a19e0bb73ce21dbadf9938a50ffeb8b->enter($__internal_5bf15e3016ee3a1ad922baf2e4740ed23a19e0bb73ce21dbadf9938a50ffeb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5bf15e3016ee3a1ad922baf2e4740ed23a19e0bb73ce21dbadf9938a50ffeb8b->leave($__internal_5bf15e3016ee3a1ad922baf2e4740ed23a19e0bb73ce21dbadf9938a50ffeb8b_prof);

        
        $__internal_42f3f98bc1fc6882ee7006e5a7d19ff2c61743b85e9650d8eb586b62a41574b6->leave($__internal_42f3f98bc1fc6882ee7006e5a7d19ff2c61743b85e9650d8eb586b62a41574b6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 67,  213 => 66,  204 => 65,  187 => 31,  175 => 10,  171 => 9,  167 => 8,  162 => 7,  153 => 6,  135 => 5,  124 => 69,  122 => 65,  113 => 59,  104 => 53,  100 => 52,  92 => 47,  83 => 41,  72 => 32,  70 => 31,  61 => 25,  56 => 23,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"{{ path('presentation') }}\">DevAndClick</a>
                    <div class=\"nav-collapse collapse\">
                        {{ render(controller('EcommerceBundle:Produits:rechercheForm')) }}
                    </div>
                </div>
            </div>
        </div>

        {% block body %}{% endblock %}

        <hr />

        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            {{ render(controller('PagesBundle:Pages:menu')) }}
                        </ul>
                    </div>

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;{{ adresse }}</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: {{ telephone }}</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: {{ fax }}</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright {{ \"now\"|date('Y') }} - DevAndClick</p>
                    </div>
                </div>
            </div>
        </footer>

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-1.10.0.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "::base.html.twig", "C:\\wamp64\\www\\Ecommerce\\app/Resources\\views/base.html.twig");
    }
}
