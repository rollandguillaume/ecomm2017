<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a2c4b10a48cc4dfde66f2fb516f9527ea093d840376ae78f19adac503c82b6ba extends Twig_Template
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
        $__internal_44f9a6a8762208ce0113a6aebf538a03325ee480e7b00a9d6284d111dda27548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f9a6a8762208ce0113a6aebf538a03325ee480e7b00a9d6284d111dda27548->enter($__internal_44f9a6a8762208ce0113a6aebf538a03325ee480e7b00a9d6284d111dda27548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8bb93cd93cd3cdc07f7869a937f79f7813893cace60cbdfbb956e787d4fcc364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb93cd93cd3cdc07f7869a937f79f7813893cace60cbdfbb956e787d4fcc364->enter($__internal_8bb93cd93cd3cdc07f7869a937f79f7813893cace60cbdfbb956e787d4fcc364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_44f9a6a8762208ce0113a6aebf538a03325ee480e7b00a9d6284d111dda27548->leave($__internal_44f9a6a8762208ce0113a6aebf538a03325ee480e7b00a9d6284d111dda27548_prof);

        
        $__internal_8bb93cd93cd3cdc07f7869a937f79f7813893cace60cbdfbb956e787d4fcc364->leave($__internal_8bb93cd93cd3cdc07f7869a937f79f7813893cace60cbdfbb956e787d4fcc364_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
