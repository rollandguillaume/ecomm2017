<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_264345f78078058f0203e3d1f1b3f454279ab4d309aabe1367a9eaccedd7faa7 extends Twig_Template
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
        $__internal_28c589d726688f265da7913b8e028b94828f130308bed7482f935dcbf7db4038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c589d726688f265da7913b8e028b94828f130308bed7482f935dcbf7db4038->enter($__internal_28c589d726688f265da7913b8e028b94828f130308bed7482f935dcbf7db4038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ca4ac41643980da52043b8d50cc675cee2415129b0e65c8d062e903085df280c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4ac41643980da52043b8d50cc675cee2415129b0e65c8d062e903085df280c->enter($__internal_ca4ac41643980da52043b8d50cc675cee2415129b0e65c8d062e903085df280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_28c589d726688f265da7913b8e028b94828f130308bed7482f935dcbf7db4038->leave($__internal_28c589d726688f265da7913b8e028b94828f130308bed7482f935dcbf7db4038_prof);

        
        $__internal_ca4ac41643980da52043b8d50cc675cee2415129b0e65c8d062e903085df280c->leave($__internal_ca4ac41643980da52043b8d50cc675cee2415129b0e65c8d062e903085df280c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
