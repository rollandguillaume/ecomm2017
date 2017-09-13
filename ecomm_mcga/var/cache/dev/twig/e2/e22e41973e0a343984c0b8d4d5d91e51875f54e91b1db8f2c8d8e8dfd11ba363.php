<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f999432b5b4aa907a60a17a12299715ff89fc9bf8dd464c798caa48e50b69489 extends Twig_Template
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
        $__internal_f8cdceb11a448e03f4e2cae5afff3e0fae4343f0b32208616f12609db71cd6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cdceb11a448e03f4e2cae5afff3e0fae4343f0b32208616f12609db71cd6e6->enter($__internal_f8cdceb11a448e03f4e2cae5afff3e0fae4343f0b32208616f12609db71cd6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_12acbbfdb2f3942524c990fe2dce266727b54cd9ee497622dd9504bef621b2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12acbbfdb2f3942524c990fe2dce266727b54cd9ee497622dd9504bef621b2c5->enter($__internal_12acbbfdb2f3942524c990fe2dce266727b54cd9ee497622dd9504bef621b2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f8cdceb11a448e03f4e2cae5afff3e0fae4343f0b32208616f12609db71cd6e6->leave($__internal_f8cdceb11a448e03f4e2cae5afff3e0fae4343f0b32208616f12609db71cd6e6_prof);

        
        $__internal_12acbbfdb2f3942524c990fe2dce266727b54cd9ee497622dd9504bef621b2c5->leave($__internal_12acbbfdb2f3942524c990fe2dce266727b54cd9ee497622dd9504bef621b2c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
