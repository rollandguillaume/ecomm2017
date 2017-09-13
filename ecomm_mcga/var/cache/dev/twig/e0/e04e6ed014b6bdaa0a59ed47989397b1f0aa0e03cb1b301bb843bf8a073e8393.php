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
        $__internal_867dcb0122a2f01717bdea7eb0ebe5fb92196b445e50ea4006f7c4eb1318b550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867dcb0122a2f01717bdea7eb0ebe5fb92196b445e50ea4006f7c4eb1318b550->enter($__internal_867dcb0122a2f01717bdea7eb0ebe5fb92196b445e50ea4006f7c4eb1318b550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6fab6209fb80584701fe0ac72ecf4f4725cbbeaa09b3e64bed26b31a08073452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fab6209fb80584701fe0ac72ecf4f4725cbbeaa09b3e64bed26b31a08073452->enter($__internal_6fab6209fb80584701fe0ac72ecf4f4725cbbeaa09b3e64bed26b31a08073452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_867dcb0122a2f01717bdea7eb0ebe5fb92196b445e50ea4006f7c4eb1318b550->leave($__internal_867dcb0122a2f01717bdea7eb0ebe5fb92196b445e50ea4006f7c4eb1318b550_prof);

        
        $__internal_6fab6209fb80584701fe0ac72ecf4f4725cbbeaa09b3e64bed26b31a08073452->leave($__internal_6fab6209fb80584701fe0ac72ecf4f4725cbbeaa09b3e64bed26b31a08073452_prof);

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
