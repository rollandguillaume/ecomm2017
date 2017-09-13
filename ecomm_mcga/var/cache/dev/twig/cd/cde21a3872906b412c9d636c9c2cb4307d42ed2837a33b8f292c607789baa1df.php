<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d3a2d0253641e6e6c6a77d79e7b24693b81be975c66e39cb336bae7b3c809e14 extends Twig_Template
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
        $__internal_4f623426f2461e8f639e6f507bb10e1d827ad323c3eca7cfc17d946a20a247ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f623426f2461e8f639e6f507bb10e1d827ad323c3eca7cfc17d946a20a247ec->enter($__internal_4f623426f2461e8f639e6f507bb10e1d827ad323c3eca7cfc17d946a20a247ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c78d3287fb26f52bfa2d312715431b01efecd22c44b1ab75a5dc8a65d442b885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78d3287fb26f52bfa2d312715431b01efecd22c44b1ab75a5dc8a65d442b885->enter($__internal_c78d3287fb26f52bfa2d312715431b01efecd22c44b1ab75a5dc8a65d442b885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4f623426f2461e8f639e6f507bb10e1d827ad323c3eca7cfc17d946a20a247ec->leave($__internal_4f623426f2461e8f639e6f507bb10e1d827ad323c3eca7cfc17d946a20a247ec_prof);

        
        $__internal_c78d3287fb26f52bfa2d312715431b01efecd22c44b1ab75a5dc8a65d442b885->leave($__internal_c78d3287fb26f52bfa2d312715431b01efecd22c44b1ab75a5dc8a65d442b885_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
