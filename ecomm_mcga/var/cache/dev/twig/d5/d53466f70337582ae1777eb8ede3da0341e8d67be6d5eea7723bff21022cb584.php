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
        $__internal_a204829c70b5aaec31cf414deb5e69d73cb1d001752210c4ab09a0cecb984327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a204829c70b5aaec31cf414deb5e69d73cb1d001752210c4ab09a0cecb984327->enter($__internal_a204829c70b5aaec31cf414deb5e69d73cb1d001752210c4ab09a0cecb984327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_bd53bf43eac9f2d9b44576da44c85d3d7e6f74124a6182b5ee5cbe1c56daa046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd53bf43eac9f2d9b44576da44c85d3d7e6f74124a6182b5ee5cbe1c56daa046->enter($__internal_bd53bf43eac9f2d9b44576da44c85d3d7e6f74124a6182b5ee5cbe1c56daa046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_a204829c70b5aaec31cf414deb5e69d73cb1d001752210c4ab09a0cecb984327->leave($__internal_a204829c70b5aaec31cf414deb5e69d73cb1d001752210c4ab09a0cecb984327_prof);

        
        $__internal_bd53bf43eac9f2d9b44576da44c85d3d7e6f74124a6182b5ee5cbe1c56daa046->leave($__internal_bd53bf43eac9f2d9b44576da44c85d3d7e6f74124a6182b5ee5cbe1c56daa046_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_214e492d47c8e1beb8ac699c7a108171cc74ca51453c32959965d93ce5c30eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214e492d47c8e1beb8ac699c7a108171cc74ca51453c32959965d93ce5c30eea->enter($__internal_214e492d47c8e1beb8ac699c7a108171cc74ca51453c32959965d93ce5c30eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_481afa399d826920eaa8b1c0be7a5999958ceb9a71554e4df57d09160a98514b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481afa399d826920eaa8b1c0be7a5999958ceb9a71554e4df57d09160a98514b->enter($__internal_481afa399d826920eaa8b1c0be7a5999958ceb9a71554e4df57d09160a98514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_481afa399d826920eaa8b1c0be7a5999958ceb9a71554e4df57d09160a98514b->leave($__internal_481afa399d826920eaa8b1c0be7a5999958ceb9a71554e4df57d09160a98514b_prof);

        
        $__internal_214e492d47c8e1beb8ac699c7a108171cc74ca51453c32959965d93ce5c30eea->leave($__internal_214e492d47c8e1beb8ac699c7a108171cc74ca51453c32959965d93ce5c30eea_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_98dab9c5c253cb86fc97b68d6c8c8e267c026a4d7d069ced727a1f8b6e3d1604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dab9c5c253cb86fc97b68d6c8c8e267c026a4d7d069ced727a1f8b6e3d1604->enter($__internal_98dab9c5c253cb86fc97b68d6c8c8e267c026a4d7d069ced727a1f8b6e3d1604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26b4e6ea2d8430c8b5ab25728cd8383c3edeefee0f5bc4ef4bd6f02f37ebafcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b4e6ea2d8430c8b5ab25728cd8383c3edeefee0f5bc4ef4bd6f02f37ebafcb->enter($__internal_26b4e6ea2d8430c8b5ab25728cd8383c3edeefee0f5bc4ef4bd6f02f37ebafcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_26b4e6ea2d8430c8b5ab25728cd8383c3edeefee0f5bc4ef4bd6f02f37ebafcb->leave($__internal_26b4e6ea2d8430c8b5ab25728cd8383c3edeefee0f5bc4ef4bd6f02f37ebafcb_prof);

        
        $__internal_98dab9c5c253cb86fc97b68d6c8c8e267c026a4d7d069ced727a1f8b6e3d1604->leave($__internal_98dab9c5c253cb86fc97b68d6c8c8e267c026a4d7d069ced727a1f8b6e3d1604_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fa629087d1156e7098b36169f922110b0e5c9ed22edeacee4a4fe2431cd4501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa629087d1156e7098b36169f922110b0e5c9ed22edeacee4a4fe2431cd4501->enter($__internal_5fa629087d1156e7098b36169f922110b0e5c9ed22edeacee4a4fe2431cd4501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0c635bd8d5fe0933e932a0f2eb70b5984c3e855761a5075ed443e8efd52a140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c635bd8d5fe0933e932a0f2eb70b5984c3e855761a5075ed443e8efd52a140->enter($__internal_f0c635bd8d5fe0933e932a0f2eb70b5984c3e855761a5075ed443e8efd52a140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0c635bd8d5fe0933e932a0f2eb70b5984c3e855761a5075ed443e8efd52a140->leave($__internal_f0c635bd8d5fe0933e932a0f2eb70b5984c3e855761a5075ed443e8efd52a140_prof);

        
        $__internal_5fa629087d1156e7098b36169f922110b0e5c9ed22edeacee4a4fe2431cd4501->leave($__internal_5fa629087d1156e7098b36169f922110b0e5c9ed22edeacee4a4fe2431cd4501_prof);

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
