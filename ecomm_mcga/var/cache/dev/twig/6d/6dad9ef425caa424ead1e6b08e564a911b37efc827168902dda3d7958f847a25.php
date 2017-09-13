<?php

/* ECommBundle:Produits:index.html.twig */
class __TwigTemplate_2862faf0b7aa3cd8628b8248de0907ea9b24c5c8f5284585323d2212cdd5b41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ECommBundle::Produitslayout.html.twig", "ECommBundle:Produits:index.html.twig", 1);
        $this->blocks = array(
            'ecomm_body' => array($this, 'block_ecomm_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ECommBundle::Produitslayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_549a2d74e510ceb431aaa89cd1fcfc6573c5a603c8925d5c807130bd21b7dc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549a2d74e510ceb431aaa89cd1fcfc6573c5a603c8925d5c807130bd21b7dc56->enter($__internal_549a2d74e510ceb431aaa89cd1fcfc6573c5a603c8925d5c807130bd21b7dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle:Produits:index.html.twig"));

        $__internal_4361f2851cec29147b720d34f43c22593b9f75c51a6eefd7d6fd92bc305ade71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4361f2851cec29147b720d34f43c22593b9f75c51a6eefd7d6fd92bc305ade71->enter($__internal_4361f2851cec29147b720d34f43c22593b9f75c51a6eefd7d6fd92bc305ade71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle:Produits:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_549a2d74e510ceb431aaa89cd1fcfc6573c5a603c8925d5c807130bd21b7dc56->leave($__internal_549a2d74e510ceb431aaa89cd1fcfc6573c5a603c8925d5c807130bd21b7dc56_prof);

        
        $__internal_4361f2851cec29147b720d34f43c22593b9f75c51a6eefd7d6fd92bc305ade71->leave($__internal_4361f2851cec29147b720d34f43c22593b9f75c51a6eefd7d6fd92bc305ade71_prof);

    }

    // line 4
    public function block_ecomm_body($context, array $blocks = array())
    {
        $__internal_ac79d71af1d4f3ab66cf80de36dd37ede21c07b7d9f65ff3015bc22e3570ce80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac79d71af1d4f3ab66cf80de36dd37ede21c07b7d9f65ff3015bc22e3570ce80->enter($__internal_ac79d71af1d4f3ab66cf80de36dd37ede21c07b7d9f65ff3015bc22e3570ce80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ecomm_body"));

        $__internal_7d5fd249f73b661ec1b92c161ce6ea63fd37e5f1d50937bec4a07d996af5b2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5fd249f73b661ec1b92c161ce6ea63fd37e5f1d50937bec4a07d996af5b2b4->enter($__internal_7d5fd249f73b661ec1b92c161ce6ea63fd37e5f1d50937bec4a07d996af5b2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ecomm_body"));

        // line 5
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProduits"]) || array_key_exists("listProduits", $context) ? $context["listProduits"] : (function () { throw new Twig_Error_Runtime('Variable "listProduits" does not exist.', 9, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 10
            echo "      <li>
 
          ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "
          au prix :";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo "
   
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </ul>

";
        
        $__internal_7d5fd249f73b661ec1b92c161ce6ea63fd37e5f1d50937bec4a07d996af5b2b4->leave($__internal_7d5fd249f73b661ec1b92c161ce6ea63fd37e5f1d50937bec4a07d996af5b2b4_prof);

        
        $__internal_ac79d71af1d4f3ab66cf80de36dd37ede21c07b7d9f65ff3015bc22e3570ce80->leave($__internal_ac79d71af1d4f3ab66cf80de36dd37ede21c07b7d9f65ff3015bc22e3570ce80_prof);

    }

    public function getTemplateName()
    {
        return "ECommBundle:Produits:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  77 => 17,  68 => 13,  64 => 12,  60 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ECommBundle::Produitslayout.html.twig\" %}


{% block ecomm_body %}

  <h2>Liste des annonces</h2>

  <ul>
    {% for produit in listProduits %}
      <li>
 
          {{ produit.nom }}
          au prix :{{ produit.prix }}
   
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

{% endblock %}

", "ECommBundle:Produits:index.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/src/ECommBundle/Resources/views/Produits/index.html.twig");
    }
}
