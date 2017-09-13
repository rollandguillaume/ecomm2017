<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b11e71f19d4dd921d6334c419fce5f06b6dce35e3c1de3b24c8b836f709c2c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df97ba7af7d5b0318eb69a6a4a187fbd58bf330065e4f6a8fce0e27fa506e9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df97ba7af7d5b0318eb69a6a4a187fbd58bf330065e4f6a8fce0e27fa506e9d5->enter($__internal_df97ba7af7d5b0318eb69a6a4a187fbd58bf330065e4f6a8fce0e27fa506e9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_77efefb3877a4c735a059d0f133b8175262860ad41908695100a2db373bba0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77efefb3877a4c735a059d0f133b8175262860ad41908695100a2db373bba0f0->enter($__internal_77efefb3877a4c735a059d0f133b8175262860ad41908695100a2db373bba0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df97ba7af7d5b0318eb69a6a4a187fbd58bf330065e4f6a8fce0e27fa506e9d5->leave($__internal_df97ba7af7d5b0318eb69a6a4a187fbd58bf330065e4f6a8fce0e27fa506e9d5_prof);

        
        $__internal_77efefb3877a4c735a059d0f133b8175262860ad41908695100a2db373bba0f0->leave($__internal_77efefb3877a4c735a059d0f133b8175262860ad41908695100a2db373bba0f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5c72df387b5450b094d3e7c93c27a7e341cd7b4ad7ac06e5161448f2d59764b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c72df387b5450b094d3e7c93c27a7e341cd7b4ad7ac06e5161448f2d59764b->enter($__internal_e5c72df387b5450b094d3e7c93c27a7e341cd7b4ad7ac06e5161448f2d59764b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eca11ee6e8fcf8afbc0ac14437dd640713bf8e298722ad6481abe7865aadddb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca11ee6e8fcf8afbc0ac14437dd640713bf8e298722ad6481abe7865aadddb9->enter($__internal_eca11ee6e8fcf8afbc0ac14437dd640713bf8e298722ad6481abe7865aadddb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eca11ee6e8fcf8afbc0ac14437dd640713bf8e298722ad6481abe7865aadddb9->leave($__internal_eca11ee6e8fcf8afbc0ac14437dd640713bf8e298722ad6481abe7865aadddb9_prof);

        
        $__internal_e5c72df387b5450b094d3e7c93c27a7e341cd7b4ad7ac06e5161448f2d59764b->leave($__internal_e5c72df387b5450b094d3e7c93c27a7e341cd7b4ad7ac06e5161448f2d59764b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_791c85d2d9c62d5c952cf39da86650c12d3a6ae446f3863f2ff26b9b3a1a6cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791c85d2d9c62d5c952cf39da86650c12d3a6ae446f3863f2ff26b9b3a1a6cc5->enter($__internal_791c85d2d9c62d5c952cf39da86650c12d3a6ae446f3863f2ff26b9b3a1a6cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99dfffd7d9b1a151cbc411539ef6595830969b10baa436a0d17b5f377b9a3acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dfffd7d9b1a151cbc411539ef6595830969b10baa436a0d17b5f377b9a3acc->enter($__internal_99dfffd7d9b1a151cbc411539ef6595830969b10baa436a0d17b5f377b9a3acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_99dfffd7d9b1a151cbc411539ef6595830969b10baa436a0d17b5f377b9a3acc->leave($__internal_99dfffd7d9b1a151cbc411539ef6595830969b10baa436a0d17b5f377b9a3acc_prof);

        
        $__internal_791c85d2d9c62d5c952cf39da86650c12d3a6ae446f3863f2ff26b9b3a1a6cc5->leave($__internal_791c85d2d9c62d5c952cf39da86650c12d3a6ae446f3863f2ff26b9b3a1a6cc5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
