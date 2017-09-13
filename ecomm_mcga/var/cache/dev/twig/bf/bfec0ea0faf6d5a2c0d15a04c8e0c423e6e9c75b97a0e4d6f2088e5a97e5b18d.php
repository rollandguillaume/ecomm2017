<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dab7b52c5f9cb5ad1767435ae39270c3fa413844b8dd3adecc2f4118f98f0480 extends Twig_Template
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
        $__internal_4ae1c0c2cb01c57361a273c44f58ac94837cbeea77b7fc41a5ac737cad9df05d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae1c0c2cb01c57361a273c44f58ac94837cbeea77b7fc41a5ac737cad9df05d->enter($__internal_4ae1c0c2cb01c57361a273c44f58ac94837cbeea77b7fc41a5ac737cad9df05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_eaa61941cc99fae063e9c75626fb25c8884952c02124659d5e803095b8d5e979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa61941cc99fae063e9c75626fb25c8884952c02124659d5e803095b8d5e979->enter($__internal_eaa61941cc99fae063e9c75626fb25c8884952c02124659d5e803095b8d5e979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4ae1c0c2cb01c57361a273c44f58ac94837cbeea77b7fc41a5ac737cad9df05d->leave($__internal_4ae1c0c2cb01c57361a273c44f58ac94837cbeea77b7fc41a5ac737cad9df05d_prof);

        
        $__internal_eaa61941cc99fae063e9c75626fb25c8884952c02124659d5e803095b8d5e979->leave($__internal_eaa61941cc99fae063e9c75626fb25c8884952c02124659d5e803095b8d5e979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
