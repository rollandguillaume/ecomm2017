<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b9d1b17705ac9e4847598e11da598c5bc6bfce97b7e4a4d98c2cf4c2d18c8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_8a9b358b834c9a3fcb49db2ac436f6414600368b435d1ac18095c752b5b77368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9b358b834c9a3fcb49db2ac436f6414600368b435d1ac18095c752b5b77368->enter($__internal_8a9b358b834c9a3fcb49db2ac436f6414600368b435d1ac18095c752b5b77368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5112e33d457328eedebce437b0ef1abb6cc7e4b4d09eabaeaa1499c3f077c858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5112e33d457328eedebce437b0ef1abb6cc7e4b4d09eabaeaa1499c3f077c858->enter($__internal_5112e33d457328eedebce437b0ef1abb6cc7e4b4d09eabaeaa1499c3f077c858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9b358b834c9a3fcb49db2ac436f6414600368b435d1ac18095c752b5b77368->leave($__internal_8a9b358b834c9a3fcb49db2ac436f6414600368b435d1ac18095c752b5b77368_prof);

        
        $__internal_5112e33d457328eedebce437b0ef1abb6cc7e4b4d09eabaeaa1499c3f077c858->leave($__internal_5112e33d457328eedebce437b0ef1abb6cc7e4b4d09eabaeaa1499c3f077c858_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78bab8dfd6b461397adf684bc31a6a84e94a26d824ebba3671b8d0a9aafc9655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bab8dfd6b461397adf684bc31a6a84e94a26d824ebba3671b8d0a9aafc9655->enter($__internal_78bab8dfd6b461397adf684bc31a6a84e94a26d824ebba3671b8d0a9aafc9655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_896417fb84d6ed812d94dc882056eceb2830e8f0da834170b72839bd1b541bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896417fb84d6ed812d94dc882056eceb2830e8f0da834170b72839bd1b541bc9->enter($__internal_896417fb84d6ed812d94dc882056eceb2830e8f0da834170b72839bd1b541bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_896417fb84d6ed812d94dc882056eceb2830e8f0da834170b72839bd1b541bc9->leave($__internal_896417fb84d6ed812d94dc882056eceb2830e8f0da834170b72839bd1b541bc9_prof);

        
        $__internal_78bab8dfd6b461397adf684bc31a6a84e94a26d824ebba3671b8d0a9aafc9655->leave($__internal_78bab8dfd6b461397adf684bc31a6a84e94a26d824ebba3671b8d0a9aafc9655_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_da5fc1d7b6000af0dd7b3c5db9d4d51a184e40d35ceed238e5808441d5c24525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5fc1d7b6000af0dd7b3c5db9d4d51a184e40d35ceed238e5808441d5c24525->enter($__internal_da5fc1d7b6000af0dd7b3c5db9d4d51a184e40d35ceed238e5808441d5c24525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7fc812e5df174e97a669b4231445502825bb6e85cf22671f4af4136ac331ec69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc812e5df174e97a669b4231445502825bb6e85cf22671f4af4136ac331ec69->enter($__internal_7fc812e5df174e97a669b4231445502825bb6e85cf22671f4af4136ac331ec69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_7fc812e5df174e97a669b4231445502825bb6e85cf22671f4af4136ac331ec69->leave($__internal_7fc812e5df174e97a669b4231445502825bb6e85cf22671f4af4136ac331ec69_prof);

        
        $__internal_da5fc1d7b6000af0dd7b3c5db9d4d51a184e40d35ceed238e5808441d5c24525->leave($__internal_da5fc1d7b6000af0dd7b3c5db9d4d51a184e40d35ceed238e5808441d5c24525_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e28903c03cca159f313aefe5edcc22a26491cc2748cd63de8ed13e68a6d819c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e28903c03cca159f313aefe5edcc22a26491cc2748cd63de8ed13e68a6d819c->enter($__internal_9e28903c03cca159f313aefe5edcc22a26491cc2748cd63de8ed13e68a6d819c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0391e6d733800af87e794e0e8fd83dbe8c7bbca730022b98d2a35353ef890a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0391e6d733800af87e794e0e8fd83dbe8c7bbca730022b98d2a35353ef890a0e->enter($__internal_0391e6d733800af87e794e0e8fd83dbe8c7bbca730022b98d2a35353ef890a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0391e6d733800af87e794e0e8fd83dbe8c7bbca730022b98d2a35353ef890a0e->leave($__internal_0391e6d733800af87e794e0e8fd83dbe8c7bbca730022b98d2a35353ef890a0e_prof);

        
        $__internal_9e28903c03cca159f313aefe5edcc22a26491cc2748cd63de8ed13e68a6d819c->leave($__internal_9e28903c03cca159f313aefe5edcc22a26491cc2748cd63de8ed13e68a6d819c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
