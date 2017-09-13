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
        $__internal_ce031da0da2ec0494ec7736fbff5bfba2e86527602bd1743e7426b3541b8dfec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce031da0da2ec0494ec7736fbff5bfba2e86527602bd1743e7426b3541b8dfec->enter($__internal_ce031da0da2ec0494ec7736fbff5bfba2e86527602bd1743e7426b3541b8dfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a7a049b24ae652b4daab6636c4120e085881b70f1084f4285b102e688b985ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a049b24ae652b4daab6636c4120e085881b70f1084f4285b102e688b985ade->enter($__internal_a7a049b24ae652b4daab6636c4120e085881b70f1084f4285b102e688b985ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce031da0da2ec0494ec7736fbff5bfba2e86527602bd1743e7426b3541b8dfec->leave($__internal_ce031da0da2ec0494ec7736fbff5bfba2e86527602bd1743e7426b3541b8dfec_prof);

        
        $__internal_a7a049b24ae652b4daab6636c4120e085881b70f1084f4285b102e688b985ade->leave($__internal_a7a049b24ae652b4daab6636c4120e085881b70f1084f4285b102e688b985ade_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04680c0f0c5ba12ff7448057befc04b5909c388b5dd66fe1d0971d5598282ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04680c0f0c5ba12ff7448057befc04b5909c388b5dd66fe1d0971d5598282ae2->enter($__internal_04680c0f0c5ba12ff7448057befc04b5909c388b5dd66fe1d0971d5598282ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a2a252aae6f739091e96490ee42efd4a1652f1755a6505e48aacb95cacc6246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2a252aae6f739091e96490ee42efd4a1652f1755a6505e48aacb95cacc6246->enter($__internal_3a2a252aae6f739091e96490ee42efd4a1652f1755a6505e48aacb95cacc6246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3a2a252aae6f739091e96490ee42efd4a1652f1755a6505e48aacb95cacc6246->leave($__internal_3a2a252aae6f739091e96490ee42efd4a1652f1755a6505e48aacb95cacc6246_prof);

        
        $__internal_04680c0f0c5ba12ff7448057befc04b5909c388b5dd66fe1d0971d5598282ae2->leave($__internal_04680c0f0c5ba12ff7448057befc04b5909c388b5dd66fe1d0971d5598282ae2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_70e75425ab7dc4cab900f9369259a076c59e27b1977d68b68f64dd1ba443793d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e75425ab7dc4cab900f9369259a076c59e27b1977d68b68f64dd1ba443793d->enter($__internal_70e75425ab7dc4cab900f9369259a076c59e27b1977d68b68f64dd1ba443793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c25fe441af5029dd213ef7b071984331eae40dd9346203cd39332dfda2c7f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c25fe441af5029dd213ef7b071984331eae40dd9346203cd39332dfda2c7f14->enter($__internal_3c25fe441af5029dd213ef7b071984331eae40dd9346203cd39332dfda2c7f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c25fe441af5029dd213ef7b071984331eae40dd9346203cd39332dfda2c7f14->leave($__internal_3c25fe441af5029dd213ef7b071984331eae40dd9346203cd39332dfda2c7f14_prof);

        
        $__internal_70e75425ab7dc4cab900f9369259a076c59e27b1977d68b68f64dd1ba443793d->leave($__internal_70e75425ab7dc4cab900f9369259a076c59e27b1977d68b68f64dd1ba443793d_prof);

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
