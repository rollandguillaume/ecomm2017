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
        $__internal_35ef2d3d94f996b56b3d13b321cfdfbb0ad4c7dab35dca4e7d03b41956ee53a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ef2d3d94f996b56b3d13b321cfdfbb0ad4c7dab35dca4e7d03b41956ee53a5->enter($__internal_35ef2d3d94f996b56b3d13b321cfdfbb0ad4c7dab35dca4e7d03b41956ee53a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_545e5a2821305e662203bb8d0c4976cf5e0502b8ec6b5e448b1f7d8cd73f6b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545e5a2821305e662203bb8d0c4976cf5e0502b8ec6b5e448b1f7d8cd73f6b08->enter($__internal_545e5a2821305e662203bb8d0c4976cf5e0502b8ec6b5e448b1f7d8cd73f6b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_35ef2d3d94f996b56b3d13b321cfdfbb0ad4c7dab35dca4e7d03b41956ee53a5->leave($__internal_35ef2d3d94f996b56b3d13b321cfdfbb0ad4c7dab35dca4e7d03b41956ee53a5_prof);

        
        $__internal_545e5a2821305e662203bb8d0c4976cf5e0502b8ec6b5e448b1f7d8cd73f6b08->leave($__internal_545e5a2821305e662203bb8d0c4976cf5e0502b8ec6b5e448b1f7d8cd73f6b08_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_67d0e37bf46c41e1ef8adc2266677e732f545087bd6e53a1cf56128a24a2e9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d0e37bf46c41e1ef8adc2266677e732f545087bd6e53a1cf56128a24a2e9d2->enter($__internal_67d0e37bf46c41e1ef8adc2266677e732f545087bd6e53a1cf56128a24a2e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e03ef7838fe3c7f896cff188871aa09296a3a2ccc137d9cb4ab7fc7692c60f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03ef7838fe3c7f896cff188871aa09296a3a2ccc137d9cb4ab7fc7692c60f7b->enter($__internal_e03ef7838fe3c7f896cff188871aa09296a3a2ccc137d9cb4ab7fc7692c60f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e03ef7838fe3c7f896cff188871aa09296a3a2ccc137d9cb4ab7fc7692c60f7b->leave($__internal_e03ef7838fe3c7f896cff188871aa09296a3a2ccc137d9cb4ab7fc7692c60f7b_prof);

        
        $__internal_67d0e37bf46c41e1ef8adc2266677e732f545087bd6e53a1cf56128a24a2e9d2->leave($__internal_67d0e37bf46c41e1ef8adc2266677e732f545087bd6e53a1cf56128a24a2e9d2_prof);

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
