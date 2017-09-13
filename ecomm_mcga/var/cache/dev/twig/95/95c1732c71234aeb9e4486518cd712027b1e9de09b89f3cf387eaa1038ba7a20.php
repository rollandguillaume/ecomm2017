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
        $__internal_1e052204ce2d1399814d954c63adac44fd6156846bbb2918b00cd64ab35d6481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e052204ce2d1399814d954c63adac44fd6156846bbb2918b00cd64ab35d6481->enter($__internal_1e052204ce2d1399814d954c63adac44fd6156846bbb2918b00cd64ab35d6481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e8737e23d4b0242121b5e9703e0dec9254be4b5143a4b6bd67e5897a0a8b986f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8737e23d4b0242121b5e9703e0dec9254be4b5143a4b6bd67e5897a0a8b986f->enter($__internal_e8737e23d4b0242121b5e9703e0dec9254be4b5143a4b6bd67e5897a0a8b986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1e052204ce2d1399814d954c63adac44fd6156846bbb2918b00cd64ab35d6481->leave($__internal_1e052204ce2d1399814d954c63adac44fd6156846bbb2918b00cd64ab35d6481_prof);

        
        $__internal_e8737e23d4b0242121b5e9703e0dec9254be4b5143a4b6bd67e5897a0a8b986f->leave($__internal_e8737e23d4b0242121b5e9703e0dec9254be4b5143a4b6bd67e5897a0a8b986f_prof);

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
