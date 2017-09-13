<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3f307ff16ab6df60139c79bef12fd31483cc1ea795768f99f1977fc25af3de40 extends Twig_Template
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
        $__internal_f00803ebc8500e19b1a0d153b46d1cdcbfb3d7da55e74491a8766dda36d7c8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00803ebc8500e19b1a0d153b46d1cdcbfb3d7da55e74491a8766dda36d7c8a7->enter($__internal_f00803ebc8500e19b1a0d153b46d1cdcbfb3d7da55e74491a8766dda36d7c8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ea0283eca09e9e59720c948cf715a9fe076524298b0395551cfd0553ec3a3c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0283eca09e9e59720c948cf715a9fe076524298b0395551cfd0553ec3a3c07->enter($__internal_ea0283eca09e9e59720c948cf715a9fe076524298b0395551cfd0553ec3a3c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f00803ebc8500e19b1a0d153b46d1cdcbfb3d7da55e74491a8766dda36d7c8a7->leave($__internal_f00803ebc8500e19b1a0d153b46d1cdcbfb3d7da55e74491a8766dda36d7c8a7_prof);

        
        $__internal_ea0283eca09e9e59720c948cf715a9fe076524298b0395551cfd0553ec3a3c07->leave($__internal_ea0283eca09e9e59720c948cf715a9fe076524298b0395551cfd0553ec3a3c07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
