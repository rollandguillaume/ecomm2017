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
        $__internal_66e16434fb5feb65ae4662d7c0f47fc80ebac7280920c6567bf60866dc2032d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e16434fb5feb65ae4662d7c0f47fc80ebac7280920c6567bf60866dc2032d5->enter($__internal_66e16434fb5feb65ae4662d7c0f47fc80ebac7280920c6567bf60866dc2032d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_fa05f3d4edd304cd81827fcb025631e0b21e1ad1691ea12c8e9bb1c31787a5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa05f3d4edd304cd81827fcb025631e0b21e1ad1691ea12c8e9bb1c31787a5c2->enter($__internal_fa05f3d4edd304cd81827fcb025631e0b21e1ad1691ea12c8e9bb1c31787a5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e16434fb5feb65ae4662d7c0f47fc80ebac7280920c6567bf60866dc2032d5->leave($__internal_66e16434fb5feb65ae4662d7c0f47fc80ebac7280920c6567bf60866dc2032d5_prof);

        
        $__internal_fa05f3d4edd304cd81827fcb025631e0b21e1ad1691ea12c8e9bb1c31787a5c2->leave($__internal_fa05f3d4edd304cd81827fcb025631e0b21e1ad1691ea12c8e9bb1c31787a5c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_705352c02f99bd4793bbf017f559cdbd7243c3b7d6a76c9689f82db1d967807b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705352c02f99bd4793bbf017f559cdbd7243c3b7d6a76c9689f82db1d967807b->enter($__internal_705352c02f99bd4793bbf017f559cdbd7243c3b7d6a76c9689f82db1d967807b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0a86018152f63f75f910d2e1c8a4808bf3244005215347280c623011e63651e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a86018152f63f75f910d2e1c8a4808bf3244005215347280c623011e63651e1->enter($__internal_0a86018152f63f75f910d2e1c8a4808bf3244005215347280c623011e63651e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0a86018152f63f75f910d2e1c8a4808bf3244005215347280c623011e63651e1->leave($__internal_0a86018152f63f75f910d2e1c8a4808bf3244005215347280c623011e63651e1_prof);

        
        $__internal_705352c02f99bd4793bbf017f559cdbd7243c3b7d6a76c9689f82db1d967807b->leave($__internal_705352c02f99bd4793bbf017f559cdbd7243c3b7d6a76c9689f82db1d967807b_prof);

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
