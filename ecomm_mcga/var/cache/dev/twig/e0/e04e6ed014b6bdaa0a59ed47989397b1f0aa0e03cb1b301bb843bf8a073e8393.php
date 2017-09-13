<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_70b0f8010ad22ce4ab976f5661a1aeb9d22f01fb58d3c3a1ed4e6596af693a10 extends Twig_Template
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
        $__internal_b264e8008cfd044a611126d197ea910cf3bedf948c78859523958d8be8a0229e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b264e8008cfd044a611126d197ea910cf3bedf948c78859523958d8be8a0229e->enter($__internal_b264e8008cfd044a611126d197ea910cf3bedf948c78859523958d8be8a0229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6320feeb021febe9a5ab062bcc0495e4799e01a09a38d4f478fda629bc6ac376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6320feeb021febe9a5ab062bcc0495e4799e01a09a38d4f478fda629bc6ac376->enter($__internal_6320feeb021febe9a5ab062bcc0495e4799e01a09a38d4f478fda629bc6ac376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b264e8008cfd044a611126d197ea910cf3bedf948c78859523958d8be8a0229e->leave($__internal_b264e8008cfd044a611126d197ea910cf3bedf948c78859523958d8be8a0229e_prof);

        
        $__internal_6320feeb021febe9a5ab062bcc0495e4799e01a09a38d4f478fda629bc6ac376->leave($__internal_6320feeb021febe9a5ab062bcc0495e4799e01a09a38d4f478fda629bc6ac376_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
