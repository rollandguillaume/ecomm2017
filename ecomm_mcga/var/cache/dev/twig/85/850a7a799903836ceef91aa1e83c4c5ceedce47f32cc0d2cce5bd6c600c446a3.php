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
        $__internal_a2a0bf4290f92f6e1c5e21e4cd673cb0031832ecdb6077e0fed327e3ad176778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a0bf4290f92f6e1c5e21e4cd673cb0031832ecdb6077e0fed327e3ad176778->enter($__internal_a2a0bf4290f92f6e1c5e21e4cd673cb0031832ecdb6077e0fed327e3ad176778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_108dfdf7e0401ef9d8e82c44732b1c21ab0dcd442d7fcc899dc6f2165015c809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108dfdf7e0401ef9d8e82c44732b1c21ab0dcd442d7fcc899dc6f2165015c809->enter($__internal_108dfdf7e0401ef9d8e82c44732b1c21ab0dcd442d7fcc899dc6f2165015c809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a2a0bf4290f92f6e1c5e21e4cd673cb0031832ecdb6077e0fed327e3ad176778->leave($__internal_a2a0bf4290f92f6e1c5e21e4cd673cb0031832ecdb6077e0fed327e3ad176778_prof);

        
        $__internal_108dfdf7e0401ef9d8e82c44732b1c21ab0dcd442d7fcc899dc6f2165015c809->leave($__internal_108dfdf7e0401ef9d8e82c44732b1c21ab0dcd442d7fcc899dc6f2165015c809_prof);

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
