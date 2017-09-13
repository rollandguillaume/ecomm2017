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
        $__internal_87b3eac53cad7e337fe170cdc6effdea392c80f7e3908e7568d1fef8cf9c839d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b3eac53cad7e337fe170cdc6effdea392c80f7e3908e7568d1fef8cf9c839d->enter($__internal_87b3eac53cad7e337fe170cdc6effdea392c80f7e3908e7568d1fef8cf9c839d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0c9d06fb9a83774092338212d528ba59125fb9a7724ee302a182ff37a0a03e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9d06fb9a83774092338212d528ba59125fb9a7724ee302a182ff37a0a03e6e->enter($__internal_0c9d06fb9a83774092338212d528ba59125fb9a7724ee302a182ff37a0a03e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_87b3eac53cad7e337fe170cdc6effdea392c80f7e3908e7568d1fef8cf9c839d->leave($__internal_87b3eac53cad7e337fe170cdc6effdea392c80f7e3908e7568d1fef8cf9c839d_prof);

        
        $__internal_0c9d06fb9a83774092338212d528ba59125fb9a7724ee302a182ff37a0a03e6e->leave($__internal_0c9d06fb9a83774092338212d528ba59125fb9a7724ee302a182ff37a0a03e6e_prof);

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
