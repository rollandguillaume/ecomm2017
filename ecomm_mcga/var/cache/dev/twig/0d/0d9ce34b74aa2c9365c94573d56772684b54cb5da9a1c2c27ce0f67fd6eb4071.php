<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a7ef40cafac11eebbaff44ffdebc8c7252561b620626b78935f0799281b17a71 extends Twig_Template
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
        $__internal_e3f56fa26c280156777c91ba80cfd86282578d02557a711d5f84f9c48b3728e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f56fa26c280156777c91ba80cfd86282578d02557a711d5f84f9c48b3728e4->enter($__internal_e3f56fa26c280156777c91ba80cfd86282578d02557a711d5f84f9c48b3728e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_7101752fe7590da4b229a0a93fa636ebd8e1497aa9245fc25ffaaf9beed0d264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7101752fe7590da4b229a0a93fa636ebd8e1497aa9245fc25ffaaf9beed0d264->enter($__internal_7101752fe7590da4b229a0a93fa636ebd8e1497aa9245fc25ffaaf9beed0d264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e3f56fa26c280156777c91ba80cfd86282578d02557a711d5f84f9c48b3728e4->leave($__internal_e3f56fa26c280156777c91ba80cfd86282578d02557a711d5f84f9c48b3728e4_prof);

        
        $__internal_7101752fe7590da4b229a0a93fa636ebd8e1497aa9245fc25ffaaf9beed0d264->leave($__internal_7101752fe7590da4b229a0a93fa636ebd8e1497aa9245fc25ffaaf9beed0d264_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
