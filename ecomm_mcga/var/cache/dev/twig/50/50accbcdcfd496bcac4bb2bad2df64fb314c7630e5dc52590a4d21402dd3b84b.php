<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cfe50e9bfbfb7246f8638d0a12a8c8112736197e19a61e2a772fecdee67a1d64 extends Twig_Template
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
        $__internal_2e0b58d8d5dc6ae514acc6b091931e4a389664e247c2efa367542d2e41bf355e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0b58d8d5dc6ae514acc6b091931e4a389664e247c2efa367542d2e41bf355e->enter($__internal_2e0b58d8d5dc6ae514acc6b091931e4a389664e247c2efa367542d2e41bf355e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_7d93bb1aeab44f169db0480ac62e803f678e9d4ad9c35b72dec47a6a4e732090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d93bb1aeab44f169db0480ac62e803f678e9d4ad9c35b72dec47a6a4e732090->enter($__internal_7d93bb1aeab44f169db0480ac62e803f678e9d4ad9c35b72dec47a6a4e732090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2e0b58d8d5dc6ae514acc6b091931e4a389664e247c2efa367542d2e41bf355e->leave($__internal_2e0b58d8d5dc6ae514acc6b091931e4a389664e247c2efa367542d2e41bf355e_prof);

        
        $__internal_7d93bb1aeab44f169db0480ac62e803f678e9d4ad9c35b72dec47a6a4e732090->leave($__internal_7d93bb1aeab44f169db0480ac62e803f678e9d4ad9c35b72dec47a6a4e732090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
