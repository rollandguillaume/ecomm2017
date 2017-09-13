<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_76404c5fabb4d4179e1c5abe01233cef35360e427487fba53ccbfed17d5cb66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c74e3c672183008e4cbe0fa31665ca5d7589413fc09016f426d3799c0e5f3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c74e3c672183008e4cbe0fa31665ca5d7589413fc09016f426d3799c0e5f3a4->enter($__internal_4c74e3c672183008e4cbe0fa31665ca5d7589413fc09016f426d3799c0e5f3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_17c18efb0c9cc4ae7bb022a823efeabdb3cbe3fd0d811e7582ff3d92d8cf76da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c18efb0c9cc4ae7bb022a823efeabdb3cbe3fd0d811e7582ff3d92d8cf76da->enter($__internal_17c18efb0c9cc4ae7bb022a823efeabdb3cbe3fd0d811e7582ff3d92d8cf76da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_4c74e3c672183008e4cbe0fa31665ca5d7589413fc09016f426d3799c0e5f3a4->leave($__internal_4c74e3c672183008e4cbe0fa31665ca5d7589413fc09016f426d3799c0e5f3a4_prof);

        
        $__internal_17c18efb0c9cc4ae7bb022a823efeabdb3cbe3fd0d811e7582ff3d92d8cf76da->leave($__internal_17c18efb0c9cc4ae7bb022a823efeabdb3cbe3fd0d811e7582ff3d92d8cf76da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
