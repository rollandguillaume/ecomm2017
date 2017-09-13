<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c6ef73861f95ac5fc02c9f77bdf2e99ece9af1cd98da7fe0a7ee4dda4d34c113 extends Twig_Template
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
        $__internal_afb4492e9e556193c63bd962bd3e9142ae62b7132b7b2248f7f59db050b60c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb4492e9e556193c63bd962bd3e9142ae62b7132b7b2248f7f59db050b60c96->enter($__internal_afb4492e9e556193c63bd962bd3e9142ae62b7132b7b2248f7f59db050b60c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_18aab4d1d21b81f376e016a678a0a2948c547603c45e2af2c3d6260687ece16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18aab4d1d21b81f376e016a678a0a2948c547603c45e2af2c3d6260687ece16b->enter($__internal_18aab4d1d21b81f376e016a678a0a2948c547603c45e2af2c3d6260687ece16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_afb4492e9e556193c63bd962bd3e9142ae62b7132b7b2248f7f59db050b60c96->leave($__internal_afb4492e9e556193c63bd962bd3e9142ae62b7132b7b2248f7f59db050b60c96_prof);

        
        $__internal_18aab4d1d21b81f376e016a678a0a2948c547603c45e2af2c3d6260687ece16b->leave($__internal_18aab4d1d21b81f376e016a678a0a2948c547603c45e2af2c3d6260687ece16b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
