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
        $__internal_61358d5780d4f5a1e68987eb739abcde88b8b98ca1e8dae8e2698f99c7aa0264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61358d5780d4f5a1e68987eb739abcde88b8b98ca1e8dae8e2698f99c7aa0264->enter($__internal_61358d5780d4f5a1e68987eb739abcde88b8b98ca1e8dae8e2698f99c7aa0264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5f9fcc76c65164a2ee34912952905812e62d580e38e311fa099a44ca6fe60249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9fcc76c65164a2ee34912952905812e62d580e38e311fa099a44ca6fe60249->enter($__internal_5f9fcc76c65164a2ee34912952905812e62d580e38e311fa099a44ca6fe60249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_61358d5780d4f5a1e68987eb739abcde88b8b98ca1e8dae8e2698f99c7aa0264->leave($__internal_61358d5780d4f5a1e68987eb739abcde88b8b98ca1e8dae8e2698f99c7aa0264_prof);

        
        $__internal_5f9fcc76c65164a2ee34912952905812e62d580e38e311fa099a44ca6fe60249->leave($__internal_5f9fcc76c65164a2ee34912952905812e62d580e38e311fa099a44ca6fe60249_prof);

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
