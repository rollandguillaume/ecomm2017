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
        $__internal_65ce396b52856a74d47790ad28b98c9c09c2f4274b5a33b80a750e3f1747982b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ce396b52856a74d47790ad28b98c9c09c2f4274b5a33b80a750e3f1747982b->enter($__internal_65ce396b52856a74d47790ad28b98c9c09c2f4274b5a33b80a750e3f1747982b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_760f3d1baf2e4023399c833145f85b6690c54d4840d7865693cf4ca91c576834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760f3d1baf2e4023399c833145f85b6690c54d4840d7865693cf4ca91c576834->enter($__internal_760f3d1baf2e4023399c833145f85b6690c54d4840d7865693cf4ca91c576834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_65ce396b52856a74d47790ad28b98c9c09c2f4274b5a33b80a750e3f1747982b->leave($__internal_65ce396b52856a74d47790ad28b98c9c09c2f4274b5a33b80a750e3f1747982b_prof);

        
        $__internal_760f3d1baf2e4023399c833145f85b6690c54d4840d7865693cf4ca91c576834->leave($__internal_760f3d1baf2e4023399c833145f85b6690c54d4840d7865693cf4ca91c576834_prof);

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
