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
        $__internal_12f5d6279fc8cc104219bdc8313e4fb9a5ebe3296714aad654b4bcf7cc45a22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f5d6279fc8cc104219bdc8313e4fb9a5ebe3296714aad654b4bcf7cc45a22d->enter($__internal_12f5d6279fc8cc104219bdc8313e4fb9a5ebe3296714aad654b4bcf7cc45a22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9a93a9015f44b115bfeff0ef23814f0821a34aa20506d45ef87ad08902658213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a93a9015f44b115bfeff0ef23814f0821a34aa20506d45ef87ad08902658213->enter($__internal_9a93a9015f44b115bfeff0ef23814f0821a34aa20506d45ef87ad08902658213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_12f5d6279fc8cc104219bdc8313e4fb9a5ebe3296714aad654b4bcf7cc45a22d->leave($__internal_12f5d6279fc8cc104219bdc8313e4fb9a5ebe3296714aad654b4bcf7cc45a22d_prof);

        
        $__internal_9a93a9015f44b115bfeff0ef23814f0821a34aa20506d45ef87ad08902658213->leave($__internal_9a93a9015f44b115bfeff0ef23814f0821a34aa20506d45ef87ad08902658213_prof);

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
