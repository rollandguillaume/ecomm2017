<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c6ef73861f95ac5fc02c9f77bdf2e99ece9af1cd98da7fe0a7ee4dda4d34c113 extends Twig_Template
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
        $__internal_bd044d14a8285b9a661ec7ba693252b6370d32af7cbf75bd1bd911b66b1e014e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd044d14a8285b9a661ec7ba693252b6370d32af7cbf75bd1bd911b66b1e014e->enter($__internal_bd044d14a8285b9a661ec7ba693252b6370d32af7cbf75bd1bd911b66b1e014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e5f6b78375b134ecce41989c8a28d7f77b23b9c9073cd67f110dd655ae4ca672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f6b78375b134ecce41989c8a28d7f77b23b9c9073cd67f110dd655ae4ca672->enter($__internal_e5f6b78375b134ecce41989c8a28d7f77b23b9c9073cd67f110dd655ae4ca672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_bd044d14a8285b9a661ec7ba693252b6370d32af7cbf75bd1bd911b66b1e014e->leave($__internal_bd044d14a8285b9a661ec7ba693252b6370d32af7cbf75bd1bd911b66b1e014e_prof);

        
        $__internal_e5f6b78375b134ecce41989c8a28d7f77b23b9c9073cd67f110dd655ae4ca672->leave($__internal_e5f6b78375b134ecce41989c8a28d7f77b23b9c9073cd67f110dd655ae4ca672_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
