<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_386c508420062b06472eedd34b13d3aab2727acf8374b086f1752be5a5990046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386c508420062b06472eedd34b13d3aab2727acf8374b086f1752be5a5990046->enter($__internal_386c508420062b06472eedd34b13d3aab2727acf8374b086f1752be5a5990046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cb9e37808b15cea2ac15bd1fffcfd56a82edb76861b49dc145b1a4f964a28dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9e37808b15cea2ac15bd1fffcfd56a82edb76861b49dc145b1a4f964a28dbe->enter($__internal_cb9e37808b15cea2ac15bd1fffcfd56a82edb76861b49dc145b1a4f964a28dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386c508420062b06472eedd34b13d3aab2727acf8374b086f1752be5a5990046->leave($__internal_386c508420062b06472eedd34b13d3aab2727acf8374b086f1752be5a5990046_prof);

        
        $__internal_cb9e37808b15cea2ac15bd1fffcfd56a82edb76861b49dc145b1a4f964a28dbe->leave($__internal_cb9e37808b15cea2ac15bd1fffcfd56a82edb76861b49dc145b1a4f964a28dbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa5cee0867d44a17c766e44c43a3a7a555c9e1c05f413649f06ffec73edad875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5cee0867d44a17c766e44c43a3a7a555c9e1c05f413649f06ffec73edad875->enter($__internal_aa5cee0867d44a17c766e44c43a3a7a555c9e1c05f413649f06ffec73edad875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81d0ce16c08ed695e06855fc967c7799a3defd99a15c00ef55d678d9cd763de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d0ce16c08ed695e06855fc967c7799a3defd99a15c00ef55d678d9cd763de6->enter($__internal_81d0ce16c08ed695e06855fc967c7799a3defd99a15c00ef55d678d9cd763de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_81d0ce16c08ed695e06855fc967c7799a3defd99a15c00ef55d678d9cd763de6->leave($__internal_81d0ce16c08ed695e06855fc967c7799a3defd99a15c00ef55d678d9cd763de6_prof);

        
        $__internal_aa5cee0867d44a17c766e44c43a3a7a555c9e1c05f413649f06ffec73edad875->leave($__internal_aa5cee0867d44a17c766e44c43a3a7a555c9e1c05f413649f06ffec73edad875_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_336e83af82a184b8ec100f4900f4a18f2d0102d5d34edbd2ab930ad0680f9219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_336e83af82a184b8ec100f4900f4a18f2d0102d5d34edbd2ab930ad0680f9219->enter($__internal_336e83af82a184b8ec100f4900f4a18f2d0102d5d34edbd2ab930ad0680f9219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1dc0e57e7353040102a80096d8184953ab4bb20051d93cb73f49d4e864d8d7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc0e57e7353040102a80096d8184953ab4bb20051d93cb73f49d4e864d8d7e1->enter($__internal_1dc0e57e7353040102a80096d8184953ab4bb20051d93cb73f49d4e864d8d7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1dc0e57e7353040102a80096d8184953ab4bb20051d93cb73f49d4e864d8d7e1->leave($__internal_1dc0e57e7353040102a80096d8184953ab4bb20051d93cb73f49d4e864d8d7e1_prof);

        
        $__internal_336e83af82a184b8ec100f4900f4a18f2d0102d5d34edbd2ab930ad0680f9219->leave($__internal_336e83af82a184b8ec100f4900f4a18f2d0102d5d34edbd2ab930ad0680f9219_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d3ec2fe9333adc0a664d1a14ad9465ef5d90196752417c91f2f6d52040eb894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3ec2fe9333adc0a664d1a14ad9465ef5d90196752417c91f2f6d52040eb894->enter($__internal_5d3ec2fe9333adc0a664d1a14ad9465ef5d90196752417c91f2f6d52040eb894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e9fd1a8673678c3807f31296c223ff9d171ba0de1c6160c4f685bfcf6ffe9476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fd1a8673678c3807f31296c223ff9d171ba0de1c6160c4f685bfcf6ffe9476->enter($__internal_e9fd1a8673678c3807f31296c223ff9d171ba0de1c6160c4f685bfcf6ffe9476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e9fd1a8673678c3807f31296c223ff9d171ba0de1c6160c4f685bfcf6ffe9476->leave($__internal_e9fd1a8673678c3807f31296c223ff9d171ba0de1c6160c4f685bfcf6ffe9476_prof);

        
        $__internal_5d3ec2fe9333adc0a664d1a14ad9465ef5d90196752417c91f2f6d52040eb894->leave($__internal_5d3ec2fe9333adc0a664d1a14ad9465ef5d90196752417c91f2f6d52040eb894_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/home/rollandguillaume/Desktop/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
