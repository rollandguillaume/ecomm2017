<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_87344a7adb757cd19a89e38e7cccbadcbc6c616bce4b5112daa78553e0ccf340 extends Twig_Template
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
        $__internal_81e8173938b248f23609d75fc1d7ff64e1bfa3aa755847eed6da485efdc4bacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e8173938b248f23609d75fc1d7ff64e1bfa3aa755847eed6da485efdc4bacc->enter($__internal_81e8173938b248f23609d75fc1d7ff64e1bfa3aa755847eed6da485efdc4bacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_a4be713adf7c3d1c0fb456d639fb002191e6aa434867e5c7a53e37a7fc2bde7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4be713adf7c3d1c0fb456d639fb002191e6aa434867e5c7a53e37a7fc2bde7e->enter($__internal_a4be713adf7c3d1c0fb456d639fb002191e6aa434867e5c7a53e37a7fc2bde7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_81e8173938b248f23609d75fc1d7ff64e1bfa3aa755847eed6da485efdc4bacc->leave($__internal_81e8173938b248f23609d75fc1d7ff64e1bfa3aa755847eed6da485efdc4bacc_prof);

        
        $__internal_a4be713adf7c3d1c0fb456d639fb002191e6aa434867e5c7a53e37a7fc2bde7e->leave($__internal_a4be713adf7c3d1c0fb456d639fb002191e6aa434867e5c7a53e37a7fc2bde7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
