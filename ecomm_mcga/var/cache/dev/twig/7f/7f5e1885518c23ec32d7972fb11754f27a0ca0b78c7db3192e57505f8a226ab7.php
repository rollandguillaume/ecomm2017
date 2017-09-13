<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3340ab11ba7500f2d3ab826367a6f4819c97f5bd9c7273a6673e09bcbe29988e extends Twig_Template
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
        $__internal_e7b7521cba5bfbbc9d40982e892c0a03662c0d7ce76de9414a7457970c059604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b7521cba5bfbbc9d40982e892c0a03662c0d7ce76de9414a7457970c059604->enter($__internal_e7b7521cba5bfbbc9d40982e892c0a03662c0d7ce76de9414a7457970c059604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7263c8b6148a167eb41b86656c3b900373e4e049f8a8df39a9152edfcf8e7d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7263c8b6148a167eb41b86656c3b900373e4e049f8a8df39a9152edfcf8e7d6d->enter($__internal_7263c8b6148a167eb41b86656c3b900373e4e049f8a8df39a9152edfcf8e7d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e7b7521cba5bfbbc9d40982e892c0a03662c0d7ce76de9414a7457970c059604->leave($__internal_e7b7521cba5bfbbc9d40982e892c0a03662c0d7ce76de9414a7457970c059604_prof);

        
        $__internal_7263c8b6148a167eb41b86656c3b900373e4e049f8a8df39a9152edfcf8e7d6d->leave($__internal_7263c8b6148a167eb41b86656c3b900373e4e049f8a8df39a9152edfcf8e7d6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
