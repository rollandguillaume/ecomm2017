<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bbdf2d02f6a469cefe700918f2519bf108680707fa48e2e027582ece7942340a extends Twig_Template
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
        $__internal_a018e3c0e602fb915afcdb5d1bd2d9e36095fef4bffa417c304f4b4f8c08e138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a018e3c0e602fb915afcdb5d1bd2d9e36095fef4bffa417c304f4b4f8c08e138->enter($__internal_a018e3c0e602fb915afcdb5d1bd2d9e36095fef4bffa417c304f4b4f8c08e138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_415fc4d426487cf0a815b79bd809746ac837f712e39a83f2257f8048c44a7b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415fc4d426487cf0a815b79bd809746ac837f712e39a83f2257f8048c44a7b67->enter($__internal_415fc4d426487cf0a815b79bd809746ac837f712e39a83f2257f8048c44a7b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a018e3c0e602fb915afcdb5d1bd2d9e36095fef4bffa417c304f4b4f8c08e138->leave($__internal_a018e3c0e602fb915afcdb5d1bd2d9e36095fef4bffa417c304f4b4f8c08e138_prof);

        
        $__internal_415fc4d426487cf0a815b79bd809746ac837f712e39a83f2257f8048c44a7b67->leave($__internal_415fc4d426487cf0a815b79bd809746ac837f712e39a83f2257f8048c44a7b67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
