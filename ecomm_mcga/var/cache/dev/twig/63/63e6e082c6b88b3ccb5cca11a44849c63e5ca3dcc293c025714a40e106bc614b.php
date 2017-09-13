<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2c0bf4be0290bf58343fcf6e7d9901b2c5d567e9db02e78c01213c99f4fcea67 extends Twig_Template
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
        $__internal_a7f748250f64bf37def3911750ec4e8eb4645c6f21a503e2bf2d48d230e5d20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f748250f64bf37def3911750ec4e8eb4645c6f21a503e2bf2d48d230e5d20a->enter($__internal_a7f748250f64bf37def3911750ec4e8eb4645c6f21a503e2bf2d48d230e5d20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_47daba0cb8c92de949cdf7d951b47c4c36970d3fc240b46c661109edc2e947c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47daba0cb8c92de949cdf7d951b47c4c36970d3fc240b46c661109edc2e947c2->enter($__internal_47daba0cb8c92de949cdf7d951b47c4c36970d3fc240b46c661109edc2e947c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a7f748250f64bf37def3911750ec4e8eb4645c6f21a503e2bf2d48d230e5d20a->leave($__internal_a7f748250f64bf37def3911750ec4e8eb4645c6f21a503e2bf2d48d230e5d20a_prof);

        
        $__internal_47daba0cb8c92de949cdf7d951b47c4c36970d3fc240b46c661109edc2e947c2->leave($__internal_47daba0cb8c92de949cdf7d951b47c4c36970d3fc240b46c661109edc2e947c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
