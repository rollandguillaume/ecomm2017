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
        $__internal_b217dfc72d52bfab0e56d8eb3fbdfef02896d44077a3eb10311b76762b5ef54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b217dfc72d52bfab0e56d8eb3fbdfef02896d44077a3eb10311b76762b5ef54e->enter($__internal_b217dfc72d52bfab0e56d8eb3fbdfef02896d44077a3eb10311b76762b5ef54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f618b179b595b1a576d465359256f9f7c32054ece79c9ec6b9496cfd6f67e2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f618b179b595b1a576d465359256f9f7c32054ece79c9ec6b9496cfd6f67e2e4->enter($__internal_f618b179b595b1a576d465359256f9f7c32054ece79c9ec6b9496cfd6f67e2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b217dfc72d52bfab0e56d8eb3fbdfef02896d44077a3eb10311b76762b5ef54e->leave($__internal_b217dfc72d52bfab0e56d8eb3fbdfef02896d44077a3eb10311b76762b5ef54e_prof);

        
        $__internal_f618b179b595b1a576d465359256f9f7c32054ece79c9ec6b9496cfd6f67e2e4->leave($__internal_f618b179b595b1a576d465359256f9f7c32054ece79c9ec6b9496cfd6f67e2e4_prof);

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
