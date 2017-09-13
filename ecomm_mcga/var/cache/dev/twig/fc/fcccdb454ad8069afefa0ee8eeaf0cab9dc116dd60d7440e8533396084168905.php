<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_264345f78078058f0203e3d1f1b3f454279ab4d309aabe1367a9eaccedd7faa7 extends Twig_Template
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
        $__internal_1d59c348f365b08cff3300814272806a4ef9501c075cbb43434708d5f623e401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d59c348f365b08cff3300814272806a4ef9501c075cbb43434708d5f623e401->enter($__internal_1d59c348f365b08cff3300814272806a4ef9501c075cbb43434708d5f623e401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_236a24366b68193920afc1edbebca8c9bce9574d95fa615153034dbd8ac4b3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236a24366b68193920afc1edbebca8c9bce9574d95fa615153034dbd8ac4b3fd->enter($__internal_236a24366b68193920afc1edbebca8c9bce9574d95fa615153034dbd8ac4b3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1d59c348f365b08cff3300814272806a4ef9501c075cbb43434708d5f623e401->leave($__internal_1d59c348f365b08cff3300814272806a4ef9501c075cbb43434708d5f623e401_prof);

        
        $__internal_236a24366b68193920afc1edbebca8c9bce9574d95fa615153034dbd8ac4b3fd->leave($__internal_236a24366b68193920afc1edbebca8c9bce9574d95fa615153034dbd8ac4b3fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
