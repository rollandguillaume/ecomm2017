<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_594a2b01a8d79d1af45323d71bdf4776936e0432c244ceb0a77c29ff73d7f147 extends Twig_Template
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
        $__internal_a09739c0829912e725a5bda6089468c356adc5c79d431b67c38f9b2206a6f851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09739c0829912e725a5bda6089468c356adc5c79d431b67c38f9b2206a6f851->enter($__internal_a09739c0829912e725a5bda6089468c356adc5c79d431b67c38f9b2206a6f851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_74c81fb849a83ef2679348be916156ed7fb4d36ebd294bbf999c034a63b61edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c81fb849a83ef2679348be916156ed7fb4d36ebd294bbf999c034a63b61edc->enter($__internal_74c81fb849a83ef2679348be916156ed7fb4d36ebd294bbf999c034a63b61edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a09739c0829912e725a5bda6089468c356adc5c79d431b67c38f9b2206a6f851->leave($__internal_a09739c0829912e725a5bda6089468c356adc5c79d431b67c38f9b2206a6f851_prof);

        
        $__internal_74c81fb849a83ef2679348be916156ed7fb4d36ebd294bbf999c034a63b61edc->leave($__internal_74c81fb849a83ef2679348be916156ed7fb4d36ebd294bbf999c034a63b61edc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
