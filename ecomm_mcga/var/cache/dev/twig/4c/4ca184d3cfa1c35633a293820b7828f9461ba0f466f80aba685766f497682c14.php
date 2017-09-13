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
        $__internal_b60f0974369740934f65741aa663bad52af068f96652486e66f4137920ce5108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60f0974369740934f65741aa663bad52af068f96652486e66f4137920ce5108->enter($__internal_b60f0974369740934f65741aa663bad52af068f96652486e66f4137920ce5108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_9ac4a879eb5c5d59d192a67735fbe6be7777499c7604eb9b5a571194265155b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac4a879eb5c5d59d192a67735fbe6be7777499c7604eb9b5a571194265155b7->enter($__internal_9ac4a879eb5c5d59d192a67735fbe6be7777499c7604eb9b5a571194265155b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b60f0974369740934f65741aa663bad52af068f96652486e66f4137920ce5108->leave($__internal_b60f0974369740934f65741aa663bad52af068f96652486e66f4137920ce5108_prof);

        
        $__internal_9ac4a879eb5c5d59d192a67735fbe6be7777499c7604eb9b5a571194265155b7->leave($__internal_9ac4a879eb5c5d59d192a67735fbe6be7777499c7604eb9b5a571194265155b7_prof);

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
