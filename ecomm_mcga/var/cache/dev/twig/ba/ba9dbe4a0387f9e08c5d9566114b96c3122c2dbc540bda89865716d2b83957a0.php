<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a7d9be90ac4c8f7d509cb23a6fa258a9771ef4b4acf04a11697610e642bf75d extends Twig_Template
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
        $__internal_d5d85f76954014823527cf938e3e472658b461deda1306bbacba788279134bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d85f76954014823527cf938e3e472658b461deda1306bbacba788279134bb5->enter($__internal_d5d85f76954014823527cf938e3e472658b461deda1306bbacba788279134bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c39e6aefba9bb34951174c4227f36674b25c68dd53c7f80c25357a4fdc32b685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39e6aefba9bb34951174c4227f36674b25c68dd53c7f80c25357a4fdc32b685->enter($__internal_c39e6aefba9bb34951174c4227f36674b25c68dd53c7f80c25357a4fdc32b685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d5d85f76954014823527cf938e3e472658b461deda1306bbacba788279134bb5->leave($__internal_d5d85f76954014823527cf938e3e472658b461deda1306bbacba788279134bb5_prof);

        
        $__internal_c39e6aefba9bb34951174c4227f36674b25c68dd53c7f80c25357a4fdc32b685->leave($__internal_c39e6aefba9bb34951174c4227f36674b25c68dd53c7f80c25357a4fdc32b685_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
