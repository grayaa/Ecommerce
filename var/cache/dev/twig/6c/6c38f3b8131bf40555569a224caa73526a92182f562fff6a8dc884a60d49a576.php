<?php

/* ::base.html.twig */
class __TwigTemplate_8aa90a08df4a9950adbdc95fe48726f18b77add0ee47e3293151c1567a8886a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'pagedescription' => array($this, 'block_pagedescription'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f8df5cdaf018ee2e97a2477f4db5ac5d58aefbc37cafea9d013beb7d24e7cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8df5cdaf018ee2e97a2477f4db5ac5d58aefbc37cafea9d013beb7d24e7cbc->enter($__internal_0f8df5cdaf018ee2e97a2477f4db5ac5d58aefbc37cafea9d013beb7d24e7cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_07dd79030190b43e2a38db89f3be5ed3034cab1dd56ae3c9ba2e96683b6f89fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07dd79030190b43e2a38db89f3be5ed3034cab1dd56ae3c9ba2e96683b6f89fe->enter($__internal_07dd79030190b43e2a38db89f3be5ed3034cab1dd56ae3c9ba2e96683b6f89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"keyword\" content=\"";
        // line 6
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('pagedescription', $context, $blocks);
        echo "\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
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
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">DevAndClick</a>
                    <div class=\"nav-collapse collapse\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceBundle:Produits:rechercheForm"));
        echo "
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
        <hr />

        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PagesBundle:Pages:menu"));
        echo "
                        </ul>
                    </div>

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - DevAndClick</p>
                    </div>
                </div>
            </div>
        </footer>

        ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </body>
</html>";
        
        $__internal_0f8df5cdaf018ee2e97a2477f4db5ac5d58aefbc37cafea9d013beb7d24e7cbc->leave($__internal_0f8df5cdaf018ee2e97a2477f4db5ac5d58aefbc37cafea9d013beb7d24e7cbc_prof);

        
        $__internal_07dd79030190b43e2a38db89f3be5ed3034cab1dd56ae3c9ba2e96683b6f89fe->leave($__internal_07dd79030190b43e2a38db89f3be5ed3034cab1dd56ae3c9ba2e96683b6f89fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd576357ddb0dddd984038775163a6d5cfbc49fb00c8e5542bfa0a416aac0f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd576357ddb0dddd984038775163a6d5cfbc49fb00c8e5542bfa0a416aac0f60->enter($__internal_dd576357ddb0dddd984038775163a6d5cfbc49fb00c8e5542bfa0a416aac0f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50f026d47c64c2ef0ffa1e56e3537a25485f88dc4a9e9a0fe3f2b80e7ae50b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f026d47c64c2ef0ffa1e56e3537a25485f88dc4a9e9a0fe3f2b80e7ae50b8f->enter($__internal_50f026d47c64c2ef0ffa1e56e3537a25485f88dc4a9e9a0fe3f2b80e7ae50b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Site Ecommerce";
        
        $__internal_50f026d47c64c2ef0ffa1e56e3537a25485f88dc4a9e9a0fe3f2b80e7ae50b8f->leave($__internal_50f026d47c64c2ef0ffa1e56e3537a25485f88dc4a9e9a0fe3f2b80e7ae50b8f_prof);

        
        $__internal_dd576357ddb0dddd984038775163a6d5cfbc49fb00c8e5542bfa0a416aac0f60->leave($__internal_dd576357ddb0dddd984038775163a6d5cfbc49fb00c8e5542bfa0a416aac0f60_prof);

    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_fe85da10368e781815e6f8e47804f069b1736edbf42db3b7bcb39b7ef0b495f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe85da10368e781815e6f8e47804f069b1736edbf42db3b7bcb39b7ef0b495f6->enter($__internal_fe85da10368e781815e6f8e47804f069b1736edbf42db3b7bcb39b7ef0b495f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_df220da80f45a63930661e3b7cc3bb0f3e54e9bbe8bbcb8bfbf698360259cacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df220da80f45a63930661e3b7cc3bb0f3e54e9bbe8bbcb8bfbf698360259cacb->enter($__internal_df220da80f45a63930661e3b7cc3bb0f3e54e9bbe8bbcb8bfbf698360259cacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_df220da80f45a63930661e3b7cc3bb0f3e54e9bbe8bbcb8bfbf698360259cacb->leave($__internal_df220da80f45a63930661e3b7cc3bb0f3e54e9bbe8bbcb8bfbf698360259cacb_prof);

        
        $__internal_fe85da10368e781815e6f8e47804f069b1736edbf42db3b7bcb39b7ef0b495f6->leave($__internal_fe85da10368e781815e6f8e47804f069b1736edbf42db3b7bcb39b7ef0b495f6_prof);

    }

    // line 7
    public function block_pagedescription($context, array $blocks = array())
    {
        $__internal_a91fa4efd54c5dfee1edc0df5ef86d77511c55a4854b00e8942b3361350df432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91fa4efd54c5dfee1edc0df5ef86d77511c55a4854b00e8942b3361350df432->enter($__internal_a91fa4efd54c5dfee1edc0df5ef86d77511c55a4854b00e8942b3361350df432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagedescription"));

        $__internal_c6daa81233b773a6bf7838e777f401953eeb287ae06e0aa3a8a256a2875ad1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6daa81233b773a6bf7838e777f401953eeb287ae06e0aa3a8a256a2875ad1d0->enter($__internal_c6daa81233b773a6bf7838e777f401953eeb287ae06e0aa3a8a256a2875ad1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagedescription"));

        
        $__internal_c6daa81233b773a6bf7838e777f401953eeb287ae06e0aa3a8a256a2875ad1d0->leave($__internal_c6daa81233b773a6bf7838e777f401953eeb287ae06e0aa3a8a256a2875ad1d0_prof);

        
        $__internal_a91fa4efd54c5dfee1edc0df5ef86d77511c55a4854b00e8942b3361350df432->leave($__internal_a91fa4efd54c5dfee1edc0df5ef86d77511c55a4854b00e8942b3361350df432_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68d6cf7ef4ae8e87ac810201d7fc800265c8e54e3312db6b0c38088828f3fc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d6cf7ef4ae8e87ac810201d7fc800265c8e54e3312db6b0c38088828f3fc33->enter($__internal_68d6cf7ef4ae8e87ac810201d7fc800265c8e54e3312db6b0c38088828f3fc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b9804069a474a1c7e916794718e536c19c261089f4c59f51bbf168fa2efe9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9804069a474a1c7e916794718e536c19c261089f4c59f51bbf168fa2efe9ef->enter($__internal_0b9804069a474a1c7e916794718e536c19c261089f4c59f51bbf168fa2efe9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_0b9804069a474a1c7e916794718e536c19c261089f4c59f51bbf168fa2efe9ef->leave($__internal_0b9804069a474a1c7e916794718e536c19c261089f4c59f51bbf168fa2efe9ef_prof);

        
        $__internal_68d6cf7ef4ae8e87ac810201d7fc800265c8e54e3312db6b0c38088828f3fc33->leave($__internal_68d6cf7ef4ae8e87ac810201d7fc800265c8e54e3312db6b0c38088828f3fc33_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4c16639402de3bdbb3223f58ff008439b61edb45f01c3628018e0f1f7594e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c16639402de3bdbb3223f58ff008439b61edb45f01c3628018e0f1f7594e81->enter($__internal_b4c16639402de3bdbb3223f58ff008439b61edb45f01c3628018e0f1f7594e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23e68a0216d147defbef370a79ca0382e3c55a9fb41ba73eb19df492cb228f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e68a0216d147defbef370a79ca0382e3c55a9fb41ba73eb19df492cb228f67->enter($__internal_23e68a0216d147defbef370a79ca0382e3c55a9fb41ba73eb19df492cb228f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23e68a0216d147defbef370a79ca0382e3c55a9fb41ba73eb19df492cb228f67->leave($__internal_23e68a0216d147defbef370a79ca0382e3c55a9fb41ba73eb19df492cb228f67_prof);

        
        $__internal_b4c16639402de3bdbb3223f58ff008439b61edb45f01c3628018e0f1f7594e81->leave($__internal_b4c16639402de3bdbb3223f58ff008439b61edb45f01c3628018e0f1f7594e81_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33fedf1a2af8afdc040b8583751a46e78432da95ed16a706535c827f38de418b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fedf1a2af8afdc040b8583751a46e78432da95ed16a706535c827f38de418b->enter($__internal_33fedf1a2af8afdc040b8583751a46e78432da95ed16a706535c827f38de418b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_827809aed754ccbd2aa65306ce4924d0adba488764082f6bcef384aa2308dc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827809aed754ccbd2aa65306ce4924d0adba488764082f6bcef384aa2308dc90->enter($__internal_827809aed754ccbd2aa65306ce4924d0adba488764082f6bcef384aa2308dc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_827809aed754ccbd2aa65306ce4924d0adba488764082f6bcef384aa2308dc90->leave($__internal_827809aed754ccbd2aa65306ce4924d0adba488764082f6bcef384aa2308dc90_prof);

        
        $__internal_33fedf1a2af8afdc040b8583751a46e78432da95ed16a706535c827f38de418b->leave($__internal_33fedf1a2af8afdc040b8583751a46e78432da95ed16a706535c827f38de418b_prof);

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
        return array (  262 => 69,  257 => 68,  248 => 67,  231 => 33,  219 => 12,  215 => 11,  211 => 10,  206 => 9,  197 => 8,  180 => 7,  163 => 6,  145 => 5,  134 => 71,  132 => 67,  123 => 61,  114 => 55,  110 => 54,  102 => 49,  93 => 43,  82 => 34,  80 => 33,  71 => 27,  66 => 25,  51 => 14,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  31 => 1,);
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
        <title>{% block title %}Site Ecommerce{% endblock %}</title>
        <meta name=\"keyword\" content=\"{% block keywords %}{% endblock %}\">
        <meta name=\"description\" content=\"{% block pagedescription %}{% endblock %}\">
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
