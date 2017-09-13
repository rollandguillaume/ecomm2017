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
        $__internal_df0bc80f897d03e8f44af4e87577e8ecb879b55123d3774b129a470bc5a88361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0bc80f897d03e8f44af4e87577e8ecb879b55123d3774b129a470bc5a88361->enter($__internal_df0bc80f897d03e8f44af4e87577e8ecb879b55123d3774b129a470bc5a88361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_85ad25c0420b915983c282d583074080b837cb2f8c518d1216c066bf8458c77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ad25c0420b915983c282d583074080b837cb2f8c518d1216c066bf8458c77b->enter($__internal_85ad25c0420b915983c282d583074080b837cb2f8c518d1216c066bf8458c77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_df0bc80f897d03e8f44af4e87577e8ecb879b55123d3774b129a470bc5a88361->leave($__internal_df0bc80f897d03e8f44af4e87577e8ecb879b55123d3774b129a470bc5a88361_prof);

        
        $__internal_85ad25c0420b915983c282d583074080b837cb2f8c518d1216c066bf8458c77b->leave($__internal_85ad25c0420b915983c282d583074080b837cb2f8c518d1216c066bf8458c77b_prof);

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
