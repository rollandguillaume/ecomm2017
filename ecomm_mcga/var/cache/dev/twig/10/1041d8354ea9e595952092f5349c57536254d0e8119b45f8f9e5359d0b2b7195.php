<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f220b1d96f4976a86ba86ab5207af3bce7503c13f58062f994a602dcf4d07bff extends Twig_Template
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
        $__internal_8b0029a95beac30733cf5b9a1c2be03fa4e2cafe14aeadb27af52bca477645bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0029a95beac30733cf5b9a1c2be03fa4e2cafe14aeadb27af52bca477645bc->enter($__internal_8b0029a95beac30733cf5b9a1c2be03fa4e2cafe14aeadb27af52bca477645bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_62aa82b6af1c801b41dc174cae28db7f4f54d79bba5e7b5fc59fe2cab85be22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62aa82b6af1c801b41dc174cae28db7f4f54d79bba5e7b5fc59fe2cab85be22d->enter($__internal_62aa82b6af1c801b41dc174cae28db7f4f54d79bba5e7b5fc59fe2cab85be22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8b0029a95beac30733cf5b9a1c2be03fa4e2cafe14aeadb27af52bca477645bc->leave($__internal_8b0029a95beac30733cf5b9a1c2be03fa4e2cafe14aeadb27af52bca477645bc_prof);

        
        $__internal_62aa82b6af1c801b41dc174cae28db7f4f54d79bba5e7b5fc59fe2cab85be22d->leave($__internal_62aa82b6af1c801b41dc174cae28db7f4f54d79bba5e7b5fc59fe2cab85be22d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
