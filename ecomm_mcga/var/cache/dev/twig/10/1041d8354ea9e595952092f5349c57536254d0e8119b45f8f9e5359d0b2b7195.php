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
        $__internal_6e0d81f195c79c200b11d31b6a66872b1261a8dc5758a725a993864e0549cfdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0d81f195c79c200b11d31b6a66872b1261a8dc5758a725a993864e0549cfdb->enter($__internal_6e0d81f195c79c200b11d31b6a66872b1261a8dc5758a725a993864e0549cfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7eb5b9669037d01bbea989dd8d8835a3b089ee6ebf9f8b95aebaf12096b7eb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb5b9669037d01bbea989dd8d8835a3b089ee6ebf9f8b95aebaf12096b7eb03->enter($__internal_7eb5b9669037d01bbea989dd8d8835a3b089ee6ebf9f8b95aebaf12096b7eb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6e0d81f195c79c200b11d31b6a66872b1261a8dc5758a725a993864e0549cfdb->leave($__internal_6e0d81f195c79c200b11d31b6a66872b1261a8dc5758a725a993864e0549cfdb_prof);

        
        $__internal_7eb5b9669037d01bbea989dd8d8835a3b089ee6ebf9f8b95aebaf12096b7eb03->leave($__internal_7eb5b9669037d01bbea989dd8d8835a3b089ee6ebf9f8b95aebaf12096b7eb03_prof);

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
