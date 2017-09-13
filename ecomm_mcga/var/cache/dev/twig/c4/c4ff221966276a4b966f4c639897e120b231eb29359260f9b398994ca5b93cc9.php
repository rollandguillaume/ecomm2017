<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c477a836e135cb88cbd875420797abb5a748baa5794fe60e4021da151357093d extends Twig_Template
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
        $__internal_44fe859f844637a8efdceb09b94d0e754c3632b8fa4cf4da02f2ce060c9d584b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fe859f844637a8efdceb09b94d0e754c3632b8fa4cf4da02f2ce060c9d584b->enter($__internal_44fe859f844637a8efdceb09b94d0e754c3632b8fa4cf4da02f2ce060c9d584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1aae32ccdf8f2280be8874629917c803ad7e1f6c2ba3d794d5788e936beb2be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aae32ccdf8f2280be8874629917c803ad7e1f6c2ba3d794d5788e936beb2be2->enter($__internal_1aae32ccdf8f2280be8874629917c803ad7e1f6c2ba3d794d5788e936beb2be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_44fe859f844637a8efdceb09b94d0e754c3632b8fa4cf4da02f2ce060c9d584b->leave($__internal_44fe859f844637a8efdceb09b94d0e754c3632b8fa4cf4da02f2ce060c9d584b_prof);

        
        $__internal_1aae32ccdf8f2280be8874629917c803ad7e1f6c2ba3d794d5788e936beb2be2->leave($__internal_1aae32ccdf8f2280be8874629917c803ad7e1f6c2ba3d794d5788e936beb2be2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
