<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bb425f2f6ab08de69173b06d2bb07a373db47de90ada02abfb614535ab74f6b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a6f0807a038e27b65d2176c79e7268c739ce1456853d477f4f9e512b5047c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6f0807a038e27b65d2176c79e7268c739ce1456853d477f4f9e512b5047c89->enter($__internal_4a6f0807a038e27b65d2176c79e7268c739ce1456853d477f4f9e512b5047c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_342db2e38f27943deb662932c03697a53601dc32f207ed8dae39b553472b7f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342db2e38f27943deb662932c03697a53601dc32f207ed8dae39b553472b7f38->enter($__internal_342db2e38f27943deb662932c03697a53601dc32f207ed8dae39b553472b7f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a6f0807a038e27b65d2176c79e7268c739ce1456853d477f4f9e512b5047c89->leave($__internal_4a6f0807a038e27b65d2176c79e7268c739ce1456853d477f4f9e512b5047c89_prof);

        
        $__internal_342db2e38f27943deb662932c03697a53601dc32f207ed8dae39b553472b7f38->leave($__internal_342db2e38f27943deb662932c03697a53601dc32f207ed8dae39b553472b7f38_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fd9b4ab94cad59ac250b96257d982bbe60022ded7fd0ccb8a55e7e517a3a1b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd9b4ab94cad59ac250b96257d982bbe60022ded7fd0ccb8a55e7e517a3a1b8->enter($__internal_7fd9b4ab94cad59ac250b96257d982bbe60022ded7fd0ccb8a55e7e517a3a1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7edacc06b24918e77b5502421c9e4e11bf6ba028ef098ec011edd5764e67dc60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edacc06b24918e77b5502421c9e4e11bf6ba028ef098ec011edd5764e67dc60->enter($__internal_7edacc06b24918e77b5502421c9e4e11bf6ba028ef098ec011edd5764e67dc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7edacc06b24918e77b5502421c9e4e11bf6ba028ef098ec011edd5764e67dc60->leave($__internal_7edacc06b24918e77b5502421c9e4e11bf6ba028ef098ec011edd5764e67dc60_prof);

        
        $__internal_7fd9b4ab94cad59ac250b96257d982bbe60022ded7fd0ccb8a55e7e517a3a1b8->leave($__internal_7fd9b4ab94cad59ac250b96257d982bbe60022ded7fd0ccb8a55e7e517a3a1b8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef3bd5a4a4d7ef222ab08d6dd4822db6bd9c51c6933b3549fde1be06d48edd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef3bd5a4a4d7ef222ab08d6dd4822db6bd9c51c6933b3549fde1be06d48edd67->enter($__internal_ef3bd5a4a4d7ef222ab08d6dd4822db6bd9c51c6933b3549fde1be06d48edd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a7b155fac6438d657da6869a5ca5f649727c082b56bab49c0363960e6721b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7b155fac6438d657da6869a5ca5f649727c082b56bab49c0363960e6721b6b->enter($__internal_6a7b155fac6438d657da6869a5ca5f649727c082b56bab49c0363960e6721b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6a7b155fac6438d657da6869a5ca5f649727c082b56bab49c0363960e6721b6b->leave($__internal_6a7b155fac6438d657da6869a5ca5f649727c082b56bab49c0363960e6721b6b_prof);

        
        $__internal_ef3bd5a4a4d7ef222ab08d6dd4822db6bd9c51c6933b3549fde1be06d48edd67->leave($__internal_ef3bd5a4a4d7ef222ab08d6dd4822db6bd9c51c6933b3549fde1be06d48edd67_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e353f45426cb86c7e76e3868d678b76581246801d840feadd6f308ad38c1bf65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e353f45426cb86c7e76e3868d678b76581246801d840feadd6f308ad38c1bf65->enter($__internal_e353f45426cb86c7e76e3868d678b76581246801d840feadd6f308ad38c1bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46dd8e08d0b597fe90b638aa4e25002b20d97850db30585a864cf2e8fc19b27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dd8e08d0b597fe90b638aa4e25002b20d97850db30585a864cf2e8fc19b27b->enter($__internal_46dd8e08d0b597fe90b638aa4e25002b20d97850db30585a864cf2e8fc19b27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_46dd8e08d0b597fe90b638aa4e25002b20d97850db30585a864cf2e8fc19b27b->leave($__internal_46dd8e08d0b597fe90b638aa4e25002b20d97850db30585a864cf2e8fc19b27b_prof);

        
        $__internal_e353f45426cb86c7e76e3868d678b76581246801d840feadd6f308ad38c1bf65->leave($__internal_e353f45426cb86c7e76e3868d678b76581246801d840feadd6f308ad38c1bf65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
