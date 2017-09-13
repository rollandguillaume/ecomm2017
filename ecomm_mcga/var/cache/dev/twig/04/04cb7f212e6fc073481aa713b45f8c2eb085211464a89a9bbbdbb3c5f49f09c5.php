<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_58263f4e03d50c5cf9878f99efd29918963ed525153142cba9be12fb135021f6 extends Twig_Template
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
        $__internal_ba9ceafaedfb5d29d364484c5a6d7a403e6f61287f8690d6d3d99b60f5ac4c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9ceafaedfb5d29d364484c5a6d7a403e6f61287f8690d6d3d99b60f5ac4c04->enter($__internal_ba9ceafaedfb5d29d364484c5a6d7a403e6f61287f8690d6d3d99b60f5ac4c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_267ea86c7fd2a3e2aca074a191df85932abfdd17af0903024a2ee7fef0cfbfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267ea86c7fd2a3e2aca074a191df85932abfdd17af0903024a2ee7fef0cfbfe2->enter($__internal_267ea86c7fd2a3e2aca074a191df85932abfdd17af0903024a2ee7fef0cfbfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ba9ceafaedfb5d29d364484c5a6d7a403e6f61287f8690d6d3d99b60f5ac4c04->leave($__internal_ba9ceafaedfb5d29d364484c5a6d7a403e6f61287f8690d6d3d99b60f5ac4c04_prof);

        
        $__internal_267ea86c7fd2a3e2aca074a191df85932abfdd17af0903024a2ee7fef0cfbfe2->leave($__internal_267ea86c7fd2a3e2aca074a191df85932abfdd17af0903024a2ee7fef0cfbfe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
