<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d53ac12b3a0d48c7ccbcc34bd04455db5fdd25cc6511349fc8f530a4dd35d94c extends Twig_Template
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
        $__internal_a622d5112004a70225b58252bd91aa750f816c8aef23e2994daa36133ac94ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a622d5112004a70225b58252bd91aa750f816c8aef23e2994daa36133ac94ecb->enter($__internal_a622d5112004a70225b58252bd91aa750f816c8aef23e2994daa36133ac94ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_558882606127071d5b91de01398b467a5e1ce560c63e306a5b65f58224518060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558882606127071d5b91de01398b467a5e1ce560c63e306a5b65f58224518060->enter($__internal_558882606127071d5b91de01398b467a5e1ce560c63e306a5b65f58224518060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a622d5112004a70225b58252bd91aa750f816c8aef23e2994daa36133ac94ecb->leave($__internal_a622d5112004a70225b58252bd91aa750f816c8aef23e2994daa36133ac94ecb_prof);

        
        $__internal_558882606127071d5b91de01398b467a5e1ce560c63e306a5b65f58224518060->leave($__internal_558882606127071d5b91de01398b467a5e1ce560c63e306a5b65f58224518060_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
