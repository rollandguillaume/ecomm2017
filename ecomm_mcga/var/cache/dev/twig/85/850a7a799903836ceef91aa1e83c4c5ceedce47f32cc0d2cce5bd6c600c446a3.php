<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_11d15114edb16eb3fdc0488967b0a7d96e87f337dca5248c479bef3493cd2980 extends Twig_Template
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
        $__internal_a475b941f330f4a6c1d6cfd864474498f39d0e1380816649bca8f87c2b9b293c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a475b941f330f4a6c1d6cfd864474498f39d0e1380816649bca8f87c2b9b293c->enter($__internal_a475b941f330f4a6c1d6cfd864474498f39d0e1380816649bca8f87c2b9b293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8b4c1b55206038f3620470cee82012de471f600b87b8116495997ab1cbedd765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4c1b55206038f3620470cee82012de471f600b87b8116495997ab1cbedd765->enter($__internal_8b4c1b55206038f3620470cee82012de471f600b87b8116495997ab1cbedd765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a475b941f330f4a6c1d6cfd864474498f39d0e1380816649bca8f87c2b9b293c->leave($__internal_a475b941f330f4a6c1d6cfd864474498f39d0e1380816649bca8f87c2b9b293c_prof);

        
        $__internal_8b4c1b55206038f3620470cee82012de471f600b87b8116495997ab1cbedd765->leave($__internal_8b4c1b55206038f3620470cee82012de471f600b87b8116495997ab1cbedd765_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
