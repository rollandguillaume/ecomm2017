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
        $__internal_d068b9baa8086a333f8bde1a3dd0fac55024a834e932046d5794de05dae0d1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d068b9baa8086a333f8bde1a3dd0fac55024a834e932046d5794de05dae0d1e3->enter($__internal_d068b9baa8086a333f8bde1a3dd0fac55024a834e932046d5794de05dae0d1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9991a8d63d52217edc8761d5e7b9279e4fc98e733d94c3aaeb7dc1bf891640c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9991a8d63d52217edc8761d5e7b9279e4fc98e733d94c3aaeb7dc1bf891640c3->enter($__internal_9991a8d63d52217edc8761d5e7b9279e4fc98e733d94c3aaeb7dc1bf891640c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d068b9baa8086a333f8bde1a3dd0fac55024a834e932046d5794de05dae0d1e3->leave($__internal_d068b9baa8086a333f8bde1a3dd0fac55024a834e932046d5794de05dae0d1e3_prof);

        
        $__internal_9991a8d63d52217edc8761d5e7b9279e4fc98e733d94c3aaeb7dc1bf891640c3->leave($__internal_9991a8d63d52217edc8761d5e7b9279e4fc98e733d94c3aaeb7dc1bf891640c3_prof);

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
