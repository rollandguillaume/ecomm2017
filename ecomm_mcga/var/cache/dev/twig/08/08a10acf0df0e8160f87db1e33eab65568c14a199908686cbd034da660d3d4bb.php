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
        $__internal_426ccb6e267a0e5c62ede95299baf494583009419c78316a464fb560d785e1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426ccb6e267a0e5c62ede95299baf494583009419c78316a464fb560d785e1fc->enter($__internal_426ccb6e267a0e5c62ede95299baf494583009419c78316a464fb560d785e1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2edf69892ab5f113cf86de5794fcb311f47c77ef79ac85b43a424871705c6904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edf69892ab5f113cf86de5794fcb311f47c77ef79ac85b43a424871705c6904->enter($__internal_2edf69892ab5f113cf86de5794fcb311f47c77ef79ac85b43a424871705c6904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_426ccb6e267a0e5c62ede95299baf494583009419c78316a464fb560d785e1fc->leave($__internal_426ccb6e267a0e5c62ede95299baf494583009419c78316a464fb560d785e1fc_prof);

        
        $__internal_2edf69892ab5f113cf86de5794fcb311f47c77ef79ac85b43a424871705c6904->leave($__internal_2edf69892ab5f113cf86de5794fcb311f47c77ef79ac85b43a424871705c6904_prof);

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
