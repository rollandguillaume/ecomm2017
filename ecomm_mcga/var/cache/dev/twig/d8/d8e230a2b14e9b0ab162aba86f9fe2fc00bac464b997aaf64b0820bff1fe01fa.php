<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e4e61d1ca61e041a7465b70c76386d2ba013a7f12b8eed265777b2060f5d44d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e11b34ad07d1fe3087c08b50474254c1dedcd52250169807e3f5e5cc1d73f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e11b34ad07d1fe3087c08b50474254c1dedcd52250169807e3f5e5cc1d73f67->enter($__internal_7e11b34ad07d1fe3087c08b50474254c1dedcd52250169807e3f5e5cc1d73f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b78c1502d3dbf4aa0669682155de5875cd968677c8788a2e1cbabe3f9842d631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78c1502d3dbf4aa0669682155de5875cd968677c8788a2e1cbabe3f9842d631->enter($__internal_b78c1502d3dbf4aa0669682155de5875cd968677c8788a2e1cbabe3f9842d631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e11b34ad07d1fe3087c08b50474254c1dedcd52250169807e3f5e5cc1d73f67->leave($__internal_7e11b34ad07d1fe3087c08b50474254c1dedcd52250169807e3f5e5cc1d73f67_prof);

        
        $__internal_b78c1502d3dbf4aa0669682155de5875cd968677c8788a2e1cbabe3f9842d631->leave($__internal_b78c1502d3dbf4aa0669682155de5875cd968677c8788a2e1cbabe3f9842d631_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_560936cb5d821ddd4a2ac811e13b50d6d8aa7df8330adaa12d4375e02f42fe71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560936cb5d821ddd4a2ac811e13b50d6d8aa7df8330adaa12d4375e02f42fe71->enter($__internal_560936cb5d821ddd4a2ac811e13b50d6d8aa7df8330adaa12d4375e02f42fe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7ff9f56e2f1b9018ab45f4d4bf85632c749a18f59533c096592c8c40b8e3bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ff9f56e2f1b9018ab45f4d4bf85632c749a18f59533c096592c8c40b8e3bcf->enter($__internal_f7ff9f56e2f1b9018ab45f4d4bf85632c749a18f59533c096592c8c40b8e3bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f7ff9f56e2f1b9018ab45f4d4bf85632c749a18f59533c096592c8c40b8e3bcf->leave($__internal_f7ff9f56e2f1b9018ab45f4d4bf85632c749a18f59533c096592c8c40b8e3bcf_prof);

        
        $__internal_560936cb5d821ddd4a2ac811e13b50d6d8aa7df8330adaa12d4375e02f42fe71->leave($__internal_560936cb5d821ddd4a2ac811e13b50d6d8aa7df8330adaa12d4375e02f42fe71_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d1ea9645d3bc05d63dd0f08210b222619a76ddbacf3d2fd083832f111e5af75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1ea9645d3bc05d63dd0f08210b222619a76ddbacf3d2fd083832f111e5af75->enter($__internal_0d1ea9645d3bc05d63dd0f08210b222619a76ddbacf3d2fd083832f111e5af75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08217fe6b4db204a9932cd0426991d4306fe0a97d4cf3a42d23590ab326f3e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08217fe6b4db204a9932cd0426991d4306fe0a97d4cf3a42d23590ab326f3e9a->enter($__internal_08217fe6b4db204a9932cd0426991d4306fe0a97d4cf3a42d23590ab326f3e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_08217fe6b4db204a9932cd0426991d4306fe0a97d4cf3a42d23590ab326f3e9a->leave($__internal_08217fe6b4db204a9932cd0426991d4306fe0a97d4cf3a42d23590ab326f3e9a_prof);

        
        $__internal_0d1ea9645d3bc05d63dd0f08210b222619a76ddbacf3d2fd083832f111e5af75->leave($__internal_0d1ea9645d3bc05d63dd0f08210b222619a76ddbacf3d2fd083832f111e5af75_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
