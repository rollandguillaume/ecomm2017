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
        $__internal_891b0ddb232cde4b05d8643fa8e65b3f2b68effca51f1317bbaab289c3c6e4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891b0ddb232cde4b05d8643fa8e65b3f2b68effca51f1317bbaab289c3c6e4e2->enter($__internal_891b0ddb232cde4b05d8643fa8e65b3f2b68effca51f1317bbaab289c3c6e4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1146152cad997be8d5eda72c51e4af21bb07f5449be79175e6d229d3bfc9051c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1146152cad997be8d5eda72c51e4af21bb07f5449be79175e6d229d3bfc9051c->enter($__internal_1146152cad997be8d5eda72c51e4af21bb07f5449be79175e6d229d3bfc9051c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_891b0ddb232cde4b05d8643fa8e65b3f2b68effca51f1317bbaab289c3c6e4e2->leave($__internal_891b0ddb232cde4b05d8643fa8e65b3f2b68effca51f1317bbaab289c3c6e4e2_prof);

        
        $__internal_1146152cad997be8d5eda72c51e4af21bb07f5449be79175e6d229d3bfc9051c->leave($__internal_1146152cad997be8d5eda72c51e4af21bb07f5449be79175e6d229d3bfc9051c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_06e831253b32aaef29c11cffb2a8508733ca4eeb43a269b30ec746b8c2415648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e831253b32aaef29c11cffb2a8508733ca4eeb43a269b30ec746b8c2415648->enter($__internal_06e831253b32aaef29c11cffb2a8508733ca4eeb43a269b30ec746b8c2415648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6d6c266e746b252212b06347dad1396555801a6f793ac7e8625b14309cdd3048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6c266e746b252212b06347dad1396555801a6f793ac7e8625b14309cdd3048->enter($__internal_6d6c266e746b252212b06347dad1396555801a6f793ac7e8625b14309cdd3048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6d6c266e746b252212b06347dad1396555801a6f793ac7e8625b14309cdd3048->leave($__internal_6d6c266e746b252212b06347dad1396555801a6f793ac7e8625b14309cdd3048_prof);

        
        $__internal_06e831253b32aaef29c11cffb2a8508733ca4eeb43a269b30ec746b8c2415648->leave($__internal_06e831253b32aaef29c11cffb2a8508733ca4eeb43a269b30ec746b8c2415648_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b572787f8a08180c0328dd426ae2df6798c9424764f7d8a8e105d82f4937ca19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b572787f8a08180c0328dd426ae2df6798c9424764f7d8a8e105d82f4937ca19->enter($__internal_b572787f8a08180c0328dd426ae2df6798c9424764f7d8a8e105d82f4937ca19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_660cc7f2508e17f6e6d8c73ad6996287b8aa44a5a7e73027d3432987d7408b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660cc7f2508e17f6e6d8c73ad6996287b8aa44a5a7e73027d3432987d7408b79->enter($__internal_660cc7f2508e17f6e6d8c73ad6996287b8aa44a5a7e73027d3432987d7408b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_660cc7f2508e17f6e6d8c73ad6996287b8aa44a5a7e73027d3432987d7408b79->leave($__internal_660cc7f2508e17f6e6d8c73ad6996287b8aa44a5a7e73027d3432987d7408b79_prof);

        
        $__internal_b572787f8a08180c0328dd426ae2df6798c9424764f7d8a8e105d82f4937ca19->leave($__internal_b572787f8a08180c0328dd426ae2df6798c9424764f7d8a8e105d82f4937ca19_prof);

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
