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
        $__internal_03fe936c3e3c32c13cba00a7678ca4745501be67c88ff6fed9d2c512d82d2950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fe936c3e3c32c13cba00a7678ca4745501be67c88ff6fed9d2c512d82d2950->enter($__internal_03fe936c3e3c32c13cba00a7678ca4745501be67c88ff6fed9d2c512d82d2950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_6323cd25871a6d10c75df55d99198f8d5100fdf61cef7cc741b60a33426144e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6323cd25871a6d10c75df55d99198f8d5100fdf61cef7cc741b60a33426144e1->enter($__internal_6323cd25871a6d10c75df55d99198f8d5100fdf61cef7cc741b60a33426144e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03fe936c3e3c32c13cba00a7678ca4745501be67c88ff6fed9d2c512d82d2950->leave($__internal_03fe936c3e3c32c13cba00a7678ca4745501be67c88ff6fed9d2c512d82d2950_prof);

        
        $__internal_6323cd25871a6d10c75df55d99198f8d5100fdf61cef7cc741b60a33426144e1->leave($__internal_6323cd25871a6d10c75df55d99198f8d5100fdf61cef7cc741b60a33426144e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54349a3df245bb5e65567ee0c23b1487733248db680488b05172072a70fa409d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54349a3df245bb5e65567ee0c23b1487733248db680488b05172072a70fa409d->enter($__internal_54349a3df245bb5e65567ee0c23b1487733248db680488b05172072a70fa409d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_762e2cf1c5a885a224cc5595fe4f4a7f6b2181f70d4857b62d74ea95c77904e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762e2cf1c5a885a224cc5595fe4f4a7f6b2181f70d4857b62d74ea95c77904e9->enter($__internal_762e2cf1c5a885a224cc5595fe4f4a7f6b2181f70d4857b62d74ea95c77904e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_762e2cf1c5a885a224cc5595fe4f4a7f6b2181f70d4857b62d74ea95c77904e9->leave($__internal_762e2cf1c5a885a224cc5595fe4f4a7f6b2181f70d4857b62d74ea95c77904e9_prof);

        
        $__internal_54349a3df245bb5e65567ee0c23b1487733248db680488b05172072a70fa409d->leave($__internal_54349a3df245bb5e65567ee0c23b1487733248db680488b05172072a70fa409d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e805c90011dfac4f05cd536de898d008f328c0781b128c2bfc4bbb142b6ee2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e805c90011dfac4f05cd536de898d008f328c0781b128c2bfc4bbb142b6ee2d->enter($__internal_3e805c90011dfac4f05cd536de898d008f328c0781b128c2bfc4bbb142b6ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eab421e549664b3032eae189da75a8ccfcd504bbd304e92473cbb2d6efc18803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab421e549664b3032eae189da75a8ccfcd504bbd304e92473cbb2d6efc18803->enter($__internal_eab421e549664b3032eae189da75a8ccfcd504bbd304e92473cbb2d6efc18803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_eab421e549664b3032eae189da75a8ccfcd504bbd304e92473cbb2d6efc18803->leave($__internal_eab421e549664b3032eae189da75a8ccfcd504bbd304e92473cbb2d6efc18803_prof);

        
        $__internal_3e805c90011dfac4f05cd536de898d008f328c0781b128c2bfc4bbb142b6ee2d->leave($__internal_3e805c90011dfac4f05cd536de898d008f328c0781b128c2bfc4bbb142b6ee2d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9de52fd38840be1d373fc5517005d5030654cf95a75a3abdbf8921c1c3b10532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de52fd38840be1d373fc5517005d5030654cf95a75a3abdbf8921c1c3b10532->enter($__internal_9de52fd38840be1d373fc5517005d5030654cf95a75a3abdbf8921c1c3b10532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c78c61faa3310d827ac46d3aedcda5a513f3d459a2652a32ff528cf92dd3cfa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78c61faa3310d827ac46d3aedcda5a513f3d459a2652a32ff528cf92dd3cfa9->enter($__internal_c78c61faa3310d827ac46d3aedcda5a513f3d459a2652a32ff528cf92dd3cfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c78c61faa3310d827ac46d3aedcda5a513f3d459a2652a32ff528cf92dd3cfa9->leave($__internal_c78c61faa3310d827ac46d3aedcda5a513f3d459a2652a32ff528cf92dd3cfa9_prof);

        
        $__internal_9de52fd38840be1d373fc5517005d5030654cf95a75a3abdbf8921c1c3b10532->leave($__internal_9de52fd38840be1d373fc5517005d5030654cf95a75a3abdbf8921c1c3b10532_prof);

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
