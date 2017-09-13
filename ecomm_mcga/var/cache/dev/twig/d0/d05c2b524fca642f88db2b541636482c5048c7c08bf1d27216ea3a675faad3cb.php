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
        $__internal_0d96cd1f78c9539b653cc3814b224705b716eb8492591f80eba77be8fb6f93ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d96cd1f78c9539b653cc3814b224705b716eb8492591f80eba77be8fb6f93ec->enter($__internal_0d96cd1f78c9539b653cc3814b224705b716eb8492591f80eba77be8fb6f93ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4105829708ae74bc2ed5fea87daad8ffce9d91e02f6d04838bc794cd09ff4ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4105829708ae74bc2ed5fea87daad8ffce9d91e02f6d04838bc794cd09ff4ac2->enter($__internal_4105829708ae74bc2ed5fea87daad8ffce9d91e02f6d04838bc794cd09ff4ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0d96cd1f78c9539b653cc3814b224705b716eb8492591f80eba77be8fb6f93ec->leave($__internal_0d96cd1f78c9539b653cc3814b224705b716eb8492591f80eba77be8fb6f93ec_prof);

        
        $__internal_4105829708ae74bc2ed5fea87daad8ffce9d91e02f6d04838bc794cd09ff4ac2->leave($__internal_4105829708ae74bc2ed5fea87daad8ffce9d91e02f6d04838bc794cd09ff4ac2_prof);

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
