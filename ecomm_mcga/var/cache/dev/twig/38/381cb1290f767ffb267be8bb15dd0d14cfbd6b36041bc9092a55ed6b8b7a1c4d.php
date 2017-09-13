<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2537eb5e88e769e9e9b6c2b18556a444fb49289c380ba9d4eb562b5412566244 extends Twig_Template
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
        $__internal_725ccfe76522ee415b468059499bb4abead6603228f21391d0a702ae93562261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725ccfe76522ee415b468059499bb4abead6603228f21391d0a702ae93562261->enter($__internal_725ccfe76522ee415b468059499bb4abead6603228f21391d0a702ae93562261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_07216c3f994c29edfdf85af29399cc2832f96750f4bef44f7aa439532685b085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07216c3f994c29edfdf85af29399cc2832f96750f4bef44f7aa439532685b085->enter($__internal_07216c3f994c29edfdf85af29399cc2832f96750f4bef44f7aa439532685b085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_725ccfe76522ee415b468059499bb4abead6603228f21391d0a702ae93562261->leave($__internal_725ccfe76522ee415b468059499bb4abead6603228f21391d0a702ae93562261_prof);

        
        $__internal_07216c3f994c29edfdf85af29399cc2832f96750f4bef44f7aa439532685b085->leave($__internal_07216c3f994c29edfdf85af29399cc2832f96750f4bef44f7aa439532685b085_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
