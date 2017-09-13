<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ba35e73652e32c7bf0f6e4cc515d8e1f08248792af9fb890c686763cec2f3b25 extends Twig_Template
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
        $__internal_704d7a4f34cbf9c8a86cd9923c6059378ef9255070f98456760354a596d3ac6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704d7a4f34cbf9c8a86cd9923c6059378ef9255070f98456760354a596d3ac6d->enter($__internal_704d7a4f34cbf9c8a86cd9923c6059378ef9255070f98456760354a596d3ac6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c41445cde62c73646b79bf781b758d11be85bf41f17c337cffdc1f8ee0ffa78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41445cde62c73646b79bf781b758d11be85bf41f17c337cffdc1f8ee0ffa78d->enter($__internal_c41445cde62c73646b79bf781b758d11be85bf41f17c337cffdc1f8ee0ffa78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_704d7a4f34cbf9c8a86cd9923c6059378ef9255070f98456760354a596d3ac6d->leave($__internal_704d7a4f34cbf9c8a86cd9923c6059378ef9255070f98456760354a596d3ac6d_prof);

        
        $__internal_c41445cde62c73646b79bf781b758d11be85bf41f17c337cffdc1f8ee0ffa78d->leave($__internal_c41445cde62c73646b79bf781b758d11be85bf41f17c337cffdc1f8ee0ffa78d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
