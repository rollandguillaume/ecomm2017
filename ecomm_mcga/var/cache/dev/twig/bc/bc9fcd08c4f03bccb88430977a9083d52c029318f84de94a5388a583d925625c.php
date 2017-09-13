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
        $__internal_f978918431e9e091a8b8b8a22cbb7172ead5d68ba49de22aeca490b65d410e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f978918431e9e091a8b8b8a22cbb7172ead5d68ba49de22aeca490b65d410e5b->enter($__internal_f978918431e9e091a8b8b8a22cbb7172ead5d68ba49de22aeca490b65d410e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3bcf039eb0e875efad812857625424c581ca80d99693050249fd447ebf3c1b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcf039eb0e875efad812857625424c581ca80d99693050249fd447ebf3c1b2b->enter($__internal_3bcf039eb0e875efad812857625424c581ca80d99693050249fd447ebf3c1b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f978918431e9e091a8b8b8a22cbb7172ead5d68ba49de22aeca490b65d410e5b->leave($__internal_f978918431e9e091a8b8b8a22cbb7172ead5d68ba49de22aeca490b65d410e5b_prof);

        
        $__internal_3bcf039eb0e875efad812857625424c581ca80d99693050249fd447ebf3c1b2b->leave($__internal_3bcf039eb0e875efad812857625424c581ca80d99693050249fd447ebf3c1b2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a604723eb60ea9d41e509a7cd40e3a68c108da3020d63a2f89c82212077d0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a604723eb60ea9d41e509a7cd40e3a68c108da3020d63a2f89c82212077d0f8->enter($__internal_0a604723eb60ea9d41e509a7cd40e3a68c108da3020d63a2f89c82212077d0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68a242005967ecae96a17ea1c50475abb21d7e95ddf9c27b6a27be2ffffebbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a242005967ecae96a17ea1c50475abb21d7e95ddf9c27b6a27be2ffffebbd8->enter($__internal_68a242005967ecae96a17ea1c50475abb21d7e95ddf9c27b6a27be2ffffebbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_68a242005967ecae96a17ea1c50475abb21d7e95ddf9c27b6a27be2ffffebbd8->leave($__internal_68a242005967ecae96a17ea1c50475abb21d7e95ddf9c27b6a27be2ffffebbd8_prof);

        
        $__internal_0a604723eb60ea9d41e509a7cd40e3a68c108da3020d63a2f89c82212077d0f8->leave($__internal_0a604723eb60ea9d41e509a7cd40e3a68c108da3020d63a2f89c82212077d0f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14c4c2a85b80fc36710305a76fdeb4c6ef6280a8f8bd16e945379ccb025aef42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c4c2a85b80fc36710305a76fdeb4c6ef6280a8f8bd16e945379ccb025aef42->enter($__internal_14c4c2a85b80fc36710305a76fdeb4c6ef6280a8f8bd16e945379ccb025aef42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1835edb76961f2108b68d0c9f6462abfebb4f2149a662a64dc0bf5857b6c47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1835edb76961f2108b68d0c9f6462abfebb4f2149a662a64dc0bf5857b6c47b->enter($__internal_f1835edb76961f2108b68d0c9f6462abfebb4f2149a662a64dc0bf5857b6c47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f1835edb76961f2108b68d0c9f6462abfebb4f2149a662a64dc0bf5857b6c47b->leave($__internal_f1835edb76961f2108b68d0c9f6462abfebb4f2149a662a64dc0bf5857b6c47b_prof);

        
        $__internal_14c4c2a85b80fc36710305a76fdeb4c6ef6280a8f8bd16e945379ccb025aef42->leave($__internal_14c4c2a85b80fc36710305a76fdeb4c6ef6280a8f8bd16e945379ccb025aef42_prof);

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
