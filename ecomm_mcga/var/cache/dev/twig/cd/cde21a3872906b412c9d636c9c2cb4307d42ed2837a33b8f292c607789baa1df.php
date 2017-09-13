<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d3a2d0253641e6e6c6a77d79e7b24693b81be975c66e39cb336bae7b3c809e14 extends Twig_Template
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
        $__internal_8cc0604ae1cb936c215d73b486fe10f91e504d5c13fd89452f66796cc74bec59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc0604ae1cb936c215d73b486fe10f91e504d5c13fd89452f66796cc74bec59->enter($__internal_8cc0604ae1cb936c215d73b486fe10f91e504d5c13fd89452f66796cc74bec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_515ee8f101f23efe9048b0c793b6a281eabb4b52cc7f0aa1762331bd223e807e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515ee8f101f23efe9048b0c793b6a281eabb4b52cc7f0aa1762331bd223e807e->enter($__internal_515ee8f101f23efe9048b0c793b6a281eabb4b52cc7f0aa1762331bd223e807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8cc0604ae1cb936c215d73b486fe10f91e504d5c13fd89452f66796cc74bec59->leave($__internal_8cc0604ae1cb936c215d73b486fe10f91e504d5c13fd89452f66796cc74bec59_prof);

        
        $__internal_515ee8f101f23efe9048b0c793b6a281eabb4b52cc7f0aa1762331bd223e807e->leave($__internal_515ee8f101f23efe9048b0c793b6a281eabb4b52cc7f0aa1762331bd223e807e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
