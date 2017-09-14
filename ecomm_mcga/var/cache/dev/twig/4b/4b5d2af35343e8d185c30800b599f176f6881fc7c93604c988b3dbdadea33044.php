<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_4e2366b4f99610a85e2bab929c9770693153802e56f5f33448f93f879b0c444a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2366b4f99610a85e2bab929c9770693153802e56f5f33448f93f879b0c444a->enter($__internal_4e2366b4f99610a85e2bab929c9770693153802e56f5f33448f93f879b0c444a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cb2c6accae8ee0d8bd2703e38b7e94ec0b4280029d713c9cc1c8cb7e80d63a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2c6accae8ee0d8bd2703e38b7e94ec0b4280029d713c9cc1c8cb7e80d63a47->enter($__internal_cb2c6accae8ee0d8bd2703e38b7e94ec0b4280029d713c9cc1c8cb7e80d63a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e2366b4f99610a85e2bab929c9770693153802e56f5f33448f93f879b0c444a->leave($__internal_4e2366b4f99610a85e2bab929c9770693153802e56f5f33448f93f879b0c444a_prof);

        
        $__internal_cb2c6accae8ee0d8bd2703e38b7e94ec0b4280029d713c9cc1c8cb7e80d63a47->leave($__internal_cb2c6accae8ee0d8bd2703e38b7e94ec0b4280029d713c9cc1c8cb7e80d63a47_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_584db471577797cfe4fc38eff2d7ce126fe23a2e1764b0a8573c45e93b72e5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584db471577797cfe4fc38eff2d7ce126fe23a2e1764b0a8573c45e93b72e5fd->enter($__internal_584db471577797cfe4fc38eff2d7ce126fe23a2e1764b0a8573c45e93b72e5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c969cae978a21ad06372be80531b499e932b25b27c12d45fb685c57e6756f1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c969cae978a21ad06372be80531b499e932b25b27c12d45fb685c57e6756f1f6->enter($__internal_c969cae978a21ad06372be80531b499e932b25b27c12d45fb685c57e6756f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c969cae978a21ad06372be80531b499e932b25b27c12d45fb685c57e6756f1f6->leave($__internal_c969cae978a21ad06372be80531b499e932b25b27c12d45fb685c57e6756f1f6_prof);

        
        $__internal_584db471577797cfe4fc38eff2d7ce126fe23a2e1764b0a8573c45e93b72e5fd->leave($__internal_584db471577797cfe4fc38eff2d7ce126fe23a2e1764b0a8573c45e93b72e5fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9a2e72ef257b85f9dc6c01636002da410b032629fc52b8967d31851d3a67216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a2e72ef257b85f9dc6c01636002da410b032629fc52b8967d31851d3a67216->enter($__internal_d9a2e72ef257b85f9dc6c01636002da410b032629fc52b8967d31851d3a67216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e6d8e6d3e4392a79cc721e60cf87348891ebf7bd1f8e63defbd25257a5714440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d8e6d3e4392a79cc721e60cf87348891ebf7bd1f8e63defbd25257a5714440->enter($__internal_e6d8e6d3e4392a79cc721e60cf87348891ebf7bd1f8e63defbd25257a5714440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6d8e6d3e4392a79cc721e60cf87348891ebf7bd1f8e63defbd25257a5714440->leave($__internal_e6d8e6d3e4392a79cc721e60cf87348891ebf7bd1f8e63defbd25257a5714440_prof);

        
        $__internal_d9a2e72ef257b85f9dc6c01636002da410b032629fc52b8967d31851d3a67216->leave($__internal_d9a2e72ef257b85f9dc6c01636002da410b032629fc52b8967d31851d3a67216_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_918abd2d92c51ce5faef9715b8095e3f5557f20df5ec97bdf3861b27343184c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918abd2d92c51ce5faef9715b8095e3f5557f20df5ec97bdf3861b27343184c8->enter($__internal_918abd2d92c51ce5faef9715b8095e3f5557f20df5ec97bdf3861b27343184c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18832d5e91dcf215ad4408963c4f56b377d6216f31341043b8b55803a69fcaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18832d5e91dcf215ad4408963c4f56b377d6216f31341043b8b55803a69fcaa9->enter($__internal_18832d5e91dcf215ad4408963c4f56b377d6216f31341043b8b55803a69fcaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_18832d5e91dcf215ad4408963c4f56b377d6216f31341043b8b55803a69fcaa9->leave($__internal_18832d5e91dcf215ad4408963c4f56b377d6216f31341043b8b55803a69fcaa9_prof);

        
        $__internal_918abd2d92c51ce5faef9715b8095e3f5557f20df5ec97bdf3861b27343184c8->leave($__internal_918abd2d92c51ce5faef9715b8095e3f5557f20df5ec97bdf3861b27343184c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
