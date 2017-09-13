<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a2c4b10a48cc4dfde66f2fb516f9527ea093d840376ae78f19adac503c82b6ba extends Twig_Template
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
        $__internal_c06e3b37b792ca5d72879a4e51808a76213cbb979b54d590c99d40af841fbe7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06e3b37b792ca5d72879a4e51808a76213cbb979b54d590c99d40af841fbe7d->enter($__internal_c06e3b37b792ca5d72879a4e51808a76213cbb979b54d590c99d40af841fbe7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c4f897f539810b31b7545244036fed2dd8d1033585cb96512338c6f9570a7cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f897f539810b31b7545244036fed2dd8d1033585cb96512338c6f9570a7cda->enter($__internal_c4f897f539810b31b7545244036fed2dd8d1033585cb96512338c6f9570a7cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c06e3b37b792ca5d72879a4e51808a76213cbb979b54d590c99d40af841fbe7d->leave($__internal_c06e3b37b792ca5d72879a4e51808a76213cbb979b54d590c99d40af841fbe7d_prof);

        
        $__internal_c4f897f539810b31b7545244036fed2dd8d1033585cb96512338c6f9570a7cda->leave($__internal_c4f897f539810b31b7545244036fed2dd8d1033585cb96512338c6f9570a7cda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
