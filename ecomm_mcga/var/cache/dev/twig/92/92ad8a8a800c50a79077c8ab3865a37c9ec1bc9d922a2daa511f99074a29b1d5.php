<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4c5e398cf32ecdcd0d964c7b0985dafb1ca5328db16ef1aeea780a91cafd3d49 extends Twig_Template
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
        $__internal_e8cba26372ddb203d213797384dcc31810df794b49b860dd0af945b7bc2ffeba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cba26372ddb203d213797384dcc31810df794b49b860dd0af945b7bc2ffeba->enter($__internal_e8cba26372ddb203d213797384dcc31810df794b49b860dd0af945b7bc2ffeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_6743e4163f38ea4021a5f4dde13a0d9e066c7279c6ddf18146d06d779a29be35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6743e4163f38ea4021a5f4dde13a0d9e066c7279c6ddf18146d06d779a29be35->enter($__internal_6743e4163f38ea4021a5f4dde13a0d9e066c7279c6ddf18146d06d779a29be35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e8cba26372ddb203d213797384dcc31810df794b49b860dd0af945b7bc2ffeba->leave($__internal_e8cba26372ddb203d213797384dcc31810df794b49b860dd0af945b7bc2ffeba_prof);

        
        $__internal_6743e4163f38ea4021a5f4dde13a0d9e066c7279c6ddf18146d06d779a29be35->leave($__internal_6743e4163f38ea4021a5f4dde13a0d9e066c7279c6ddf18146d06d779a29be35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
