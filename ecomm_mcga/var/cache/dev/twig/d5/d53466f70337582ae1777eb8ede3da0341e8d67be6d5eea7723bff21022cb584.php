<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_088e3193ef70bb6bafbdb5b67faf1b58e27d448c89ca0ff9004d8adcb50a3518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d87103d028764a1254cf3bdb13b8aeee9cd277baab56aa9cfa7bb287c2d641b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87103d028764a1254cf3bdb13b8aeee9cd277baab56aa9cfa7bb287c2d641b1->enter($__internal_d87103d028764a1254cf3bdb13b8aeee9cd277baab56aa9cfa7bb287c2d641b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_97a659d09fdf47e2b5333ff3eb4569f68fb59a33e03d8f929de4458b3216ea84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a659d09fdf47e2b5333ff3eb4569f68fb59a33e03d8f929de4458b3216ea84->enter($__internal_97a659d09fdf47e2b5333ff3eb4569f68fb59a33e03d8f929de4458b3216ea84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d87103d028764a1254cf3bdb13b8aeee9cd277baab56aa9cfa7bb287c2d641b1->leave($__internal_d87103d028764a1254cf3bdb13b8aeee9cd277baab56aa9cfa7bb287c2d641b1_prof);

        
        $__internal_97a659d09fdf47e2b5333ff3eb4569f68fb59a33e03d8f929de4458b3216ea84->leave($__internal_97a659d09fdf47e2b5333ff3eb4569f68fb59a33e03d8f929de4458b3216ea84_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19f6af835651067c12547ba7664fa54ace61797569e5f5d3ec7dabf9dc2db5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f6af835651067c12547ba7664fa54ace61797569e5f5d3ec7dabf9dc2db5fc->enter($__internal_19f6af835651067c12547ba7664fa54ace61797569e5f5d3ec7dabf9dc2db5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0b7c5701d95aac2712eae59d9e0d807b698de2d184ef7b6be0f8a714d007cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b7c5701d95aac2712eae59d9e0d807b698de2d184ef7b6be0f8a714d007cdb->enter($__internal_a0b7c5701d95aac2712eae59d9e0d807b698de2d184ef7b6be0f8a714d007cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a0b7c5701d95aac2712eae59d9e0d807b698de2d184ef7b6be0f8a714d007cdb->leave($__internal_a0b7c5701d95aac2712eae59d9e0d807b698de2d184ef7b6be0f8a714d007cdb_prof);

        
        $__internal_19f6af835651067c12547ba7664fa54ace61797569e5f5d3ec7dabf9dc2db5fc->leave($__internal_19f6af835651067c12547ba7664fa54ace61797569e5f5d3ec7dabf9dc2db5fc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c92777e55a50fd71a5faf1f0501c98da36a67e4b1f0d16d28e0b81c53456f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c92777e55a50fd71a5faf1f0501c98da36a67e4b1f0d16d28e0b81c53456f24->enter($__internal_7c92777e55a50fd71a5faf1f0501c98da36a67e4b1f0d16d28e0b81c53456f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd7a08c6a4c48e5c9abcc4151753cc248db30b267112599e2f61c35be1f03eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7a08c6a4c48e5c9abcc4151753cc248db30b267112599e2f61c35be1f03eb5->enter($__internal_dd7a08c6a4c48e5c9abcc4151753cc248db30b267112599e2f61c35be1f03eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dd7a08c6a4c48e5c9abcc4151753cc248db30b267112599e2f61c35be1f03eb5->leave($__internal_dd7a08c6a4c48e5c9abcc4151753cc248db30b267112599e2f61c35be1f03eb5_prof);

        
        $__internal_7c92777e55a50fd71a5faf1f0501c98da36a67e4b1f0d16d28e0b81c53456f24->leave($__internal_7c92777e55a50fd71a5faf1f0501c98da36a67e4b1f0d16d28e0b81c53456f24_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b106ef26a302103f38983086d7d01d94a86a5b4d967e5e3beb436d9e4c28bbc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b106ef26a302103f38983086d7d01d94a86a5b4d967e5e3beb436d9e4c28bbc1->enter($__internal_b106ef26a302103f38983086d7d01d94a86a5b4d967e5e3beb436d9e4c28bbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5c47e2713219368682cd7312e1f4e0c38e4ec3affc8c344d6740270fdc116f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c47e2713219368682cd7312e1f4e0c38e4ec3affc8c344d6740270fdc116f3->enter($__internal_b5c47e2713219368682cd7312e1f4e0c38e4ec3affc8c344d6740270fdc116f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5c47e2713219368682cd7312e1f4e0c38e4ec3affc8c344d6740270fdc116f3->leave($__internal_b5c47e2713219368682cd7312e1f4e0c38e4ec3affc8c344d6740270fdc116f3_prof);

        
        $__internal_b106ef26a302103f38983086d7d01d94a86a5b4d967e5e3beb436d9e4c28bbc1->leave($__internal_b106ef26a302103f38983086d7d01d94a86a5b4d967e5e3beb436d9e4c28bbc1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
