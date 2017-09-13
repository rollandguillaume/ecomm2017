<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f999432b5b4aa907a60a17a12299715ff89fc9bf8dd464c798caa48e50b69489 extends Twig_Template
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
        $__internal_029ebb5a6747bce595ce359efa274073576703a21910252715fee1aae76656ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029ebb5a6747bce595ce359efa274073576703a21910252715fee1aae76656ef->enter($__internal_029ebb5a6747bce595ce359efa274073576703a21910252715fee1aae76656ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a7df36a602eb19147f74edec057d9ff2306f0f02fc48454b1463782546c1bd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7df36a602eb19147f74edec057d9ff2306f0f02fc48454b1463782546c1bd67->enter($__internal_a7df36a602eb19147f74edec057d9ff2306f0f02fc48454b1463782546c1bd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_029ebb5a6747bce595ce359efa274073576703a21910252715fee1aae76656ef->leave($__internal_029ebb5a6747bce595ce359efa274073576703a21910252715fee1aae76656ef_prof);

        
        $__internal_a7df36a602eb19147f74edec057d9ff2306f0f02fc48454b1463782546c1bd67->leave($__internal_a7df36a602eb19147f74edec057d9ff2306f0f02fc48454b1463782546c1bd67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
