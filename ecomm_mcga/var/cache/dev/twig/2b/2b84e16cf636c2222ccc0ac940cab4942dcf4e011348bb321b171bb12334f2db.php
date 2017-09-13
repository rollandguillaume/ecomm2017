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
        $__internal_76074d81fb16c6d9c62c347719c26b47c110b77e86eacd7d751626d34118e428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76074d81fb16c6d9c62c347719c26b47c110b77e86eacd7d751626d34118e428->enter($__internal_76074d81fb16c6d9c62c347719c26b47c110b77e86eacd7d751626d34118e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_52d5d11b83cb09249bcbed28d0f3b82410c31b9d6cb1a28c47fd3fd849d27458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d5d11b83cb09249bcbed28d0f3b82410c31b9d6cb1a28c47fd3fd849d27458->enter($__internal_52d5d11b83cb09249bcbed28d0f3b82410c31b9d6cb1a28c47fd3fd849d27458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_76074d81fb16c6d9c62c347719c26b47c110b77e86eacd7d751626d34118e428->leave($__internal_76074d81fb16c6d9c62c347719c26b47c110b77e86eacd7d751626d34118e428_prof);

        
        $__internal_52d5d11b83cb09249bcbed28d0f3b82410c31b9d6cb1a28c47fd3fd849d27458->leave($__internal_52d5d11b83cb09249bcbed28d0f3b82410c31b9d6cb1a28c47fd3fd849d27458_prof);

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
