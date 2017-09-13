<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cfe50e9bfbfb7246f8638d0a12a8c8112736197e19a61e2a772fecdee67a1d64 extends Twig_Template
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
        $__internal_115311e9ce283e05f0a10c4256721c54c5b36959a1a62283a1d1e856503b29eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115311e9ce283e05f0a10c4256721c54c5b36959a1a62283a1d1e856503b29eb->enter($__internal_115311e9ce283e05f0a10c4256721c54c5b36959a1a62283a1d1e856503b29eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_1e72e8d0cf60e3383e0943cba2ceea88b8b80cfd6094ef041bf688329a4eefe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e72e8d0cf60e3383e0943cba2ceea88b8b80cfd6094ef041bf688329a4eefe7->enter($__internal_1e72e8d0cf60e3383e0943cba2ceea88b8b80cfd6094ef041bf688329a4eefe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_115311e9ce283e05f0a10c4256721c54c5b36959a1a62283a1d1e856503b29eb->leave($__internal_115311e9ce283e05f0a10c4256721c54c5b36959a1a62283a1d1e856503b29eb_prof);

        
        $__internal_1e72e8d0cf60e3383e0943cba2ceea88b8b80cfd6094ef041bf688329a4eefe7->leave($__internal_1e72e8d0cf60e3383e0943cba2ceea88b8b80cfd6094ef041bf688329a4eefe7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
