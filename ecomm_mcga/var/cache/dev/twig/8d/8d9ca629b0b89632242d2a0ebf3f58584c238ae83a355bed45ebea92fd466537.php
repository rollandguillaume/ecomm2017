<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_54f4973d01f36e3e963d368d93381514bd75e2db335afd9db7518c716209a59a extends Twig_Template
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
        $__internal_72f6877c8b8ac53a7a3a3c07311183838d27f911f3d3516a64559df9e60f920f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f6877c8b8ac53a7a3a3c07311183838d27f911f3d3516a64559df9e60f920f->enter($__internal_72f6877c8b8ac53a7a3a3c07311183838d27f911f3d3516a64559df9e60f920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_95883f7d4354a547469c29a0a317def6c7f9db5be210dc130f88cbd91a07d734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95883f7d4354a547469c29a0a317def6c7f9db5be210dc130f88cbd91a07d734->enter($__internal_95883f7d4354a547469c29a0a317def6c7f9db5be210dc130f88cbd91a07d734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_72f6877c8b8ac53a7a3a3c07311183838d27f911f3d3516a64559df9e60f920f->leave($__internal_72f6877c8b8ac53a7a3a3c07311183838d27f911f3d3516a64559df9e60f920f_prof);

        
        $__internal_95883f7d4354a547469c29a0a317def6c7f9db5be210dc130f88cbd91a07d734->leave($__internal_95883f7d4354a547469c29a0a317def6c7f9db5be210dc130f88cbd91a07d734_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
