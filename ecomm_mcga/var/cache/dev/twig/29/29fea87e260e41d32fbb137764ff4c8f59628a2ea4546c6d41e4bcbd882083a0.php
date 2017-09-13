<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_69499cd06c79772967cb38fc760e58b6fe977631e13e85f55d0c88c0fd51894a extends Twig_Template
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
        $__internal_1603a178961b6f2056f6170463470232a27e64ce599b3c6bd51378d5e5b82966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1603a178961b6f2056f6170463470232a27e64ce599b3c6bd51378d5e5b82966->enter($__internal_1603a178961b6f2056f6170463470232a27e64ce599b3c6bd51378d5e5b82966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_113cf35f476ff0fbf77a07be71ea1ed57b8317e8b86cf7792d90e0ef8662df48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113cf35f476ff0fbf77a07be71ea1ed57b8317e8b86cf7792d90e0ef8662df48->enter($__internal_113cf35f476ff0fbf77a07be71ea1ed57b8317e8b86cf7792d90e0ef8662df48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_1603a178961b6f2056f6170463470232a27e64ce599b3c6bd51378d5e5b82966->leave($__internal_1603a178961b6f2056f6170463470232a27e64ce599b3c6bd51378d5e5b82966_prof);

        
        $__internal_113cf35f476ff0fbf77a07be71ea1ed57b8317e8b86cf7792d90e0ef8662df48->leave($__internal_113cf35f476ff0fbf77a07be71ea1ed57b8317e8b86cf7792d90e0ef8662df48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
