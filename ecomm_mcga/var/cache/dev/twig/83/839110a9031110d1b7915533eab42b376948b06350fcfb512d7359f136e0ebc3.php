<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8a0986d5bf5598ade5a5a6c4687dc086a0057bb31dd1865929869549ff5d4b0d extends Twig_Template
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
        $__internal_aaf49b224a09ef921fa9a866e105058cefbd8e4b4827506b508681264a1365bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf49b224a09ef921fa9a866e105058cefbd8e4b4827506b508681264a1365bd->enter($__internal_aaf49b224a09ef921fa9a866e105058cefbd8e4b4827506b508681264a1365bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_61a81c8eb8e42137d8dac6d8cc961002a2ccc8448a5dc01f31097a6db8d8fd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a81c8eb8e42137d8dac6d8cc961002a2ccc8448a5dc01f31097a6db8d8fd50->enter($__internal_61a81c8eb8e42137d8dac6d8cc961002a2ccc8448a5dc01f31097a6db8d8fd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aaf49b224a09ef921fa9a866e105058cefbd8e4b4827506b508681264a1365bd->leave($__internal_aaf49b224a09ef921fa9a866e105058cefbd8e4b4827506b508681264a1365bd_prof);

        
        $__internal_61a81c8eb8e42137d8dac6d8cc961002a2ccc8448a5dc01f31097a6db8d8fd50->leave($__internal_61a81c8eb8e42137d8dac6d8cc961002a2ccc8448a5dc01f31097a6db8d8fd50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
