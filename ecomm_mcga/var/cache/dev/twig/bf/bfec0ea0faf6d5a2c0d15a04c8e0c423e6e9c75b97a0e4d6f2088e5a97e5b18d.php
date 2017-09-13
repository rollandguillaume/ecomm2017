<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dab7b52c5f9cb5ad1767435ae39270c3fa413844b8dd3adecc2f4118f98f0480 extends Twig_Template
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
        $__internal_f60f455b00d779cf70ceadd538ad684b77e4f94748fa28986a0cef05aa9e26fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60f455b00d779cf70ceadd538ad684b77e4f94748fa28986a0cef05aa9e26fc->enter($__internal_f60f455b00d779cf70ceadd538ad684b77e4f94748fa28986a0cef05aa9e26fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_61cb930b2a01e2b43a63bfe39d6508f7d594ea43b21bde80158c619e46ca058d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cb930b2a01e2b43a63bfe39d6508f7d594ea43b21bde80158c619e46ca058d->enter($__internal_61cb930b2a01e2b43a63bfe39d6508f7d594ea43b21bde80158c619e46ca058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f60f455b00d779cf70ceadd538ad684b77e4f94748fa28986a0cef05aa9e26fc->leave($__internal_f60f455b00d779cf70ceadd538ad684b77e4f94748fa28986a0cef05aa9e26fc_prof);

        
        $__internal_61cb930b2a01e2b43a63bfe39d6508f7d594ea43b21bde80158c619e46ca058d->leave($__internal_61cb930b2a01e2b43a63bfe39d6508f7d594ea43b21bde80158c619e46ca058d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
