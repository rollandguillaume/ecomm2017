<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cfadc5fb913f075553e31076462ffc0d420a56e7ef76a72781509b23ef1fa66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfadc5fb913f075553e31076462ffc0d420a56e7ef76a72781509b23ef1fa66a->enter($__internal_cfadc5fb913f075553e31076462ffc0d420a56e7ef76a72781509b23ef1fa66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ea74927688d1253889b615fce05a03cba3e56240120fe1bea47a84ab86252a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea74927688d1253889b615fce05a03cba3e56240120fe1bea47a84ab86252a7c->enter($__internal_ea74927688d1253889b615fce05a03cba3e56240120fe1bea47a84ab86252a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfadc5fb913f075553e31076462ffc0d420a56e7ef76a72781509b23ef1fa66a->leave($__internal_cfadc5fb913f075553e31076462ffc0d420a56e7ef76a72781509b23ef1fa66a_prof);

        
        $__internal_ea74927688d1253889b615fce05a03cba3e56240120fe1bea47a84ab86252a7c->leave($__internal_ea74927688d1253889b615fce05a03cba3e56240120fe1bea47a84ab86252a7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c988cb14ebdd98e0b9a869301cade5149cb57618f93fc2ac9e88adbe7442e31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c988cb14ebdd98e0b9a869301cade5149cb57618f93fc2ac9e88adbe7442e31c->enter($__internal_c988cb14ebdd98e0b9a869301cade5149cb57618f93fc2ac9e88adbe7442e31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2d0f81c80999e1b2e7501afdca9512b1b004b9d2e487416bc1352f9cd1eda00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d0f81c80999e1b2e7501afdca9512b1b004b9d2e487416bc1352f9cd1eda00->enter($__internal_b2d0f81c80999e1b2e7501afdca9512b1b004b9d2e487416bc1352f9cd1eda00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b2d0f81c80999e1b2e7501afdca9512b1b004b9d2e487416bc1352f9cd1eda00->leave($__internal_b2d0f81c80999e1b2e7501afdca9512b1b004b9d2e487416bc1352f9cd1eda00_prof);

        
        $__internal_c988cb14ebdd98e0b9a869301cade5149cb57618f93fc2ac9e88adbe7442e31c->leave($__internal_c988cb14ebdd98e0b9a869301cade5149cb57618f93fc2ac9e88adbe7442e31c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_444a7c115f27005c4984f0bc15d37b1051b863d970413cdd13dd0c0dfb79cebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444a7c115f27005c4984f0bc15d37b1051b863d970413cdd13dd0c0dfb79cebb->enter($__internal_444a7c115f27005c4984f0bc15d37b1051b863d970413cdd13dd0c0dfb79cebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e31d5a8cf3f4aff0bd2c858b559ac8f6b5b21225fe965adf1328ee18f7cb04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e31d5a8cf3f4aff0bd2c858b559ac8f6b5b21225fe965adf1328ee18f7cb04f->enter($__internal_4e31d5a8cf3f4aff0bd2c858b559ac8f6b5b21225fe965adf1328ee18f7cb04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4e31d5a8cf3f4aff0bd2c858b559ac8f6b5b21225fe965adf1328ee18f7cb04f->leave($__internal_4e31d5a8cf3f4aff0bd2c858b559ac8f6b5b21225fe965adf1328ee18f7cb04f_prof);

        
        $__internal_444a7c115f27005c4984f0bc15d37b1051b863d970413cdd13dd0c0dfb79cebb->leave($__internal_444a7c115f27005c4984f0bc15d37b1051b863d970413cdd13dd0c0dfb79cebb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f55b8be8ec1acecc56e508446e9663e5dcdfba9ac1837d7157840ed2133df920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55b8be8ec1acecc56e508446e9663e5dcdfba9ac1837d7157840ed2133df920->enter($__internal_f55b8be8ec1acecc56e508446e9663e5dcdfba9ac1837d7157840ed2133df920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87bc9f1a4404c4595fbeb0d3ea8cf223a8e89d819554e68892f91596bf6689a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bc9f1a4404c4595fbeb0d3ea8cf223a8e89d819554e68892f91596bf6689a8->enter($__internal_87bc9f1a4404c4595fbeb0d3ea8cf223a8e89d819554e68892f91596bf6689a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_87bc9f1a4404c4595fbeb0d3ea8cf223a8e89d819554e68892f91596bf6689a8->leave($__internal_87bc9f1a4404c4595fbeb0d3ea8cf223a8e89d819554e68892f91596bf6689a8_prof);

        
        $__internal_f55b8be8ec1acecc56e508446e9663e5dcdfba9ac1837d7157840ed2133df920->leave($__internal_f55b8be8ec1acecc56e508446e9663e5dcdfba9ac1837d7157840ed2133df920_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
