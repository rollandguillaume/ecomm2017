<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_185ba3fe692def0904203c1c72ec9cdbb468db6c6f9883824b84cab1e9f90b74 extends Twig_Template
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
        $__internal_f68b81df3544598fd6904667eca66c46a3e59484021608247ad550dc53857632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68b81df3544598fd6904667eca66c46a3e59484021608247ad550dc53857632->enter($__internal_f68b81df3544598fd6904667eca66c46a3e59484021608247ad550dc53857632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5a462c065d020e6219d5f3d5e3f26160238f9c8cac811dec2968a270e05214e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a462c065d020e6219d5f3d5e3f26160238f9c8cac811dec2968a270e05214e7->enter($__internal_5a462c065d020e6219d5f3d5e3f26160238f9c8cac811dec2968a270e05214e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f68b81df3544598fd6904667eca66c46a3e59484021608247ad550dc53857632->leave($__internal_f68b81df3544598fd6904667eca66c46a3e59484021608247ad550dc53857632_prof);

        
        $__internal_5a462c065d020e6219d5f3d5e3f26160238f9c8cac811dec2968a270e05214e7->leave($__internal_5a462c065d020e6219d5f3d5e3f26160238f9c8cac811dec2968a270e05214e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
