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
        $__internal_e144db8ac2c8f0ca1a088a151a56f7e8a72b4dc5b561ac4b89dc6fe6870b2cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e144db8ac2c8f0ca1a088a151a56f7e8a72b4dc5b561ac4b89dc6fe6870b2cf8->enter($__internal_e144db8ac2c8f0ca1a088a151a56f7e8a72b4dc5b561ac4b89dc6fe6870b2cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7a5cd1a483290c6a180f769d5bf01fcbcff048b88761ac470dc5f39fad95d190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5cd1a483290c6a180f769d5bf01fcbcff048b88761ac470dc5f39fad95d190->enter($__internal_7a5cd1a483290c6a180f769d5bf01fcbcff048b88761ac470dc5f39fad95d190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e144db8ac2c8f0ca1a088a151a56f7e8a72b4dc5b561ac4b89dc6fe6870b2cf8->leave($__internal_e144db8ac2c8f0ca1a088a151a56f7e8a72b4dc5b561ac4b89dc6fe6870b2cf8_prof);

        
        $__internal_7a5cd1a483290c6a180f769d5bf01fcbcff048b88761ac470dc5f39fad95d190->leave($__internal_7a5cd1a483290c6a180f769d5bf01fcbcff048b88761ac470dc5f39fad95d190_prof);

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
