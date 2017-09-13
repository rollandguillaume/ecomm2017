<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_58263f4e03d50c5cf9878f99efd29918963ed525153142cba9be12fb135021f6 extends Twig_Template
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
        $__internal_61950f1d4c30992470ab4c40c83b553afcff0c506344be03c80c6c65105eb618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61950f1d4c30992470ab4c40c83b553afcff0c506344be03c80c6c65105eb618->enter($__internal_61950f1d4c30992470ab4c40c83b553afcff0c506344be03c80c6c65105eb618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2462aa1ff667009cb3c02127dcdbbf6742ed8a85e67fd1a7a04749e920b7dffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2462aa1ff667009cb3c02127dcdbbf6742ed8a85e67fd1a7a04749e920b7dffe->enter($__internal_2462aa1ff667009cb3c02127dcdbbf6742ed8a85e67fd1a7a04749e920b7dffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_61950f1d4c30992470ab4c40c83b553afcff0c506344be03c80c6c65105eb618->leave($__internal_61950f1d4c30992470ab4c40c83b553afcff0c506344be03c80c6c65105eb618_prof);

        
        $__internal_2462aa1ff667009cb3c02127dcdbbf6742ed8a85e67fd1a7a04749e920b7dffe->leave($__internal_2462aa1ff667009cb3c02127dcdbbf6742ed8a85e67fd1a7a04749e920b7dffe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
