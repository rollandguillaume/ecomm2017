<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_4777076de9d72ac6b904a9ffbac5b7c35aace48704b874f1a3f618c6576a9f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4777076de9d72ac6b904a9ffbac5b7c35aace48704b874f1a3f618c6576a9f0e->enter($__internal_4777076de9d72ac6b904a9ffbac5b7c35aace48704b874f1a3f618c6576a9f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4b8a49758267dbac2febbed34af5dda6db01bd0c9e6d99e37f4b1b7ceff94239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8a49758267dbac2febbed34af5dda6db01bd0c9e6d99e37f4b1b7ceff94239->enter($__internal_4b8a49758267dbac2febbed34af5dda6db01bd0c9e6d99e37f4b1b7ceff94239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4777076de9d72ac6b904a9ffbac5b7c35aace48704b874f1a3f618c6576a9f0e->leave($__internal_4777076de9d72ac6b904a9ffbac5b7c35aace48704b874f1a3f618c6576a9f0e_prof);

        
        $__internal_4b8a49758267dbac2febbed34af5dda6db01bd0c9e6d99e37f4b1b7ceff94239->leave($__internal_4b8a49758267dbac2febbed34af5dda6db01bd0c9e6d99e37f4b1b7ceff94239_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9640060bacbac701918c47dda1851d75127fc21a71eddd064230b343b8fcea8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9640060bacbac701918c47dda1851d75127fc21a71eddd064230b343b8fcea8e->enter($__internal_9640060bacbac701918c47dda1851d75127fc21a71eddd064230b343b8fcea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_026df6bdd3e4e88442ce6406c2713f233a0042f7b4dc2774f79d33678aab44e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026df6bdd3e4e88442ce6406c2713f233a0042f7b4dc2774f79d33678aab44e5->enter($__internal_026df6bdd3e4e88442ce6406c2713f233a0042f7b4dc2774f79d33678aab44e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_026df6bdd3e4e88442ce6406c2713f233a0042f7b4dc2774f79d33678aab44e5->leave($__internal_026df6bdd3e4e88442ce6406c2713f233a0042f7b4dc2774f79d33678aab44e5_prof);

        
        $__internal_9640060bacbac701918c47dda1851d75127fc21a71eddd064230b343b8fcea8e->leave($__internal_9640060bacbac701918c47dda1851d75127fc21a71eddd064230b343b8fcea8e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_812a79816513739cf936241dd0a32cc49b89821772e8c4ffe4dbd6c0c0e2bfc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812a79816513739cf936241dd0a32cc49b89821772e8c4ffe4dbd6c0c0e2bfc0->enter($__internal_812a79816513739cf936241dd0a32cc49b89821772e8c4ffe4dbd6c0c0e2bfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_28efe3086764fa1ecb98275cb6c6d6ede2e3826f4842c2a97f51b4b2d14c6de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28efe3086764fa1ecb98275cb6c6d6ede2e3826f4842c2a97f51b4b2d14c6de1->enter($__internal_28efe3086764fa1ecb98275cb6c6d6ede2e3826f4842c2a97f51b4b2d14c6de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_28efe3086764fa1ecb98275cb6c6d6ede2e3826f4842c2a97f51b4b2d14c6de1->leave($__internal_28efe3086764fa1ecb98275cb6c6d6ede2e3826f4842c2a97f51b4b2d14c6de1_prof);

        
        $__internal_812a79816513739cf936241dd0a32cc49b89821772e8c4ffe4dbd6c0c0e2bfc0->leave($__internal_812a79816513739cf936241dd0a32cc49b89821772e8c4ffe4dbd6c0c0e2bfc0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f412b75264488b797d2f425d65431427249abb0fcaff816d74c1661ce395f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f412b75264488b797d2f425d65431427249abb0fcaff816d74c1661ce395f86->enter($__internal_9f412b75264488b797d2f425d65431427249abb0fcaff816d74c1661ce395f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_256acd5b7caf980666df4a424407c21610f7e9b97a1f6c6cac1cbd1b446a5c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256acd5b7caf980666df4a424407c21610f7e9b97a1f6c6cac1cbd1b446a5c6f->enter($__internal_256acd5b7caf980666df4a424407c21610f7e9b97a1f6c6cac1cbd1b446a5c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_256acd5b7caf980666df4a424407c21610f7e9b97a1f6c6cac1cbd1b446a5c6f->leave($__internal_256acd5b7caf980666df4a424407c21610f7e9b97a1f6c6cac1cbd1b446a5c6f_prof);

        
        $__internal_9f412b75264488b797d2f425d65431427249abb0fcaff816d74c1661ce395f86->leave($__internal_9f412b75264488b797d2f425d65431427249abb0fcaff816d74c1661ce395f86_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/rollandguillaume/Desktop/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
