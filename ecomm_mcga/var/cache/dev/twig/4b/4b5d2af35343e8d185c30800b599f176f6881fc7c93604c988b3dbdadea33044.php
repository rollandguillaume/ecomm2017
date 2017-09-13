<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_e08f5486adde81758508c039e92a88b2a6e02760598351937924cc6e4e67a465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08f5486adde81758508c039e92a88b2a6e02760598351937924cc6e4e67a465->enter($__internal_e08f5486adde81758508c039e92a88b2a6e02760598351937924cc6e4e67a465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f54429e13457de61c2cde5fc43d320e863fcb9cb391c34d27886a025501c09af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54429e13457de61c2cde5fc43d320e863fcb9cb391c34d27886a025501c09af->enter($__internal_f54429e13457de61c2cde5fc43d320e863fcb9cb391c34d27886a025501c09af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e08f5486adde81758508c039e92a88b2a6e02760598351937924cc6e4e67a465->leave($__internal_e08f5486adde81758508c039e92a88b2a6e02760598351937924cc6e4e67a465_prof);

        
        $__internal_f54429e13457de61c2cde5fc43d320e863fcb9cb391c34d27886a025501c09af->leave($__internal_f54429e13457de61c2cde5fc43d320e863fcb9cb391c34d27886a025501c09af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c56208de34c783825fb86706e3fb52fa5b7415652a968c3ae5987e76103e5096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56208de34c783825fb86706e3fb52fa5b7415652a968c3ae5987e76103e5096->enter($__internal_c56208de34c783825fb86706e3fb52fa5b7415652a968c3ae5987e76103e5096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_375826b7d08a5cadc22b388f89b4ec5dd1bcd37687ab6deaefe113bb4e65363d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375826b7d08a5cadc22b388f89b4ec5dd1bcd37687ab6deaefe113bb4e65363d->enter($__internal_375826b7d08a5cadc22b388f89b4ec5dd1bcd37687ab6deaefe113bb4e65363d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_375826b7d08a5cadc22b388f89b4ec5dd1bcd37687ab6deaefe113bb4e65363d->leave($__internal_375826b7d08a5cadc22b388f89b4ec5dd1bcd37687ab6deaefe113bb4e65363d_prof);

        
        $__internal_c56208de34c783825fb86706e3fb52fa5b7415652a968c3ae5987e76103e5096->leave($__internal_c56208de34c783825fb86706e3fb52fa5b7415652a968c3ae5987e76103e5096_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e346249f9e5886bfad9870e7eeb3d3437377825e909470cb9ef76d12bdf79e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e346249f9e5886bfad9870e7eeb3d3437377825e909470cb9ef76d12bdf79e7b->enter($__internal_e346249f9e5886bfad9870e7eeb3d3437377825e909470cb9ef76d12bdf79e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ad11a7d7c7e42c0f86854dfecf3e68248733040e16201ff154bb269acd5b804f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad11a7d7c7e42c0f86854dfecf3e68248733040e16201ff154bb269acd5b804f->enter($__internal_ad11a7d7c7e42c0f86854dfecf3e68248733040e16201ff154bb269acd5b804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad11a7d7c7e42c0f86854dfecf3e68248733040e16201ff154bb269acd5b804f->leave($__internal_ad11a7d7c7e42c0f86854dfecf3e68248733040e16201ff154bb269acd5b804f_prof);

        
        $__internal_e346249f9e5886bfad9870e7eeb3d3437377825e909470cb9ef76d12bdf79e7b->leave($__internal_e346249f9e5886bfad9870e7eeb3d3437377825e909470cb9ef76d12bdf79e7b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38a0c159bdd44050377a234f8e750f3a90b259bb2cc3ace82319438733b5183e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a0c159bdd44050377a234f8e750f3a90b259bb2cc3ace82319438733b5183e->enter($__internal_38a0c159bdd44050377a234f8e750f3a90b259bb2cc3ace82319438733b5183e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2fabcf3330ec514073915c67757922b8266d08189cb16ad339e5fee7ffb7c04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fabcf3330ec514073915c67757922b8266d08189cb16ad339e5fee7ffb7c04a->enter($__internal_2fabcf3330ec514073915c67757922b8266d08189cb16ad339e5fee7ffb7c04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2fabcf3330ec514073915c67757922b8266d08189cb16ad339e5fee7ffb7c04a->leave($__internal_2fabcf3330ec514073915c67757922b8266d08189cb16ad339e5fee7ffb7c04a_prof);

        
        $__internal_38a0c159bdd44050377a234f8e750f3a90b259bb2cc3ace82319438733b5183e->leave($__internal_38a0c159bdd44050377a234f8e750f3a90b259bb2cc3ace82319438733b5183e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
