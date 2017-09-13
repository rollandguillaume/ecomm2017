<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6cafe743c7842cc2cac3000572289a6daadb839517865a736ef43ea1d86432af extends Twig_Template
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
        $__internal_ab830b802196da83de16a19b5ba98e67612c990b5c23f1d3ea4ef5d8ec0a2a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab830b802196da83de16a19b5ba98e67612c990b5c23f1d3ea4ef5d8ec0a2a69->enter($__internal_ab830b802196da83de16a19b5ba98e67612c990b5c23f1d3ea4ef5d8ec0a2a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_60e16244c820d29c24dc49a5d573ffad139b4292c3b4a89826a0078d4c7789f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e16244c820d29c24dc49a5d573ffad139b4292c3b4a89826a0078d4c7789f8->enter($__internal_60e16244c820d29c24dc49a5d573ffad139b4292c3b4a89826a0078d4c7789f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ab830b802196da83de16a19b5ba98e67612c990b5c23f1d3ea4ef5d8ec0a2a69->leave($__internal_ab830b802196da83de16a19b5ba98e67612c990b5c23f1d3ea4ef5d8ec0a2a69_prof);

        
        $__internal_60e16244c820d29c24dc49a5d573ffad139b4292c3b4a89826a0078d4c7789f8->leave($__internal_60e16244c820d29c24dc49a5d573ffad139b4292c3b4a89826a0078d4c7789f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
