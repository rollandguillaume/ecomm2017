<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_681119f560756d0910b80b0ed4c59c2aac9518ee3f404aa92ab2a8759637c574 extends Twig_Template
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
        $__internal_290ed9e2681aad1edf03f14e2df9090914d2ce0f20c89611e36f50d335aa91fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290ed9e2681aad1edf03f14e2df9090914d2ce0f20c89611e36f50d335aa91fc->enter($__internal_290ed9e2681aad1edf03f14e2df9090914d2ce0f20c89611e36f50d335aa91fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_de9b7ecfa208ef7d9211d5e0ccb4e89d7b1e3945ee7984c3abb512bd85242404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9b7ecfa208ef7d9211d5e0ccb4e89d7b1e3945ee7984c3abb512bd85242404->enter($__internal_de9b7ecfa208ef7d9211d5e0ccb4e89d7b1e3945ee7984c3abb512bd85242404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_290ed9e2681aad1edf03f14e2df9090914d2ce0f20c89611e36f50d335aa91fc->leave($__internal_290ed9e2681aad1edf03f14e2df9090914d2ce0f20c89611e36f50d335aa91fc_prof);

        
        $__internal_de9b7ecfa208ef7d9211d5e0ccb4e89d7b1e3945ee7984c3abb512bd85242404->leave($__internal_de9b7ecfa208ef7d9211d5e0ccb4e89d7b1e3945ee7984c3abb512bd85242404_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
