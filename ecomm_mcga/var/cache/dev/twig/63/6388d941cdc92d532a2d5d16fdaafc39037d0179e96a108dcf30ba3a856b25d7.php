<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7fe5a6ad8fa01ad323cf8c066ac7a9163f67a887863a1a6d2c64edc1ecd9e7c2 extends Twig_Template
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
        $__internal_c82918f59d8493ca14e90e5ccec4561d8b8918f07abfaa20c217d9c287ebee63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82918f59d8493ca14e90e5ccec4561d8b8918f07abfaa20c217d9c287ebee63->enter($__internal_c82918f59d8493ca14e90e5ccec4561d8b8918f07abfaa20c217d9c287ebee63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_178d45597fd8559f00d5b3de943163a51b67734570fbeece1e1d7bc25d818fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178d45597fd8559f00d5b3de943163a51b67734570fbeece1e1d7bc25d818fb0->enter($__internal_178d45597fd8559f00d5b3de943163a51b67734570fbeece1e1d7bc25d818fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c82918f59d8493ca14e90e5ccec4561d8b8918f07abfaa20c217d9c287ebee63->leave($__internal_c82918f59d8493ca14e90e5ccec4561d8b8918f07abfaa20c217d9c287ebee63_prof);

        
        $__internal_178d45597fd8559f00d5b3de943163a51b67734570fbeece1e1d7bc25d818fb0->leave($__internal_178d45597fd8559f00d5b3de943163a51b67734570fbeece1e1d7bc25d818fb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
