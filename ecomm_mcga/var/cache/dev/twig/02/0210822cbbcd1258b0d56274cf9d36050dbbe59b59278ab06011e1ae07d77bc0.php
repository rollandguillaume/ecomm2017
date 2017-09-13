<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_84e585cbef8028d7eea6b9840978363163df63b989c44136df256fb7cadea5bc extends Twig_Template
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
        $__internal_42050ca66fa31fbb41b001f7d0df061419aa62d90c1d1eaeffb45865af26db89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42050ca66fa31fbb41b001f7d0df061419aa62d90c1d1eaeffb45865af26db89->enter($__internal_42050ca66fa31fbb41b001f7d0df061419aa62d90c1d1eaeffb45865af26db89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1f182bf194d8f2a4b10c1fda161ff751b000e0839bab2cc456b24ee6958e8056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f182bf194d8f2a4b10c1fda161ff751b000e0839bab2cc456b24ee6958e8056->enter($__internal_1f182bf194d8f2a4b10c1fda161ff751b000e0839bab2cc456b24ee6958e8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_42050ca66fa31fbb41b001f7d0df061419aa62d90c1d1eaeffb45865af26db89->leave($__internal_42050ca66fa31fbb41b001f7d0df061419aa62d90c1d1eaeffb45865af26db89_prof);

        
        $__internal_1f182bf194d8f2a4b10c1fda161ff751b000e0839bab2cc456b24ee6958e8056->leave($__internal_1f182bf194d8f2a4b10c1fda161ff751b000e0839bab2cc456b24ee6958e8056_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
