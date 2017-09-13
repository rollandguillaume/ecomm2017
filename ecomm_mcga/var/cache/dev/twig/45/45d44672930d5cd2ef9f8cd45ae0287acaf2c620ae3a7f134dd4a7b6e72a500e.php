<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b8f9aa06991283aeeb11ef01da5388fe70af9036774ecedc4781950de3fd4634 extends Twig_Template
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
        $__internal_212943d752f0be435a80ca7dba45c79218445818ff4c408f3d27871662a5a7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212943d752f0be435a80ca7dba45c79218445818ff4c408f3d27871662a5a7b9->enter($__internal_212943d752f0be435a80ca7dba45c79218445818ff4c408f3d27871662a5a7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c66d8338a27b5574a161478b5e7baebec4cf0548984f35ba0b8e9b9f7f9a3f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66d8338a27b5574a161478b5e7baebec4cf0548984f35ba0b8e9b9f7f9a3f84->enter($__internal_c66d8338a27b5574a161478b5e7baebec4cf0548984f35ba0b8e9b9f7f9a3f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_212943d752f0be435a80ca7dba45c79218445818ff4c408f3d27871662a5a7b9->leave($__internal_212943d752f0be435a80ca7dba45c79218445818ff4c408f3d27871662a5a7b9_prof);

        
        $__internal_c66d8338a27b5574a161478b5e7baebec4cf0548984f35ba0b8e9b9f7f9a3f84->leave($__internal_c66d8338a27b5574a161478b5e7baebec4cf0548984f35ba0b8e9b9f7f9a3f84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
