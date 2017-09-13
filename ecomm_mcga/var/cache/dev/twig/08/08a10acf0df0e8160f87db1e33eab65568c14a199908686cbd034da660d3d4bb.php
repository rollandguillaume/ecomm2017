<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0fbff5b886f18f5639f1b885e89da12b11f6a82cc2da60cb53764eb916eb2fb4 extends Twig_Template
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
        $__internal_7e4716b830374f2526013ad306f60f2342cfbf899d6baf64c4c8e5501b624121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4716b830374f2526013ad306f60f2342cfbf899d6baf64c4c8e5501b624121->enter($__internal_7e4716b830374f2526013ad306f60f2342cfbf899d6baf64c4c8e5501b624121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a4a6aeb64cb3bc8b7ba60c1c64fa7a5cd0118123023e225ee7ee86f2209e02ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a6aeb64cb3bc8b7ba60c1c64fa7a5cd0118123023e225ee7ee86f2209e02ee->enter($__internal_a4a6aeb64cb3bc8b7ba60c1c64fa7a5cd0118123023e225ee7ee86f2209e02ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7e4716b830374f2526013ad306f60f2342cfbf899d6baf64c4c8e5501b624121->leave($__internal_7e4716b830374f2526013ad306f60f2342cfbf899d6baf64c4c8e5501b624121_prof);

        
        $__internal_a4a6aeb64cb3bc8b7ba60c1c64fa7a5cd0118123023e225ee7ee86f2209e02ee->leave($__internal_a4a6aeb64cb3bc8b7ba60c1c64fa7a5cd0118123023e225ee7ee86f2209e02ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
