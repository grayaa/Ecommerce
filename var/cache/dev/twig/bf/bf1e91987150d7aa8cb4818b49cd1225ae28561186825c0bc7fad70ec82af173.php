<?php

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_fe9ed4c19b86bc3769662a920f3e588265688d4befc893a9a8a19b972ba51af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4e4e152ebae2b8905be8ffbfa3c752e949bb1b3f4ef4326f5a6e0a552da3763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e4e152ebae2b8905be8ffbfa3c752e949bb1b3f4ef4326f5a6e0a552da3763->enter($__internal_d4e4e152ebae2b8905be8ffbfa3c752e949bb1b3f4ef4326f5a6e0a552da3763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $__internal_bf82e272bb7bcce2775f4dab99ca2c294b598dd57c221d2141afa25a0d1ba640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf82e272bb7bcce2775f4dab99ca2c294b598dd57c221d2141afa25a0d1ba640->enter($__internal_bf82e272bb7bcce2775f4dab99ca2c294b598dd57c221d2141afa25a0d1ba640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e4e152ebae2b8905be8ffbfa3c752e949bb1b3f4ef4326f5a6e0a552da3763->leave($__internal_d4e4e152ebae2b8905be8ffbfa3c752e949bb1b3f4ef4326f5a6e0a552da3763_prof);

        
        $__internal_bf82e272bb7bcce2775f4dab99ca2c294b598dd57c221d2141afa25a0d1ba640->leave($__internal_bf82e272bb7bcce2775f4dab99ca2c294b598dd57c221d2141afa25a0d1ba640_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b36d1a8cede1998055d84c69870be4820c5ff97df2d2436c53c31aa3edfc8681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36d1a8cede1998055d84c69870be4820c5ff97df2d2436c53c31aa3edfc8681->enter($__internal_b36d1a8cede1998055d84c69870be4820c5ff97df2d2436c53c31aa3edfc8681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d429032235505eef68c162e63de459c00c943853ef8816309abfcf79a8d9eb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d429032235505eef68c162e63de459c00c943853ef8816309abfcf79a8d9eb0e->enter($__internal_d429032235505eef68c162e63de459c00c943853ef8816309abfcf79a8d9eb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (("unknown" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 5
            echo "        ";
            $context["block_status"] = "";
            // line 6
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            echo "    ";
        } elseif (("eol" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 8
            echo "        ";
            $context["block_status"] = "red";
            // line 9
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            echo "    ";
        } elseif (("eom" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 11
            echo "        ";
            $context["block_status"] = "yellow";
            // line 12
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            echo "    ";
        } elseif (("dev" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 14
            echo "        ";
            $context["block_status"] = "yellow";
            // line 15
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["block_status"] = "";
            // line 18
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        ob_start();
        // line 22
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 23
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
        ";
        } elseif ($this->getAttribute(        // line 25
(isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array(), "any", true, true)) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">
                ";
            // line 27
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            ";
        // line 35
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 36
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</b>
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 41
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 45
        if ((isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "
                    ";
        }
        // line 50
        echo "                </span>
            </div>

            ";
        // line 53
        if ( !("n/a" === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
            // line 54
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 59
        echo "
            ";
        // line 60
        if ( !("n/a" === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
            // line 61
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 66
        echo "
            ";
        // line 67
        if ( !("n/a" === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
            // line 68
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 70
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("green") : ("red"));
            echo "\">";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>
            ";
        }
        // line 73
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 86
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 87
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
        // line 97
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array(), "any", true, true)) {
            // line 98
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        ";
            // line 101
            if (("Silex" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()))) {
                // line 102
                echo "                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        ";
            } else {
                // line 106
                echo "                            <a href=\"https://symfony.com/doc/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
                echo "/index.html\" rel=\"help\">
                                Read Symfony ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
                echo " Docs
                            </a>
                        ";
            }
            // line 110
            echo "                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
        }
        // line 121
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 123
        echo "
    ";
        // line 124
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "name" => "config", "status" => (isset($context["block_status"]) ? $context["block_status"] : $this->getContext($context, "block_status")), "additional_classes" => "sf-toolbar-block-right"));
        echo "
";
        
        $__internal_d429032235505eef68c162e63de459c00c943853ef8816309abfcf79a8d9eb0e->leave($__internal_d429032235505eef68c162e63de459c00c943853ef8816309abfcf79a8d9eb0e_prof);

        
        $__internal_b36d1a8cede1998055d84c69870be4820c5ff97df2d2436c53c31aa3edfc8681->leave($__internal_b36d1a8cede1998055d84c69870be4820c5ff97df2d2436c53c31aa3edfc8681_prof);

    }

    // line 127
    public function block_menu($context, array $blocks = array())
    {
        $__internal_405a21763cd6aafce188e5c57e4d43c572ca1eec3037db417bf3d58529139669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405a21763cd6aafce188e5c57e4d43c572ca1eec3037db417bf3d58529139669->enter($__internal_405a21763cd6aafce188e5c57e4d43c572ca1eec3037db417bf3d58529139669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_501ae5b529a20f2932fba01870cf9d957377c419cc803c485cd79bcbf29e481c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501ae5b529a20f2932fba01870cf9d957377c419cc803c485cd79bcbf29e481c->enter($__internal_501ae5b529a20f2932fba01870cf9d957377c419cc803c485cd79bcbf29e481c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 128
        echo "    <span class=\"label label-status-";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()) == "eol")) ? ("red") : (((twig_in_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()), array(0 => "eom", 1 => "dev"))) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 129
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_501ae5b529a20f2932fba01870cf9d957377c419cc803c485cd79bcbf29e481c->leave($__internal_501ae5b529a20f2932fba01870cf9d957377c419cc803c485cd79bcbf29e481c_prof);

        
        $__internal_405a21763cd6aafce188e5c57e4d43c572ca1eec3037db417bf3d58529139669->leave($__internal_405a21763cd6aafce188e5c57e4d43c572ca1eec3037db417bf3d58529139669_prof);

    }

    // line 134
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b7fc881da067feab4904001d85515c86c8679a9516555d73dcca9ddd491c044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7fc881da067feab4904001d85515c86c8679a9516555d73dcca9ddd491c044->enter($__internal_3b7fc881da067feab4904001d85515c86c8679a9516555d73dcca9ddd491c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed4e558d2a0b69a878a3b5096a4dc930fcf9b1b63aa584ee52e55139dfba8630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4e558d2a0b69a878a3b5096a4dc930fcf9b1b63aa584ee52e55139dfba8630->enter($__internal_ed4e558d2a0b69a878a3b5096a4dc930fcf9b1b63aa584ee52e55139dfba8630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 135
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 136
            echo "        ";
            // line 137
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony ";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</a>
        </p>
    ";
        } else {
            // line 155
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>

            ";
            // line 163
            if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
                // line 164
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>
            ";
            }
            // line 169
            echo "
            ";
            // line 170
            if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
                // line 171
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>
            ";
            }
            // line 176
            echo "
            ";
            // line 177
            if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
                // line 178
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 179
                echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>
            ";
            }
            // line 183
            echo "        </div>
    ";
        }
        // line 185
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 195
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 200
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 207
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haszendopcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 212
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasapc", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 217
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 222
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haseaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 231
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array())) {
            // line 232
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array())), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 242
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 243
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array()), $context["name"], array(), "array"), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_ed4e558d2a0b69a878a3b5096a4dc930fcf9b1b63aa584ee52e55139dfba8630->leave($__internal_ed4e558d2a0b69a878a3b5096a4dc930fcf9b1b63aa584ee52e55139dfba8630_prof);

        
        $__internal_3b7fc881da067feab4904001d85515c86c8679a9516555d73dcca9ddd491c044->leave($__internal_3b7fc881da067feab4904001d85515c86c8679a9516555d73dcca9ddd491c044_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 247,  555 => 244,  551 => 243,  548 => 242,  544 => 241,  531 => 232,  529 => 231,  523 => 228,  514 => 222,  506 => 217,  498 => 212,  490 => 207,  480 => 200,  472 => 195,  464 => 190,  457 => 185,  453 => 183,  446 => 179,  443 => 178,  441 => 177,  438 => 176,  431 => 172,  428 => 171,  426 => 170,  423 => 169,  416 => 165,  413 => 164,  411 => 163,  404 => 159,  398 => 155,  392 => 152,  383 => 146,  375 => 141,  369 => 137,  367 => 136,  364 => 135,  355 => 134,  341 => 129,  336 => 128,  327 => 127,  315 => 124,  312 => 123,  308 => 121,  295 => 110,  289 => 107,  284 => 106,  278 => 102,  276 => 101,  271 => 98,  269 => 97,  261 => 92,  253 => 87,  249 => 86,  240 => 80,  236 => 79,  228 => 73,  220 => 70,  216 => 68,  214 => 67,  211 => 66,  205 => 63,  201 => 61,  199 => 60,  196 => 59,  190 => 56,  186 => 54,  184 => 53,  179 => 50,  173 => 48,  165 => 46,  163 => 45,  157 => 41,  151 => 38,  147 => 37,  144 => 36,  142 => 35,  139 => 34,  137 => 33,  134 => 32,  131 => 31,  126 => 29,  121 => 27,  118 => 26,  116 => 25,  112 => 24,  107 => 23,  104 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if 'unknown' == collector.symfonyState %}
        {% set block_status = '' %}
        {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}
    {% elseif 'eol' == collector.symfonyState %}
        {% set block_status = 'red' %}
        {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}
    {% elseif 'eom' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}
    {% elseif 'dev' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}
    {% else %}
        {% set block_status = '' %}
        {% set symfony_version_status = '' %}
    {% endif %}

    {% set icon %}
        {% if collector.applicationname %}
            <span class=\"sf-toolbar-label\">{{ collector.applicationname }}</span>
            <span class=\"sf-toolbar-value\">{{ collector.applicationversion }}</span>
        {% elseif collector.symfonyState is defined %}
            <span class=\"sf-toolbar-label\">
                {{ include('@WebProfiler/Icon/symfony.svg') }}
            </span>
            <span class=\"sf-toolbar-value\">{{ collector.symfonyversion }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            {% if collector.applicationname %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ collector.applicationname }}</b>
                    <span>{{ collector.applicationversion }}</span>
                </div>
            {% endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    {% if profiler_url %}
                        <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
                    {% else %}
                        {{ collector.token }}
                    {% endif %}
                </span>
            </div>

            {% if 'n/a' is not same as(collector.appname) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>{{ collector.appname }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.env) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>{{ collector.env }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.debug) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                </div>
            {% endif %}
        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    {{ collector.phpversion }}
                    &nbsp; <a href=\"{{ path('_profiler_phpinfo') }}\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>{{ collector.sapiName }}</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            {% if collector.symfonyversion is defined %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        {% if 'Silex' == collector.applicationname %}
                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        {% else %}
                            <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">
                                Read Symfony {{ collector.symfonyversion }} Docs
                            </a>
                        {% endif %}
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right' }) }}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' : '' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/config.svg') }}</span>
        <strong>Configuration</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.applicationname %}
        {# this application is not the Symfony framework #}
        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationname }}</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationversion }}</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony {{ collector.symfonyversion }}</a>
        </p>
    {% else %}
        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.symfonyversion }}</span>
                <span class=\"label\">Symfony version</span>
            </div>

            {% if 'n/a' != collector.appname %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.appname }}</span>
                    <span class=\"label\">Application name</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.env %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.env }}</span>
                    <span class=\"label\">Environment</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.debug %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                    <span class=\"label\">Debug</span>
                </div>
            {% endif %}
        </div>
    {% endif %}

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpversion }}</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasapc ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haseaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"{{ path('_profiler_phpinfo') }}\">View full PHP configuration</a>
    </p>

    {% if collector.bundles %}
        <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.bundles|keys|sort %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">{{ name }}</th>
                    <td class=\"font-normal\">{{ collector.bundles[name] }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/config.html.twig", "C:\\wamp64\\www\\Ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\config.html.twig");
    }
}
