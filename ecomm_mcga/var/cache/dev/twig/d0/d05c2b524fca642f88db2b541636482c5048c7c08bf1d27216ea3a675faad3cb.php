<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_256effdaa7b675172da42e74be9318a9e8674b614d11c9998742dc2b70e24f9c extends Twig_Template
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
        $__internal_0707fa8b07f8b5c7b9ad7eb9b97320714907737109805ec5221f6a168cdab3f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0707fa8b07f8b5c7b9ad7eb9b97320714907737109805ec5221f6a168cdab3f7->enter($__internal_0707fa8b07f8b5c7b9ad7eb9b97320714907737109805ec5221f6a168cdab3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_51172a3d11ddc4165714f657cf07e79ea82274efde5658e32c6dcfbf4ec6fad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51172a3d11ddc4165714f657cf07e79ea82274efde5658e32c6dcfbf4ec6fad3->enter($__internal_51172a3d11ddc4165714f657cf07e79ea82274efde5658e32c6dcfbf4ec6fad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0707fa8b07f8b5c7b9ad7eb9b97320714907737109805ec5221f6a168cdab3f7->leave($__internal_0707fa8b07f8b5c7b9ad7eb9b97320714907737109805ec5221f6a168cdab3f7_prof);

        
        $__internal_51172a3d11ddc4165714f657cf07e79ea82274efde5658e32c6dcfbf4ec6fad3->leave($__internal_51172a3d11ddc4165714f657cf07e79ea82274efde5658e32c6dcfbf4ec6fad3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
