<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1e734c42058fbbc91888a4c54ed4dc283303a60b29cd4f5f7dbe8d6428cca2b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbc7e863faba18c3252460a90ce79f43c94905120d3a626e96083fd9f291ac40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc7e863faba18c3252460a90ce79f43c94905120d3a626e96083fd9f291ac40->enter($__internal_fbc7e863faba18c3252460a90ce79f43c94905120d3a626e96083fd9f291ac40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_88191ab116993c25d4f2f85a4bca4f0d0166e885e24803731eaa34199db9e6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88191ab116993c25d4f2f85a4bca4f0d0166e885e24803731eaa34199db9e6a5->enter($__internal_88191ab116993c25d4f2f85a4bca4f0d0166e885e24803731eaa34199db9e6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc7e863faba18c3252460a90ce79f43c94905120d3a626e96083fd9f291ac40->leave($__internal_fbc7e863faba18c3252460a90ce79f43c94905120d3a626e96083fd9f291ac40_prof);

        
        $__internal_88191ab116993c25d4f2f85a4bca4f0d0166e885e24803731eaa34199db9e6a5->leave($__internal_88191ab116993c25d4f2f85a4bca4f0d0166e885e24803731eaa34199db9e6a5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cc5636eb94af1b24e1b368d45ca40099652860260e4a882d5d19c8269d8da03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5636eb94af1b24e1b368d45ca40099652860260e4a882d5d19c8269d8da03e->enter($__internal_cc5636eb94af1b24e1b368d45ca40099652860260e4a882d5d19c8269d8da03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_19a81f12ab4ed1f2e79ce4f1fde6f4ee7f930d8c79616e53078bcace980d1bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a81f12ab4ed1f2e79ce4f1fde6f4ee7f930d8c79616e53078bcace980d1bc2->enter($__internal_19a81f12ab4ed1f2e79ce4f1fde6f4ee7f930d8c79616e53078bcace980d1bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_19a81f12ab4ed1f2e79ce4f1fde6f4ee7f930d8c79616e53078bcace980d1bc2->leave($__internal_19a81f12ab4ed1f2e79ce4f1fde6f4ee7f930d8c79616e53078bcace980d1bc2_prof);

        
        $__internal_cc5636eb94af1b24e1b368d45ca40099652860260e4a882d5d19c8269d8da03e->leave($__internal_cc5636eb94af1b24e1b368d45ca40099652860260e4a882d5d19c8269d8da03e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ed3fd2544cd68f575a4fc0c4958a132a619025a3493d1e1cf73fd4f73653de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed3fd2544cd68f575a4fc0c4958a132a619025a3493d1e1cf73fd4f73653de0->enter($__internal_0ed3fd2544cd68f575a4fc0c4958a132a619025a3493d1e1cf73fd4f73653de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_795421ef825d01f04338611dc94631df1853818c134e9267fadf3416d437a013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795421ef825d01f04338611dc94631df1853818c134e9267fadf3416d437a013->enter($__internal_795421ef825d01f04338611dc94631df1853818c134e9267fadf3416d437a013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_795421ef825d01f04338611dc94631df1853818c134e9267fadf3416d437a013->leave($__internal_795421ef825d01f04338611dc94631df1853818c134e9267fadf3416d437a013_prof);

        
        $__internal_0ed3fd2544cd68f575a4fc0c4958a132a619025a3493d1e1cf73fd4f73653de0->leave($__internal_0ed3fd2544cd68f575a4fc0c4958a132a619025a3493d1e1cf73fd4f73653de0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
