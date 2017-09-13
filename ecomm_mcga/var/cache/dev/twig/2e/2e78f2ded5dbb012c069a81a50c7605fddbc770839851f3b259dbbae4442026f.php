<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_292fbbbcf51705d790567d41514d6023b04749d27a0c5361db2e9841cde730e0 extends Twig_Template
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
        $__internal_f4474ef674c3065cfbb7bab428638341be9e7bc6cc291d489861e133cc920e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4474ef674c3065cfbb7bab428638341be9e7bc6cc291d489861e133cc920e58->enter($__internal_f4474ef674c3065cfbb7bab428638341be9e7bc6cc291d489861e133cc920e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1045a29155e05b0ee790b1f4b75581e2a44034f5f1aeae80e1f77efcc48d108f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1045a29155e05b0ee790b1f4b75581e2a44034f5f1aeae80e1f77efcc48d108f->enter($__internal_1045a29155e05b0ee790b1f4b75581e2a44034f5f1aeae80e1f77efcc48d108f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f4474ef674c3065cfbb7bab428638341be9e7bc6cc291d489861e133cc920e58->leave($__internal_f4474ef674c3065cfbb7bab428638341be9e7bc6cc291d489861e133cc920e58_prof);

        
        $__internal_1045a29155e05b0ee790b1f4b75581e2a44034f5f1aeae80e1f77efcc48d108f->leave($__internal_1045a29155e05b0ee790b1f4b75581e2a44034f5f1aeae80e1f77efcc48d108f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
