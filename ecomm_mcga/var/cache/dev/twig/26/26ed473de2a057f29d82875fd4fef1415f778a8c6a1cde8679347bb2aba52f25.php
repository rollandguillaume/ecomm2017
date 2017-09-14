<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_31ff3c1b2e2edcaf99b2a303b9b612911cca62687dbefadf32b382450409afd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_36a09294638ea46ba8c609deb5f02ae02c884d748896d47fae0e9f4ce291709c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a09294638ea46ba8c609deb5f02ae02c884d748896d47fae0e9f4ce291709c->enter($__internal_36a09294638ea46ba8c609deb5f02ae02c884d748896d47fae0e9f4ce291709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_36dd6db84a084983992cd741713768592483a3a718fa7ce8a96941a5731811f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dd6db84a084983992cd741713768592483a3a718fa7ce8a96941a5731811f0->enter($__internal_36dd6db84a084983992cd741713768592483a3a718fa7ce8a96941a5731811f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a09294638ea46ba8c609deb5f02ae02c884d748896d47fae0e9f4ce291709c->leave($__internal_36a09294638ea46ba8c609deb5f02ae02c884d748896d47fae0e9f4ce291709c_prof);

        
        $__internal_36dd6db84a084983992cd741713768592483a3a718fa7ce8a96941a5731811f0->leave($__internal_36dd6db84a084983992cd741713768592483a3a718fa7ce8a96941a5731811f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e2e9dff129a2f8850673d830b0d896275763300426c477326d3d2a85c61eafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2e9dff129a2f8850673d830b0d896275763300426c477326d3d2a85c61eafb->enter($__internal_0e2e9dff129a2f8850673d830b0d896275763300426c477326d3d2a85c61eafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8526406381a1db117e1ea260017bfbb912b0b00268d098a65159d48f2e87ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8526406381a1db117e1ea260017bfbb912b0b00268d098a65159d48f2e87ab6->enter($__internal_a8526406381a1db117e1ea260017bfbb912b0b00268d098a65159d48f2e87ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a8526406381a1db117e1ea260017bfbb912b0b00268d098a65159d48f2e87ab6->leave($__internal_a8526406381a1db117e1ea260017bfbb912b0b00268d098a65159d48f2e87ab6_prof);

        
        $__internal_0e2e9dff129a2f8850673d830b0d896275763300426c477326d3d2a85c61eafb->leave($__internal_0e2e9dff129a2f8850673d830b0d896275763300426c477326d3d2a85c61eafb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/home/rollandguillaume/Desktop/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
