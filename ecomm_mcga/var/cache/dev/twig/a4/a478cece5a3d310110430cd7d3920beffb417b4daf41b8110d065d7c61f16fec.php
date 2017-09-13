<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_61aeb43e60dfda1459470934c7479e104b979a5aa68c811ddf8cbb040e10a06d extends Twig_Template
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
        $__internal_9728b1715c9b9f3a720e65736c5976844445870724756ba6be39a392d6141531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9728b1715c9b9f3a720e65736c5976844445870724756ba6be39a392d6141531->enter($__internal_9728b1715c9b9f3a720e65736c5976844445870724756ba6be39a392d6141531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_dc5febf21a8ea2f676a4b5e510b21f97c0b1d598bcebcb75e5f35ef6a55c9ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5febf21a8ea2f676a4b5e510b21f97c0b1d598bcebcb75e5f35ef6a55c9ea4->enter($__internal_dc5febf21a8ea2f676a4b5e510b21f97c0b1d598bcebcb75e5f35ef6a55c9ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9728b1715c9b9f3a720e65736c5976844445870724756ba6be39a392d6141531->leave($__internal_9728b1715c9b9f3a720e65736c5976844445870724756ba6be39a392d6141531_prof);

        
        $__internal_dc5febf21a8ea2f676a4b5e510b21f97c0b1d598bcebcb75e5f35ef6a55c9ea4->leave($__internal_dc5febf21a8ea2f676a4b5e510b21f97c0b1d598bcebcb75e5f35ef6a55c9ea4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
