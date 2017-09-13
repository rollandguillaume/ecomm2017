<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_7666449e8d2572653fa85930b119b191eadbf9b4ee08e9a7f913d69caee39022 extends Twig_Template
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
        $__internal_e3acbf5e6fbc1f71bd5df0397dc08dfdea77e9bd7ba08d9d66b6e982607ba554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3acbf5e6fbc1f71bd5df0397dc08dfdea77e9bd7ba08d9d66b6e982607ba554->enter($__internal_e3acbf5e6fbc1f71bd5df0397dc08dfdea77e9bd7ba08d9d66b6e982607ba554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_a02f897fed6267ba8ed98982ea7361257502b13a98b392905740ca07e3a45e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02f897fed6267ba8ed98982ea7361257502b13a98b392905740ca07e3a45e77->enter($__internal_a02f897fed6267ba8ed98982ea7361257502b13a98b392905740ca07e3a45e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_e3acbf5e6fbc1f71bd5df0397dc08dfdea77e9bd7ba08d9d66b6e982607ba554->leave($__internal_e3acbf5e6fbc1f71bd5df0397dc08dfdea77e9bd7ba08d9d66b6e982607ba554_prof);

        
        $__internal_a02f897fed6267ba8ed98982ea7361257502b13a98b392905740ca07e3a45e77->leave($__internal_a02f897fed6267ba8ed98982ea7361257502b13a98b392905740ca07e3a45e77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
