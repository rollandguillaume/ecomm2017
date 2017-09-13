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
        $__internal_6514f067a28acddb4a817adbcc5705f1cd8d530653894ef3c1d7679a9b7bd563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6514f067a28acddb4a817adbcc5705f1cd8d530653894ef3c1d7679a9b7bd563->enter($__internal_6514f067a28acddb4a817adbcc5705f1cd8d530653894ef3c1d7679a9b7bd563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_db0b56679b7367c9d0d457ef6eb6a116b88a6b94831e1f17493158e11d58799e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0b56679b7367c9d0d457ef6eb6a116b88a6b94831e1f17493158e11d58799e->enter($__internal_db0b56679b7367c9d0d457ef6eb6a116b88a6b94831e1f17493158e11d58799e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6514f067a28acddb4a817adbcc5705f1cd8d530653894ef3c1d7679a9b7bd563->leave($__internal_6514f067a28acddb4a817adbcc5705f1cd8d530653894ef3c1d7679a9b7bd563_prof);

        
        $__internal_db0b56679b7367c9d0d457ef6eb6a116b88a6b94831e1f17493158e11d58799e->leave($__internal_db0b56679b7367c9d0d457ef6eb6a116b88a6b94831e1f17493158e11d58799e_prof);

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
