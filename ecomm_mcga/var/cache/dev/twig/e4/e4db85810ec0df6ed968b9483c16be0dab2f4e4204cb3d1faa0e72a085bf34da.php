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
        $__internal_8eb8d6ae08568ecdc80e531d4cbbff4968a80cb3c67f2962e368a51c79b58c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb8d6ae08568ecdc80e531d4cbbff4968a80cb3c67f2962e368a51c79b58c61->enter($__internal_8eb8d6ae08568ecdc80e531d4cbbff4968a80cb3c67f2962e368a51c79b58c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_132a76a97f9998d627d92fd8214e7b334928bcb794a012574c5f15b563fa2ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132a76a97f9998d627d92fd8214e7b334928bcb794a012574c5f15b563fa2ed1->enter($__internal_132a76a97f9998d627d92fd8214e7b334928bcb794a012574c5f15b563fa2ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb8d6ae08568ecdc80e531d4cbbff4968a80cb3c67f2962e368a51c79b58c61->leave($__internal_8eb8d6ae08568ecdc80e531d4cbbff4968a80cb3c67f2962e368a51c79b58c61_prof);

        
        $__internal_132a76a97f9998d627d92fd8214e7b334928bcb794a012574c5f15b563fa2ed1->leave($__internal_132a76a97f9998d627d92fd8214e7b334928bcb794a012574c5f15b563fa2ed1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8cc01b9ac86fbceab2143c8f8d63e2f7edc431e58aeac607d1fb081a44a79722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc01b9ac86fbceab2143c8f8d63e2f7edc431e58aeac607d1fb081a44a79722->enter($__internal_8cc01b9ac86fbceab2143c8f8d63e2f7edc431e58aeac607d1fb081a44a79722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_734ab13261e69f9e6bb8bf2cd987d7c30ff425882eb461f2c3e494f81e9e4f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734ab13261e69f9e6bb8bf2cd987d7c30ff425882eb461f2c3e494f81e9e4f67->enter($__internal_734ab13261e69f9e6bb8bf2cd987d7c30ff425882eb461f2c3e494f81e9e4f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_734ab13261e69f9e6bb8bf2cd987d7c30ff425882eb461f2c3e494f81e9e4f67->leave($__internal_734ab13261e69f9e6bb8bf2cd987d7c30ff425882eb461f2c3e494f81e9e4f67_prof);

        
        $__internal_8cc01b9ac86fbceab2143c8f8d63e2f7edc431e58aeac607d1fb081a44a79722->leave($__internal_8cc01b9ac86fbceab2143c8f8d63e2f7edc431e58aeac607d1fb081a44a79722_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32914a99199150251681dbfa4e11b98e2e8dd0f307b9033b6c34f54d28892c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32914a99199150251681dbfa4e11b98e2e8dd0f307b9033b6c34f54d28892c30->enter($__internal_32914a99199150251681dbfa4e11b98e2e8dd0f307b9033b6c34f54d28892c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d6ec4c4fa5f1b5743f0650f21243a1cceabf46dd3444f50d0ff9b2e0bceb77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6ec4c4fa5f1b5743f0650f21243a1cceabf46dd3444f50d0ff9b2e0bceb77a->enter($__internal_3d6ec4c4fa5f1b5743f0650f21243a1cceabf46dd3444f50d0ff9b2e0bceb77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3d6ec4c4fa5f1b5743f0650f21243a1cceabf46dd3444f50d0ff9b2e0bceb77a->leave($__internal_3d6ec4c4fa5f1b5743f0650f21243a1cceabf46dd3444f50d0ff9b2e0bceb77a_prof);

        
        $__internal_32914a99199150251681dbfa4e11b98e2e8dd0f307b9033b6c34f54d28892c30->leave($__internal_32914a99199150251681dbfa4e11b98e2e8dd0f307b9033b6c34f54d28892c30_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82ac6cdd0e18613b0d71aa1ad4b3f7ed8bf5b2f633d0613267f96e95c9dde35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ac6cdd0e18613b0d71aa1ad4b3f7ed8bf5b2f633d0613267f96e95c9dde35f->enter($__internal_82ac6cdd0e18613b0d71aa1ad4b3f7ed8bf5b2f633d0613267f96e95c9dde35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53b2f934f3656eca128a57fbe56a29ff608a6094d76efdb7c2d63faf7bf76f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b2f934f3656eca128a57fbe56a29ff608a6094d76efdb7c2d63faf7bf76f6e->enter($__internal_53b2f934f3656eca128a57fbe56a29ff608a6094d76efdb7c2d63faf7bf76f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_53b2f934f3656eca128a57fbe56a29ff608a6094d76efdb7c2d63faf7bf76f6e->leave($__internal_53b2f934f3656eca128a57fbe56a29ff608a6094d76efdb7c2d63faf7bf76f6e_prof);

        
        $__internal_82ac6cdd0e18613b0d71aa1ad4b3f7ed8bf5b2f633d0613267f96e95c9dde35f->leave($__internal_82ac6cdd0e18613b0d71aa1ad4b3f7ed8bf5b2f633d0613267f96e95c9dde35f_prof);

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
