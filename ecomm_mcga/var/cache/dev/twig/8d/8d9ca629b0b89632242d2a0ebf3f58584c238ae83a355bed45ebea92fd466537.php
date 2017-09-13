<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_54f4973d01f36e3e963d368d93381514bd75e2db335afd9db7518c716209a59a extends Twig_Template
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
        $__internal_d753839f85dc09abea1808dc4ed7f446ee7bdd40c230e5374a7221ad58ce9c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d753839f85dc09abea1808dc4ed7f446ee7bdd40c230e5374a7221ad58ce9c1d->enter($__internal_d753839f85dc09abea1808dc4ed7f446ee7bdd40c230e5374a7221ad58ce9c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5a8e55abe2ca1c13151b37c8d21c4d22079971ca486f5dd8038c77fd03b32c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8e55abe2ca1c13151b37c8d21c4d22079971ca486f5dd8038c77fd03b32c80->enter($__internal_5a8e55abe2ca1c13151b37c8d21c4d22079971ca486f5dd8038c77fd03b32c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d753839f85dc09abea1808dc4ed7f446ee7bdd40c230e5374a7221ad58ce9c1d->leave($__internal_d753839f85dc09abea1808dc4ed7f446ee7bdd40c230e5374a7221ad58ce9c1d_prof);

        
        $__internal_5a8e55abe2ca1c13151b37c8d21c4d22079971ca486f5dd8038c77fd03b32c80->leave($__internal_5a8e55abe2ca1c13151b37c8d21c4d22079971ca486f5dd8038c77fd03b32c80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
