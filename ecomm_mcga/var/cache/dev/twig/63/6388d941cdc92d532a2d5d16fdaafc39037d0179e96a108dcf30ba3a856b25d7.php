<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7fe5a6ad8fa01ad323cf8c066ac7a9163f67a887863a1a6d2c64edc1ecd9e7c2 extends Twig_Template
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
        $__internal_15272c27c21a46346d870342ce1b063dd9b1da9efc78e3db64b9743d6ded80bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15272c27c21a46346d870342ce1b063dd9b1da9efc78e3db64b9743d6ded80bb->enter($__internal_15272c27c21a46346d870342ce1b063dd9b1da9efc78e3db64b9743d6ded80bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8f60a8d87c756f7f0f9e0930e4a434daa997713df5e2f543eebcb63a6560fee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f60a8d87c756f7f0f9e0930e4a434daa997713df5e2f543eebcb63a6560fee1->enter($__internal_8f60a8d87c756f7f0f9e0930e4a434daa997713df5e2f543eebcb63a6560fee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_15272c27c21a46346d870342ce1b063dd9b1da9efc78e3db64b9743d6ded80bb->leave($__internal_15272c27c21a46346d870342ce1b063dd9b1da9efc78e3db64b9743d6ded80bb_prof);

        
        $__internal_8f60a8d87c756f7f0f9e0930e4a434daa997713df5e2f543eebcb63a6560fee1->leave($__internal_8f60a8d87c756f7f0f9e0930e4a434daa997713df5e2f543eebcb63a6560fee1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
