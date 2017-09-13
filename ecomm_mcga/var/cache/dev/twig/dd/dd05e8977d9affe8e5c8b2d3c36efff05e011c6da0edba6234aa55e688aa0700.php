<?php

/* base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1d5e45a3178c438e72d7a294758199f1549d2d9ddf75cb5b2f7282acb60f7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d5e45a3178c438e72d7a294758199f1549d2d9ddf75cb5b2f7282acb60f7ef->enter($__internal_f1d5e45a3178c438e72d7a294758199f1549d2d9ddf75cb5b2f7282acb60f7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3237643a71e537123d36f6012d2fc16a148bb31cc09aa32f39965c9b54a8bdb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3237643a71e537123d36f6012d2fc16a148bb31cc09aa32f39965c9b54a8bdb9->enter($__internal_3237643a71e537123d36f6012d2fc16a148bb31cc09aa32f39965c9b54a8bdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f1d5e45a3178c438e72d7a294758199f1549d2d9ddf75cb5b2f7282acb60f7ef->leave($__internal_f1d5e45a3178c438e72d7a294758199f1549d2d9ddf75cb5b2f7282acb60f7ef_prof);

        
        $__internal_3237643a71e537123d36f6012d2fc16a148bb31cc09aa32f39965c9b54a8bdb9->leave($__internal_3237643a71e537123d36f6012d2fc16a148bb31cc09aa32f39965c9b54a8bdb9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d978ebc135d61da727610e0fbc0b1eb5aafa6d54f0aa227829b5b489ce7dcc1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d978ebc135d61da727610e0fbc0b1eb5aafa6d54f0aa227829b5b489ce7dcc1f->enter($__internal_d978ebc135d61da727610e0fbc0b1eb5aafa6d54f0aa227829b5b489ce7dcc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec6dc5222cc7cad56c079bd61468a3165253eb1ecf387e80f36e596dcaf0e2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6dc5222cc7cad56c079bd61468a3165253eb1ecf387e80f36e596dcaf0e2c5->enter($__internal_ec6dc5222cc7cad56c079bd61468a3165253eb1ecf387e80f36e596dcaf0e2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec6dc5222cc7cad56c079bd61468a3165253eb1ecf387e80f36e596dcaf0e2c5->leave($__internal_ec6dc5222cc7cad56c079bd61468a3165253eb1ecf387e80f36e596dcaf0e2c5_prof);

        
        $__internal_d978ebc135d61da727610e0fbc0b1eb5aafa6d54f0aa227829b5b489ce7dcc1f->leave($__internal_d978ebc135d61da727610e0fbc0b1eb5aafa6d54f0aa227829b5b489ce7dcc1f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37f1991e86b33d6e899be95eda106619e8812b3fdc1c3568c977d7e1debbeb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f1991e86b33d6e899be95eda106619e8812b3fdc1c3568c977d7e1debbeb4f->enter($__internal_37f1991e86b33d6e899be95eda106619e8812b3fdc1c3568c977d7e1debbeb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dce13e7820af59814b676773e5d50194831aa0ad0fa1ba0a61f52e588d2aecb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce13e7820af59814b676773e5d50194831aa0ad0fa1ba0a61f52e588d2aecb1->enter($__internal_dce13e7820af59814b676773e5d50194831aa0ad0fa1ba0a61f52e588d2aecb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dce13e7820af59814b676773e5d50194831aa0ad0fa1ba0a61f52e588d2aecb1->leave($__internal_dce13e7820af59814b676773e5d50194831aa0ad0fa1ba0a61f52e588d2aecb1_prof);

        
        $__internal_37f1991e86b33d6e899be95eda106619e8812b3fdc1c3568c977d7e1debbeb4f->leave($__internal_37f1991e86b33d6e899be95eda106619e8812b3fdc1c3568c977d7e1debbeb4f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_906ae932a3ff33e0ff7b2c86d8cbd09a60db2b44b5fc14245f671424fe65b28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906ae932a3ff33e0ff7b2c86d8cbd09a60db2b44b5fc14245f671424fe65b28b->enter($__internal_906ae932a3ff33e0ff7b2c86d8cbd09a60db2b44b5fc14245f671424fe65b28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bab44451a4fd282bb90eaffb31b9bf2509eee8695384610375401daf331ea99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab44451a4fd282bb90eaffb31b9bf2509eee8695384610375401daf331ea99d->enter($__internal_bab44451a4fd282bb90eaffb31b9bf2509eee8695384610375401daf331ea99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bab44451a4fd282bb90eaffb31b9bf2509eee8695384610375401daf331ea99d->leave($__internal_bab44451a4fd282bb90eaffb31b9bf2509eee8695384610375401daf331ea99d_prof);

        
        $__internal_906ae932a3ff33e0ff7b2c86d8cbd09a60db2b44b5fc14245f671424fe65b28b->leave($__internal_906ae932a3ff33e0ff7b2c86d8cbd09a60db2b44b5fc14245f671424fe65b28b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9b8d838c00eac86873d8c836eddeca1e94d1bcfd5cbd6d6050b246892e89f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b8d838c00eac86873d8c836eddeca1e94d1bcfd5cbd6d6050b246892e89f00->enter($__internal_c9b8d838c00eac86873d8c836eddeca1e94d1bcfd5cbd6d6050b246892e89f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_551d9b7ebd7b40c6f518207547e6b0b1859dbe37abff5dfe0454212bc421a427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551d9b7ebd7b40c6f518207547e6b0b1859dbe37abff5dfe0454212bc421a427->enter($__internal_551d9b7ebd7b40c6f518207547e6b0b1859dbe37abff5dfe0454212bc421a427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_551d9b7ebd7b40c6f518207547e6b0b1859dbe37abff5dfe0454212bc421a427->leave($__internal_551d9b7ebd7b40c6f518207547e6b0b1859dbe37abff5dfe0454212bc421a427_prof);

        
        $__internal_c9b8d838c00eac86873d8c836eddeca1e94d1bcfd5cbd6d6050b246892e89f00->leave($__internal_c9b8d838c00eac86873d8c836eddeca1e94d1bcfd5cbd6d6050b246892e89f00_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/app/Resources/views/base.html.twig");
    }
}
