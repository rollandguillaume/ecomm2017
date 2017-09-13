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
        $__internal_e61ab2d26573b893c947f4a8b6a6a3c082f4f93e91d6b84e69e35369da45b445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61ab2d26573b893c947f4a8b6a6a3c082f4f93e91d6b84e69e35369da45b445->enter($__internal_e61ab2d26573b893c947f4a8b6a6a3c082f4f93e91d6b84e69e35369da45b445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d71cfcdc3608a26212910fdf234d9da6babaa59c96e89703ff4385f9671f4b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71cfcdc3608a26212910fdf234d9da6babaa59c96e89703ff4385f9671f4b99->enter($__internal_d71cfcdc3608a26212910fdf234d9da6babaa59c96e89703ff4385f9671f4b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e61ab2d26573b893c947f4a8b6a6a3c082f4f93e91d6b84e69e35369da45b445->leave($__internal_e61ab2d26573b893c947f4a8b6a6a3c082f4f93e91d6b84e69e35369da45b445_prof);

        
        $__internal_d71cfcdc3608a26212910fdf234d9da6babaa59c96e89703ff4385f9671f4b99->leave($__internal_d71cfcdc3608a26212910fdf234d9da6babaa59c96e89703ff4385f9671f4b99_prof);

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
