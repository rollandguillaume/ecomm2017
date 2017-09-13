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
        $__internal_34f70b7f8dedd71f73a5e2d1a067b58cc86b20ee49f9efc46f4f7c557c2329a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f70b7f8dedd71f73a5e2d1a067b58cc86b20ee49f9efc46f4f7c557c2329a4->enter($__internal_34f70b7f8dedd71f73a5e2d1a067b58cc86b20ee49f9efc46f4f7c557c2329a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_161d40b3a618a946df23d249800789eded741fa96a00c38db216657e91ee440a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161d40b3a618a946df23d249800789eded741fa96a00c38db216657e91ee440a->enter($__internal_161d40b3a618a946df23d249800789eded741fa96a00c38db216657e91ee440a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_34f70b7f8dedd71f73a5e2d1a067b58cc86b20ee49f9efc46f4f7c557c2329a4->leave($__internal_34f70b7f8dedd71f73a5e2d1a067b58cc86b20ee49f9efc46f4f7c557c2329a4_prof);

        
        $__internal_161d40b3a618a946df23d249800789eded741fa96a00c38db216657e91ee440a->leave($__internal_161d40b3a618a946df23d249800789eded741fa96a00c38db216657e91ee440a_prof);

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
