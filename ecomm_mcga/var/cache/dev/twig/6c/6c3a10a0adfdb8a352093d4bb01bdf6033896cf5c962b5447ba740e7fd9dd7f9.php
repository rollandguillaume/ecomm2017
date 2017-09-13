<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_681119f560756d0910b80b0ed4c59c2aac9518ee3f404aa92ab2a8759637c574 extends Twig_Template
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
        $__internal_4e09fa212edd1045f7a47d35d10dc07d02a0eae15da77a426c5d1355c666c6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e09fa212edd1045f7a47d35d10dc07d02a0eae15da77a426c5d1355c666c6dc->enter($__internal_4e09fa212edd1045f7a47d35d10dc07d02a0eae15da77a426c5d1355c666c6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_943ae93de5fc78cdbb4d96443c96d06bd3f57273b81d135d05fa85233a5f29c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943ae93de5fc78cdbb4d96443c96d06bd3f57273b81d135d05fa85233a5f29c9->enter($__internal_943ae93de5fc78cdbb4d96443c96d06bd3f57273b81d135d05fa85233a5f29c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4e09fa212edd1045f7a47d35d10dc07d02a0eae15da77a426c5d1355c666c6dc->leave($__internal_4e09fa212edd1045f7a47d35d10dc07d02a0eae15da77a426c5d1355c666c6dc_prof);

        
        $__internal_943ae93de5fc78cdbb4d96443c96d06bd3f57273b81d135d05fa85233a5f29c9->leave($__internal_943ae93de5fc78cdbb4d96443c96d06bd3f57273b81d135d05fa85233a5f29c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
