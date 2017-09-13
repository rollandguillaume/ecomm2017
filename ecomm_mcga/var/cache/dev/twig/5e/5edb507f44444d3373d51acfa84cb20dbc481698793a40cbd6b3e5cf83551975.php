<?php

/* CoreBundle:Core:index.html.twig */
class __TwigTemplate_a18e1f57e65d35aae5448aac044bff11ef36748f49fe173032586059d0668858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:Core:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f69385af947b44c88e8d80be6038f844ed79e7bbf525c7441c059333948a694f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69385af947b44c88e8d80be6038f844ed79e7bbf525c7441c059333948a694f->enter($__internal_f69385af947b44c88e8d80be6038f844ed79e7bbf525c7441c059333948a694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Core:index.html.twig"));

        $__internal_b4525b58ce1919740deddcf71d603cb288b17e6d4804eb1116bcc587de0a0114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4525b58ce1919740deddcf71d603cb288b17e6d4804eb1116bcc587de0a0114->enter($__internal_b4525b58ce1919740deddcf71d603cb288b17e6d4804eb1116bcc587de0a0114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f69385af947b44c88e8d80be6038f844ed79e7bbf525c7441c059333948a694f->leave($__internal_f69385af947b44c88e8d80be6038f844ed79e7bbf525c7441c059333948a694f_prof);

        
        $__internal_b4525b58ce1919740deddcf71d603cb288b17e6d4804eb1116bcc587de0a0114->leave($__internal_b4525b58ce1919740deddcf71d603cb288b17e6d4804eb1116bcc587de0a0114_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3a28ab51c99e1dc9af8b3889936ed15249c631064bc00ad3bcd78db1a9fffdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a28ab51c99e1dc9af8b3889936ed15249c631064bc00ad3bcd78db1a9fffdf->enter($__internal_f3a28ab51c99e1dc9af8b3889936ed15249c631064bc00ad3bcd78db1a9fffdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8dc11b6143af4f60cb0e426cfaad46170c56ca01d60a397f0d6306538b81423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8dc11b6143af4f60cb0e426cfaad46170c56ca01d60a397f0d6306538b81423->enter($__internal_e8dc11b6143af4f60cb0e426cfaad46170c56ca01d60a397f0d6306538b81423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e8dc11b6143af4f60cb0e426cfaad46170c56ca01d60a397f0d6306538b81423->leave($__internal_e8dc11b6143af4f60cb0e426cfaad46170c56ca01d60a397f0d6306538b81423_prof);

        
        $__internal_f3a28ab51c99e1dc9af8b3889936ed15249c631064bc00ad3bcd78db1a9fffdf->leave($__internal_f3a28ab51c99e1dc9af8b3889936ed15249c631064bc00ad3bcd78db1a9fffdf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b8a911507fc7cbbb38ab53bf49b1c1a5330aa03794b267a2aebdfa270de4a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8a911507fc7cbbb38ab53bf49b1c1a5330aa03794b267a2aebdfa270de4a1d->enter($__internal_2b8a911507fc7cbbb38ab53bf49b1c1a5330aa03794b267a2aebdfa270de4a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47a0936cb3da16dda0d9b3888ae2586484e3bd6438e0c5d2572d26b7974aa818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a0936cb3da16dda0d9b3888ae2586484e3bd6438e0c5d2572d26b7974aa818->enter($__internal_47a0936cb3da16dda0d9b3888ae2586484e3bd6438e0c5d2572d26b7974aa818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  <h2>Page d'accueil de notre site</h2>


";
        
        $__internal_47a0936cb3da16dda0d9b3888ae2586484e3bd6438e0c5d2572d26b7974aa818->leave($__internal_47a0936cb3da16dda0d9b3888ae2586484e3bd6438e0c5d2572d26b7974aa818_prof);

        
        $__internal_2b8a911507fc7cbbb38ab53bf49b1c1a5330aa03794b267a2aebdfa270de4a1d->leave($__internal_2b8a911507fc7cbbb38ab53bf49b1c1a5330aa03794b267a2aebdfa270de4a1d_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}
{% extends \"CoreBundle::layout.html.twig\" %}

{% block title %}
  Page d'accueil - {{ parent() }}
{% endblock %}

{% block body %}

  <h2>Page d'accueil de notre site</h2>


{% endblock %}
", "CoreBundle:Core:index.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/src/CoreBundle/Resources/views/Core/index.html.twig");
    }
}
