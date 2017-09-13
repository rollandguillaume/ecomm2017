<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6cafe743c7842cc2cac3000572289a6daadb839517865a736ef43ea1d86432af extends Twig_Template
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
        $__internal_d260447d884b25efecc7d6a30affa80d9dd8cbc018a3a6a734740f08be85a563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d260447d884b25efecc7d6a30affa80d9dd8cbc018a3a6a734740f08be85a563->enter($__internal_d260447d884b25efecc7d6a30affa80d9dd8cbc018a3a6a734740f08be85a563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f5f22611ebf552a2c05af833d4f135cd1af0e5cc1ca7e1414684019971ef145e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f22611ebf552a2c05af833d4f135cd1af0e5cc1ca7e1414684019971ef145e->enter($__internal_f5f22611ebf552a2c05af833d4f135cd1af0e5cc1ca7e1414684019971ef145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d260447d884b25efecc7d6a30affa80d9dd8cbc018a3a6a734740f08be85a563->leave($__internal_d260447d884b25efecc7d6a30affa80d9dd8cbc018a3a6a734740f08be85a563_prof);

        
        $__internal_f5f22611ebf552a2c05af833d4f135cd1af0e5cc1ca7e1414684019971ef145e->leave($__internal_f5f22611ebf552a2c05af833d4f135cd1af0e5cc1ca7e1414684019971ef145e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
