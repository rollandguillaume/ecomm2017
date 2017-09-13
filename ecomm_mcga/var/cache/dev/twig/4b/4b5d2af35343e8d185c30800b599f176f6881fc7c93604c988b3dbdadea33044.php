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
        $__internal_f98559073d6d4ebbf5ac60a4ece092eaddc38b60c4efa02410db81cb89666cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98559073d6d4ebbf5ac60a4ece092eaddc38b60c4efa02410db81cb89666cea->enter($__internal_f98559073d6d4ebbf5ac60a4ece092eaddc38b60c4efa02410db81cb89666cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_5ba96a27cb49d5ca890e9a047730eea7ec44faec1f4936b9086a178c2725e1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba96a27cb49d5ca890e9a047730eea7ec44faec1f4936b9086a178c2725e1b5->enter($__internal_5ba96a27cb49d5ca890e9a047730eea7ec44faec1f4936b9086a178c2725e1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f98559073d6d4ebbf5ac60a4ece092eaddc38b60c4efa02410db81cb89666cea->leave($__internal_f98559073d6d4ebbf5ac60a4ece092eaddc38b60c4efa02410db81cb89666cea_prof);

        
        $__internal_5ba96a27cb49d5ca890e9a047730eea7ec44faec1f4936b9086a178c2725e1b5->leave($__internal_5ba96a27cb49d5ca890e9a047730eea7ec44faec1f4936b9086a178c2725e1b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5404f1453b0057369d2a58b7c517987cfaf6b085140e874d6ce446526c43579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5404f1453b0057369d2a58b7c517987cfaf6b085140e874d6ce446526c43579->enter($__internal_f5404f1453b0057369d2a58b7c517987cfaf6b085140e874d6ce446526c43579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c14aad27d19264d8d86f3e634b8b05e33e625e5a1146bc2c88a8d3e466152bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14aad27d19264d8d86f3e634b8b05e33e625e5a1146bc2c88a8d3e466152bab->enter($__internal_c14aad27d19264d8d86f3e634b8b05e33e625e5a1146bc2c88a8d3e466152bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c14aad27d19264d8d86f3e634b8b05e33e625e5a1146bc2c88a8d3e466152bab->leave($__internal_c14aad27d19264d8d86f3e634b8b05e33e625e5a1146bc2c88a8d3e466152bab_prof);

        
        $__internal_f5404f1453b0057369d2a58b7c517987cfaf6b085140e874d6ce446526c43579->leave($__internal_f5404f1453b0057369d2a58b7c517987cfaf6b085140e874d6ce446526c43579_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0dd7447dd81abbee1fae124aea37382093c1c659b0f08ed532ce82df95e5287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dd7447dd81abbee1fae124aea37382093c1c659b0f08ed532ce82df95e5287->enter($__internal_c0dd7447dd81abbee1fae124aea37382093c1c659b0f08ed532ce82df95e5287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5655c8cf4705bbbb5baf85fbf12297841ae986c5fb088bce6e8dfccc50d8291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5655c8cf4705bbbb5baf85fbf12297841ae986c5fb088bce6e8dfccc50d8291->enter($__internal_c5655c8cf4705bbbb5baf85fbf12297841ae986c5fb088bce6e8dfccc50d8291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5655c8cf4705bbbb5baf85fbf12297841ae986c5fb088bce6e8dfccc50d8291->leave($__internal_c5655c8cf4705bbbb5baf85fbf12297841ae986c5fb088bce6e8dfccc50d8291_prof);

        
        $__internal_c0dd7447dd81abbee1fae124aea37382093c1c659b0f08ed532ce82df95e5287->leave($__internal_c0dd7447dd81abbee1fae124aea37382093c1c659b0f08ed532ce82df95e5287_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_071c66495430c33be1c7da49150871d60c864653f3f6d7920dd9df47598ac35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071c66495430c33be1c7da49150871d60c864653f3f6d7920dd9df47598ac35f->enter($__internal_071c66495430c33be1c7da49150871d60c864653f3f6d7920dd9df47598ac35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_475fb1819ff31a8c0fff6be75509bbcdaaebb3c8f48426d11f745da75ad96a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475fb1819ff31a8c0fff6be75509bbcdaaebb3c8f48426d11f745da75ad96a9a->enter($__internal_475fb1819ff31a8c0fff6be75509bbcdaaebb3c8f48426d11f745da75ad96a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_475fb1819ff31a8c0fff6be75509bbcdaaebb3c8f48426d11f745da75ad96a9a->leave($__internal_475fb1819ff31a8c0fff6be75509bbcdaaebb3c8f48426d11f745da75ad96a9a_prof);

        
        $__internal_071c66495430c33be1c7da49150871d60c864653f3f6d7920dd9df47598ac35f->leave($__internal_071c66495430c33be1c7da49150871d60c864653f3f6d7920dd9df47598ac35f_prof);

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
