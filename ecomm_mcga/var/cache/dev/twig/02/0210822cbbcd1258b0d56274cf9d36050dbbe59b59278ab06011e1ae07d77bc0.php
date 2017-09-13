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
        $__internal_166a1e3c9c93bde9eeba7b679706b5e6a5e3aa153dfacec4c0ca8f4fc199a343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166a1e3c9c93bde9eeba7b679706b5e6a5e3aa153dfacec4c0ca8f4fc199a343->enter($__internal_166a1e3c9c93bde9eeba7b679706b5e6a5e3aa153dfacec4c0ca8f4fc199a343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_79624f66fe1dc15fdaba587f88f605e3a82ebfe059c959b981af3017ffd0502a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79624f66fe1dc15fdaba587f88f605e3a82ebfe059c959b981af3017ffd0502a->enter($__internal_79624f66fe1dc15fdaba587f88f605e3a82ebfe059c959b981af3017ffd0502a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_166a1e3c9c93bde9eeba7b679706b5e6a5e3aa153dfacec4c0ca8f4fc199a343->leave($__internal_166a1e3c9c93bde9eeba7b679706b5e6a5e3aa153dfacec4c0ca8f4fc199a343_prof);

        
        $__internal_79624f66fe1dc15fdaba587f88f605e3a82ebfe059c959b981af3017ffd0502a->leave($__internal_79624f66fe1dc15fdaba587f88f605e3a82ebfe059c959b981af3017ffd0502a_prof);

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
