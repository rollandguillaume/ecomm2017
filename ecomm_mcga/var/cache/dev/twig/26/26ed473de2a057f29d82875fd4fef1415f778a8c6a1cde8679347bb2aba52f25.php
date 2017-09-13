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
        $__internal_b6390bc070d46fb17f2b556bd2b81b5df948c24f150a23337da9dbe36a398e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6390bc070d46fb17f2b556bd2b81b5df948c24f150a23337da9dbe36a398e04->enter($__internal_b6390bc070d46fb17f2b556bd2b81b5df948c24f150a23337da9dbe36a398e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_409a17ad7361f3e11c2f5b410529ed45860d0ac7b1e69c99c40ea9ee26c5a376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409a17ad7361f3e11c2f5b410529ed45860d0ac7b1e69c99c40ea9ee26c5a376->enter($__internal_409a17ad7361f3e11c2f5b410529ed45860d0ac7b1e69c99c40ea9ee26c5a376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6390bc070d46fb17f2b556bd2b81b5df948c24f150a23337da9dbe36a398e04->leave($__internal_b6390bc070d46fb17f2b556bd2b81b5df948c24f150a23337da9dbe36a398e04_prof);

        
        $__internal_409a17ad7361f3e11c2f5b410529ed45860d0ac7b1e69c99c40ea9ee26c5a376->leave($__internal_409a17ad7361f3e11c2f5b410529ed45860d0ac7b1e69c99c40ea9ee26c5a376_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce7f8d5e98fbc72a77a6d90f8989519e3248572773ea51ae2166c0f7603122b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7f8d5e98fbc72a77a6d90f8989519e3248572773ea51ae2166c0f7603122b2->enter($__internal_ce7f8d5e98fbc72a77a6d90f8989519e3248572773ea51ae2166c0f7603122b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_faec7a334fb74f346a32beaf7ce0c7828099d8cc5ea17c73a72008f32da13463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faec7a334fb74f346a32beaf7ce0c7828099d8cc5ea17c73a72008f32da13463->enter($__internal_faec7a334fb74f346a32beaf7ce0c7828099d8cc5ea17c73a72008f32da13463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_faec7a334fb74f346a32beaf7ce0c7828099d8cc5ea17c73a72008f32da13463->leave($__internal_faec7a334fb74f346a32beaf7ce0c7828099d8cc5ea17c73a72008f32da13463_prof);

        
        $__internal_ce7f8d5e98fbc72a77a6d90f8989519e3248572773ea51ae2166c0f7603122b2->leave($__internal_ce7f8d5e98fbc72a77a6d90f8989519e3248572773ea51ae2166c0f7603122b2_prof);

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
