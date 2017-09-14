<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_31ff3c1b2e2edcaf99b2a303b9b612911cca62687dbefadf32b382450409afd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3f7e1065882338ff6d0b998ac096aa66e62ec0bb288deb49d4610d6074ef528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f7e1065882338ff6d0b998ac096aa66e62ec0bb288deb49d4610d6074ef528->enter($__internal_b3f7e1065882338ff6d0b998ac096aa66e62ec0bb288deb49d4610d6074ef528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1d0d9b33bc007dc522f4613345636b1aac105fec4e0e1c58dbec47f30a4c3018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0d9b33bc007dc522f4613345636b1aac105fec4e0e1c58dbec47f30a4c3018->enter($__internal_1d0d9b33bc007dc522f4613345636b1aac105fec4e0e1c58dbec47f30a4c3018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3f7e1065882338ff6d0b998ac096aa66e62ec0bb288deb49d4610d6074ef528->leave($__internal_b3f7e1065882338ff6d0b998ac096aa66e62ec0bb288deb49d4610d6074ef528_prof);

        
        $__internal_1d0d9b33bc007dc522f4613345636b1aac105fec4e0e1c58dbec47f30a4c3018->leave($__internal_1d0d9b33bc007dc522f4613345636b1aac105fec4e0e1c58dbec47f30a4c3018_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a7f92a2dd0e5731082c6ef61f9cd1d7d0a7475556c7105d1e280c54d65d17f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7f92a2dd0e5731082c6ef61f9cd1d7d0a7475556c7105d1e280c54d65d17f8->enter($__internal_9a7f92a2dd0e5731082c6ef61f9cd1d7d0a7475556c7105d1e280c54d65d17f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_de55e13c21d015ac457c3724e19a66bd7727f0775eb3f9a58303170ee4d20862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de55e13c21d015ac457c3724e19a66bd7727f0775eb3f9a58303170ee4d20862->enter($__internal_de55e13c21d015ac457c3724e19a66bd7727f0775eb3f9a58303170ee4d20862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_de55e13c21d015ac457c3724e19a66bd7727f0775eb3f9a58303170ee4d20862->leave($__internal_de55e13c21d015ac457c3724e19a66bd7727f0775eb3f9a58303170ee4d20862_prof);

        
        $__internal_9a7f92a2dd0e5731082c6ef61f9cd1d7d0a7475556c7105d1e280c54d65d17f8->leave($__internal_9a7f92a2dd0e5731082c6ef61f9cd1d7d0a7475556c7105d1e280c54d65d17f8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
