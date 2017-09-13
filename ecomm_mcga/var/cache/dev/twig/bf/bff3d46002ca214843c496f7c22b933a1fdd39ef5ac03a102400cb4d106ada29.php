<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9d53efc76f6c8fbd8360fdf060ae33c49b2a41285a12e4d39e71494e6af250a6 extends Twig_Template
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
        $__internal_6aedc612940d01262d7e4a3d9a6dba706ece84513709dff86586906f3ea93886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aedc612940d01262d7e4a3d9a6dba706ece84513709dff86586906f3ea93886->enter($__internal_6aedc612940d01262d7e4a3d9a6dba706ece84513709dff86586906f3ea93886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5e7351e657c0fba8ca35d06eacc198d47f9c86e862c4d3c89f6400a588e0c975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7351e657c0fba8ca35d06eacc198d47f9c86e862c4d3c89f6400a588e0c975->enter($__internal_5e7351e657c0fba8ca35d06eacc198d47f9c86e862c4d3c89f6400a588e0c975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6aedc612940d01262d7e4a3d9a6dba706ece84513709dff86586906f3ea93886->leave($__internal_6aedc612940d01262d7e4a3d9a6dba706ece84513709dff86586906f3ea93886_prof);

        
        $__internal_5e7351e657c0fba8ca35d06eacc198d47f9c86e862c4d3c89f6400a588e0c975->leave($__internal_5e7351e657c0fba8ca35d06eacc198d47f9c86e862c4d3c89f6400a588e0c975_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
