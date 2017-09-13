<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7a02132bc5059f611e066abc0e8b3d9e5f50f0aa4bfcdb4d656d9fe20ae81146 extends Twig_Template
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
        $__internal_a887d5f9c700ece7978962db09ee1b2adbaeaa46936a2a14cad1fafc0044ce25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a887d5f9c700ece7978962db09ee1b2adbaeaa46936a2a14cad1fafc0044ce25->enter($__internal_a887d5f9c700ece7978962db09ee1b2adbaeaa46936a2a14cad1fafc0044ce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c018d5038dad0404e9906fbdf91ad449a00e0f93862197315d6ab135ef2d3ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c018d5038dad0404e9906fbdf91ad449a00e0f93862197315d6ab135ef2d3ed1->enter($__internal_c018d5038dad0404e9906fbdf91ad449a00e0f93862197315d6ab135ef2d3ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a887d5f9c700ece7978962db09ee1b2adbaeaa46936a2a14cad1fafc0044ce25->leave($__internal_a887d5f9c700ece7978962db09ee1b2adbaeaa46936a2a14cad1fafc0044ce25_prof);

        
        $__internal_c018d5038dad0404e9906fbdf91ad449a00e0f93862197315d6ab135ef2d3ed1->leave($__internal_c018d5038dad0404e9906fbdf91ad449a00e0f93862197315d6ab135ef2d3ed1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
