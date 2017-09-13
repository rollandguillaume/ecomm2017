<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5575cdd5d06694f81fa439b8967ded2ef5bba1db65288cf36c22a9486f9f8687 extends Twig_Template
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
        $__internal_e7f4d6ea4986179b287617ce01fbceba9dc36b18f786c414fea7baafd6896509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f4d6ea4986179b287617ce01fbceba9dc36b18f786c414fea7baafd6896509->enter($__internal_e7f4d6ea4986179b287617ce01fbceba9dc36b18f786c414fea7baafd6896509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d3bd8dc56ea8e240e0c3709c80e819fc9c0610cfb78eb1c2889d7180d3cbfa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bd8dc56ea8e240e0c3709c80e819fc9c0610cfb78eb1c2889d7180d3cbfa2d->enter($__internal_d3bd8dc56ea8e240e0c3709c80e819fc9c0610cfb78eb1c2889d7180d3cbfa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e7f4d6ea4986179b287617ce01fbceba9dc36b18f786c414fea7baafd6896509->leave($__internal_e7f4d6ea4986179b287617ce01fbceba9dc36b18f786c414fea7baafd6896509_prof);

        
        $__internal_d3bd8dc56ea8e240e0c3709c80e819fc9c0610cfb78eb1c2889d7180d3cbfa2d->leave($__internal_d3bd8dc56ea8e240e0c3709c80e819fc9c0610cfb78eb1c2889d7180d3cbfa2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
