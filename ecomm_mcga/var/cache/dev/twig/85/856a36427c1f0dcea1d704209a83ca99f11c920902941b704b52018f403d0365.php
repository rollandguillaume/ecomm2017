<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7769a2bf121a16b69a543407a57e2a110a4cf87a40d604ae80bd5011ab542719 extends Twig_Template
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
        $__internal_8949e33028ebe0601f01421738695af76aee86a588d65c1ab3876ad8c9c8f09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8949e33028ebe0601f01421738695af76aee86a588d65c1ab3876ad8c9c8f09f->enter($__internal_8949e33028ebe0601f01421738695af76aee86a588d65c1ab3876ad8c9c8f09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f51d8dce39a5254dc8942eabd641f4d6aa47866e328bcad585e36faf64fa3aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51d8dce39a5254dc8942eabd641f4d6aa47866e328bcad585e36faf64fa3aa5->enter($__internal_f51d8dce39a5254dc8942eabd641f4d6aa47866e328bcad585e36faf64fa3aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8949e33028ebe0601f01421738695af76aee86a588d65c1ab3876ad8c9c8f09f->leave($__internal_8949e33028ebe0601f01421738695af76aee86a588d65c1ab3876ad8c9c8f09f_prof);

        
        $__internal_f51d8dce39a5254dc8942eabd641f4d6aa47866e328bcad585e36faf64fa3aa5->leave($__internal_f51d8dce39a5254dc8942eabd641f4d6aa47866e328bcad585e36faf64fa3aa5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
