<?php

/* ::base.html.twig */
class __TwigTemplate_ae790f7bbbe91dbdec8d6bb1f71bbbaf5516524479e77c96fef5d451188a8263 extends Twig_Template
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
        $__internal_4f0b0b95f3230a139b07fff0f2874b7916c4bac2a3ee7c0d9725c692d9e84786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0b0b95f3230a139b07fff0f2874b7916c4bac2a3ee7c0d9725c692d9e84786->enter($__internal_4f0b0b95f3230a139b07fff0f2874b7916c4bac2a3ee7c0d9725c692d9e84786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d5668631e0cc81deeb6ddd7d14203403279271961c2f87a2b29eb86e4f77490a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5668631e0cc81deeb6ddd7d14203403279271961c2f87a2b29eb86e4f77490a->enter($__internal_d5668631e0cc81deeb6ddd7d14203403279271961c2f87a2b29eb86e4f77490a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4f0b0b95f3230a139b07fff0f2874b7916c4bac2a3ee7c0d9725c692d9e84786->leave($__internal_4f0b0b95f3230a139b07fff0f2874b7916c4bac2a3ee7c0d9725c692d9e84786_prof);

        
        $__internal_d5668631e0cc81deeb6ddd7d14203403279271961c2f87a2b29eb86e4f77490a->leave($__internal_d5668631e0cc81deeb6ddd7d14203403279271961c2f87a2b29eb86e4f77490a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e643a7d7ceb527de69afa05e55a46b678127a4ffb1e1100911c93ac0d010034a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e643a7d7ceb527de69afa05e55a46b678127a4ffb1e1100911c93ac0d010034a->enter($__internal_e643a7d7ceb527de69afa05e55a46b678127a4ffb1e1100911c93ac0d010034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51c876abde90cbb41ce9e7a56c827bf9ca4d4ddf6afdcc9ee210279422077895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c876abde90cbb41ce9e7a56c827bf9ca4d4ddf6afdcc9ee210279422077895->enter($__internal_51c876abde90cbb41ce9e7a56c827bf9ca4d4ddf6afdcc9ee210279422077895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Site Ecommerce";
        
        $__internal_51c876abde90cbb41ce9e7a56c827bf9ca4d4ddf6afdcc9ee210279422077895->leave($__internal_51c876abde90cbb41ce9e7a56c827bf9ca4d4ddf6afdcc9ee210279422077895_prof);

        
        $__internal_e643a7d7ceb527de69afa05e55a46b678127a4ffb1e1100911c93ac0d010034a->leave($__internal_e643a7d7ceb527de69afa05e55a46b678127a4ffb1e1100911c93ac0d010034a_prof);

    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_cfd9b89abce94e6b7a22e417516655e0f8c56a7f19f2defe0f35f5934f0a321b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd9b89abce94e6b7a22e417516655e0f8c56a7f19f2defe0f35f5934f0a321b->enter($__internal_cfd9b89abce94e6b7a22e417516655e0f8c56a7f19f2defe0f35f5934f0a321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_def06bcda5ad51d03bdef91c8d26445e1b66a9d436191279137b034cdf0c4020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def06bcda5ad51d03bdef91c8d26445e1b66a9d436191279137b034cdf0c4020->enter($__internal_def06bcda5ad51d03bdef91c8d26445e1b66a9d436191279137b034cdf0c4020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_def06bcda5ad51d03bdef91c8d26445e1b66a9d436191279137b034cdf0c4020->leave($__internal_def06bcda5ad51d03bdef91c8d26445e1b66a9d436191279137b034cdf0c4020_prof);

        
        $__internal_cfd9b89abce94e6b7a22e417516655e0f8c56a7f19f2defe0f35f5934f0a321b->leave($__internal_cfd9b89abce94e6b7a22e417516655e0f8c56a7f19f2defe0f35f5934f0a321b_prof);

    }

    // line 7
    public function block_pagedescription($context, array $blocks = array())
    {
        $__internal_5636d487a25a26e7b87bd89a2f39c7b0cb69aaab0439f5ed7a44cd9915d06885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5636d487a25a26e7b87bd89a2f39c7b0cb69aaab0439f5ed7a44cd9915d06885->enter($__internal_5636d487a25a26e7b87bd89a2f39c7b0cb69aaab0439f5ed7a44cd9915d06885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagedescription"));

        $__internal_5662f523fe12958098e9a503f08963f44634a497adee1c8ceaba0d1872914832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5662f523fe12958098e9a503f08963f44634a497adee1c8ceaba0d1872914832->enter($__internal_5662f523fe12958098e9a503f08963f44634a497adee1c8ceaba0d1872914832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagedescription"));

        
        $__internal_5662f523fe12958098e9a503f08963f44634a497adee1c8ceaba0d1872914832->leave($__internal_5662f523fe12958098e9a503f08963f44634a497adee1c8ceaba0d1872914832_prof);

        
        $__internal_5636d487a25a26e7b87bd89a2f39c7b0cb69aaab0439f5ed7a44cd9915d06885->leave($__internal_5636d487a25a26e7b87bd89a2f39c7b0cb69aaab0439f5ed7a44cd9915d06885_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f7464b56d6d0787428b3a066e2e535afd8c078ed540120af9ca336e7fae31d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7464b56d6d0787428b3a066e2e535afd8c078ed540120af9ca336e7fae31d9->enter($__internal_6f7464b56d6d0787428b3a066e2e535afd8c078ed540120af9ca336e7fae31d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_01563a57457e8d6e14f1634b8bbec59a98f6f261c78291a9a459949b356125b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01563a57457e8d6e14f1634b8bbec59a98f6f261c78291a9a459949b356125b7->enter($__internal_01563a57457e8d6e14f1634b8bbec59a98f6f261c78291a9a459949b356125b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_01563a57457e8d6e14f1634b8bbec59a98f6f261c78291a9a459949b356125b7->leave($__internal_01563a57457e8d6e14f1634b8bbec59a98f6f261c78291a9a459949b356125b7_prof);

        
        $__internal_6f7464b56d6d0787428b3a066e2e535afd8c078ed540120af9ca336e7fae31d9->leave($__internal_6f7464b56d6d0787428b3a066e2e535afd8c078ed540120af9ca336e7fae31d9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f5b7d0e41740ee09085dfac24851b38b59269b87f9f553a9c3d0c58e1896d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5b7d0e41740ee09085dfac24851b38b59269b87f9f553a9c3d0c58e1896d01->enter($__internal_0f5b7d0e41740ee09085dfac24851b38b59269b87f9f553a9c3d0c58e1896d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e837fa364b6b62bfc4a8a44423d83c91c8725ac376b76af9f82653dc061b526d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e837fa364b6b62bfc4a8a44423d83c91c8725ac376b76af9f82653dc061b526d->enter($__internal_e837fa364b6b62bfc4a8a44423d83c91c8725ac376b76af9f82653dc061b526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e837fa364b6b62bfc4a8a44423d83c91c8725ac376b76af9f82653dc061b526d->leave($__internal_e837fa364b6b62bfc4a8a44423d83c91c8725ac376b76af9f82653dc061b526d_prof);

        
        $__internal_0f5b7d0e41740ee09085dfac24851b38b59269b87f9f553a9c3d0c58e1896d01->leave($__internal_0f5b7d0e41740ee09085dfac24851b38b59269b87f9f553a9c3d0c58e1896d01_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84d4a7cf50dcd57d32d59d893264cccbd675b18e349ec5aff7539286c5913457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d4a7cf50dcd57d32d59d893264cccbd675b18e349ec5aff7539286c5913457->enter($__internal_84d4a7cf50dcd57d32d59d893264cccbd675b18e349ec5aff7539286c5913457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c5b9333056b08de3d7454ba50c6ae71bec75d31df5f4ed6e91c4350f11fbf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5b9333056b08de3d7454ba50c6ae71bec75d31df5f4ed6e91c4350f11fbf05->enter($__internal_8c5b9333056b08de3d7454ba50c6ae71bec75d31df5f4ed6e91c4350f11fbf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_8c5b9333056b08de3d7454ba50c6ae71bec75d31df5f4ed6e91c4350f11fbf05->leave($__internal_8c5b9333056b08de3d7454ba50c6ae71bec75d31df5f4ed6e91c4350f11fbf05_prof);

        
        $__internal_84d4a7cf50dcd57d32d59d893264cccbd675b18e349ec5aff7539286c5913457->leave($__internal_84d4a7cf50dcd57d32d59d893264cccbd675b18e349ec5aff7539286c5913457_prof);

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
