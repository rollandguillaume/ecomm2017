<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f3e445c0016a149d1983c07d2585961d8f0a63f8b2bddee6d2bef06e297516f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8fb6f30da595f0f965356ba89526650f590b5da1b8786513871366d2549d322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fb6f30da595f0f965356ba89526650f590b5da1b8786513871366d2549d322->enter($__internal_f8fb6f30da595f0f965356ba89526650f590b5da1b8786513871366d2549d322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0bc93a3f096f30918e4d5728f3787d0887f923929cd549c2a98ccbd8a502bb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc93a3f096f30918e4d5728f3787d0887f923929cd549c2a98ccbd8a502bb10->enter($__internal_0bc93a3f096f30918e4d5728f3787d0887f923929cd549c2a98ccbd8a502bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f8fb6f30da595f0f965356ba89526650f590b5da1b8786513871366d2549d322->leave($__internal_f8fb6f30da595f0f965356ba89526650f590b5da1b8786513871366d2549d322_prof);

        
        $__internal_0bc93a3f096f30918e4d5728f3787d0887f923929cd549c2a98ccbd8a502bb10->leave($__internal_0bc93a3f096f30918e4d5728f3787d0887f923929cd549c2a98ccbd8a502bb10_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_604fc0726d6d8aba9c74f39c69d4f88cdd8b0cc88518b2f92e7b9be24e5bd1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604fc0726d6d8aba9c74f39c69d4f88cdd8b0cc88518b2f92e7b9be24e5bd1ff->enter($__internal_604fc0726d6d8aba9c74f39c69d4f88cdd8b0cc88518b2f92e7b9be24e5bd1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90433b53c3c234b75963a0a2480608c6de0bbc4640bb2cddffef6143eed5de90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90433b53c3c234b75963a0a2480608c6de0bbc4640bb2cddffef6143eed5de90->enter($__internal_90433b53c3c234b75963a0a2480608c6de0bbc4640bb2cddffef6143eed5de90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_90433b53c3c234b75963a0a2480608c6de0bbc4640bb2cddffef6143eed5de90->leave($__internal_90433b53c3c234b75963a0a2480608c6de0bbc4640bb2cddffef6143eed5de90_prof);

        
        $__internal_604fc0726d6d8aba9c74f39c69d4f88cdd8b0cc88518b2f92e7b9be24e5bd1ff->leave($__internal_604fc0726d6d8aba9c74f39c69d4f88cdd8b0cc88518b2f92e7b9be24e5bd1ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
