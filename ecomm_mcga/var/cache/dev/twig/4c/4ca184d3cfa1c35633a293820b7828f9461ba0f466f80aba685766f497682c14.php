<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bc9dfcc7b73f6cfb25b1b75f863bd30c0a3fadc8be94f03dd51dad63ab97b5b7 extends Twig_Template
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
        $__internal_2916f3b483f84a09642d7cfdb014d9d0de08d292d9d5e0ae7f5cdbbd95b6a3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2916f3b483f84a09642d7cfdb014d9d0de08d292d9d5e0ae7f5cdbbd95b6a3ef->enter($__internal_2916f3b483f84a09642d7cfdb014d9d0de08d292d9d5e0ae7f5cdbbd95b6a3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_eeeb7ee1a3b67dd2c83dd5fd407f3900d5c1b665a716b457e645dfba88793e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeeb7ee1a3b67dd2c83dd5fd407f3900d5c1b665a716b457e645dfba88793e6b->enter($__internal_eeeb7ee1a3b67dd2c83dd5fd407f3900d5c1b665a716b457e645dfba88793e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2916f3b483f84a09642d7cfdb014d9d0de08d292d9d5e0ae7f5cdbbd95b6a3ef->leave($__internal_2916f3b483f84a09642d7cfdb014d9d0de08d292d9d5e0ae7f5cdbbd95b6a3ef_prof);

        
        $__internal_eeeb7ee1a3b67dd2c83dd5fd407f3900d5c1b665a716b457e645dfba88793e6b->leave($__internal_eeeb7ee1a3b67dd2c83dd5fd407f3900d5c1b665a716b457e645dfba88793e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
