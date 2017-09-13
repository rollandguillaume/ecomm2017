<?php

/* ECommBundle::layout.html.twig */
class __TwigTemplate_7c2cc4ebe7353bc13e7cf125b997257f68fd3abc315920e910a4791dc38b9109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "ECommBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'ecomm_body' => array($this, 'block_ecomm_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e2299ba03bc523e29a269d3b8725a248de546dc2ec7db55b6a3f96a3acbb277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2299ba03bc523e29a269d3b8725a248de546dc2ec7db55b6a3f96a3acbb277->enter($__internal_4e2299ba03bc523e29a269d3b8725a248de546dc2ec7db55b6a3f96a3acbb277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle::layout.html.twig"));

        $__internal_e34408cd51f3f1538df1d8229c8349713e71f551521fe4956b072890e8fcffb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34408cd51f3f1538df1d8229c8349713e71f551521fe4956b072890e8fcffb5->enter($__internal_e34408cd51f3f1538df1d8229c8349713e71f551521fe4956b072890e8fcffb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e2299ba03bc523e29a269d3b8725a248de546dc2ec7db55b6a3f96a3acbb277->leave($__internal_4e2299ba03bc523e29a269d3b8725a248de546dc2ec7db55b6a3f96a3acbb277_prof);

        
        $__internal_e34408cd51f3f1538df1d8229c8349713e71f551521fe4956b072890e8fcffb5->leave($__internal_e34408cd51f3f1538df1d8229c8349713e71f551521fe4956b072890e8fcffb5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d924403645f0ccba1f05445fca2b7911859b7bec0f95eff029e198c02fcd6346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d924403645f0ccba1f05445fca2b7911859b7bec0f95eff029e198c02fcd6346->enter($__internal_d924403645f0ccba1f05445fca2b7911859b7bec0f95eff029e198c02fcd6346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df69da88da85bc93262be519efdb71c87b82e6eb9b3309a7ade35785ecdc46b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df69da88da85bc93262be519efdb71c87b82e6eb9b3309a7ade35785ecdc46b2->enter($__internal_df69da88da85bc93262be519efdb71c87b82e6eb9b3309a7ade35785ecdc46b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  ";
        // line 7
        echo "  <h1>Produits</h1>

  <hr>

  ";
        // line 12
        echo "  ";
        $this->displayBlock('ecomm_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_df69da88da85bc93262be519efdb71c87b82e6eb9b3309a7ade35785ecdc46b2->leave($__internal_df69da88da85bc93262be519efdb71c87b82e6eb9b3309a7ade35785ecdc46b2_prof);

        
        $__internal_d924403645f0ccba1f05445fca2b7911859b7bec0f95eff029e198c02fcd6346->leave($__internal_d924403645f0ccba1f05445fca2b7911859b7bec0f95eff029e198c02fcd6346_prof);

    }

    // line 12
    public function block_ecomm_body($context, array $blocks = array())
    {
        $__internal_a6e5580bc874b26ef76295c9cf14974277c0c0cf6ad38e563779d67caf6966f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e5580bc874b26ef76295c9cf14974277c0c0cf6ad38e563779d67caf6966f9->enter($__internal_a6e5580bc874b26ef76295c9cf14974277c0c0cf6ad38e563779d67caf6966f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ecomm_body"));

        $__internal_2afa30f2840329c0b2f2b22d20e29231922cf30a7b01c5296a18f730ba7d2d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afa30f2840329c0b2f2b22d20e29231922cf30a7b01c5296a18f730ba7d2d4d->enter($__internal_2afa30f2840329c0b2f2b22d20e29231922cf30a7b01c5296a18f730ba7d2d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ecomm_body"));

        // line 13
        echo "  ";
        
        $__internal_2afa30f2840329c0b2f2b22d20e29231922cf30a7b01c5296a18f730ba7d2d4d->leave($__internal_2afa30f2840329c0b2f2b22d20e29231922cf30a7b01c5296a18f730ba7d2d4d_prof);

        
        $__internal_a6e5580bc874b26ef76295c9cf14974277c0c0cf6ad38e563779d67caf6966f9->leave($__internal_a6e5580bc874b26ef76295c9cf14974277c0c0cf6ad38e563779d67caf6966f9_prof);

    }

    public function getTemplateName()
    {
        return "ECommBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  73 => 12,  62 => 14,  59 => 12,  53 => 7,  50 => 5,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CoreBundle::layout.html.twig\" %}


{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Produits</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ecomm_body %}
  {% endblock %}

{% endblock %}
", "ECommBundle::layout.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/src/ECommBundle/Resources/views/layout.html.twig");
    }
}
