<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4c5e398cf32ecdcd0d964c7b0985dafb1ca5328db16ef1aeea780a91cafd3d49 extends Twig_Template
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
        $__internal_ada04cc7d5088578014af47e1fdc080e62416848acb77782863ca8064852f6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada04cc7d5088578014af47e1fdc080e62416848acb77782863ca8064852f6b3->enter($__internal_ada04cc7d5088578014af47e1fdc080e62416848acb77782863ca8064852f6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7decca35510a48d69ce6b5cd29f5a8b710a3233eb3d0a02a6f8c13645f78200f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7decca35510a48d69ce6b5cd29f5a8b710a3233eb3d0a02a6f8c13645f78200f->enter($__internal_7decca35510a48d69ce6b5cd29f5a8b710a3233eb3d0a02a6f8c13645f78200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ada04cc7d5088578014af47e1fdc080e62416848acb77782863ca8064852f6b3->leave($__internal_ada04cc7d5088578014af47e1fdc080e62416848acb77782863ca8064852f6b3_prof);

        
        $__internal_7decca35510a48d69ce6b5cd29f5a8b710a3233eb3d0a02a6f8c13645f78200f->leave($__internal_7decca35510a48d69ce6b5cd29f5a8b710a3233eb3d0a02a6f8c13645f78200f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
