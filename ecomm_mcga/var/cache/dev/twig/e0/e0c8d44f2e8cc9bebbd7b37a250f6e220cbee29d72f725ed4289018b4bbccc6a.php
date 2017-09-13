<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_34edeb018be0771bbd604a513881fa88fecf2c79350b34f034d9c7b129de1b14 extends Twig_Template
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
        $__internal_01dfc45691c5ad86abf1e898fd05b737237ff5b448db48335f25f15a405e337b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01dfc45691c5ad86abf1e898fd05b737237ff5b448db48335f25f15a405e337b->enter($__internal_01dfc45691c5ad86abf1e898fd05b737237ff5b448db48335f25f15a405e337b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4600c2e777985de76f46c1dd89b518cbc299a6e111dcbe806019c0e708cbee54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4600c2e777985de76f46c1dd89b518cbc299a6e111dcbe806019c0e708cbee54->enter($__internal_4600c2e777985de76f46c1dd89b518cbc299a6e111dcbe806019c0e708cbee54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_01dfc45691c5ad86abf1e898fd05b737237ff5b448db48335f25f15a405e337b->leave($__internal_01dfc45691c5ad86abf1e898fd05b737237ff5b448db48335f25f15a405e337b_prof);

        
        $__internal_4600c2e777985de76f46c1dd89b518cbc299a6e111dcbe806019c0e708cbee54->leave($__internal_4600c2e777985de76f46c1dd89b518cbc299a6e111dcbe806019c0e708cbee54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
