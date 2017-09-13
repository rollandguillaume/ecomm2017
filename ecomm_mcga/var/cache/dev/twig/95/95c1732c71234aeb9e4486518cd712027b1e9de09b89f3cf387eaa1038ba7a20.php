<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b39b38123e72a4159b05653b130229b5d6c369aa44df7aa804a3dba68e8a59b7 extends Twig_Template
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
        $__internal_5c35849963480ca5ed2d63bb99be68bc2da3a1413c44a835f57af1428f54ed9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c35849963480ca5ed2d63bb99be68bc2da3a1413c44a835f57af1428f54ed9f->enter($__internal_5c35849963480ca5ed2d63bb99be68bc2da3a1413c44a835f57af1428f54ed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d9f1e83f6b9ca50d289d55ec86579de9fad20f92251cdd60fa5cc01c15d6bf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f1e83f6b9ca50d289d55ec86579de9fad20f92251cdd60fa5cc01c15d6bf96->enter($__internal_d9f1e83f6b9ca50d289d55ec86579de9fad20f92251cdd60fa5cc01c15d6bf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5c35849963480ca5ed2d63bb99be68bc2da3a1413c44a835f57af1428f54ed9f->leave($__internal_5c35849963480ca5ed2d63bb99be68bc2da3a1413c44a835f57af1428f54ed9f_prof);

        
        $__internal_d9f1e83f6b9ca50d289d55ec86579de9fad20f92251cdd60fa5cc01c15d6bf96->leave($__internal_d9f1e83f6b9ca50d289d55ec86579de9fad20f92251cdd60fa5cc01c15d6bf96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
