<?php

/* ECommBundle:Produits:index.html.twig */
class __TwigTemplate_2862faf0b7aa3cd8628b8248de0907ea9b24c5c8f5284585323d2212cdd5b41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ECommBundle::layout.html.twig", "ECommBundle:Produits:index.html.twig", 2);
        $this->blocks = array(
            'ecomm_body' => array($this, 'block_ecomm_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ECommBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b62e3e0cc81dd402dd25de40a6ae453be3c5686001a9568e95bd19f0cff13920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62e3e0cc81dd402dd25de40a6ae453be3c5686001a9568e95bd19f0cff13920->enter($__internal_b62e3e0cc81dd402dd25de40a6ae453be3c5686001a9568e95bd19f0cff13920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle:Produits:index.html.twig"));

        $__internal_526813b22bde8d87bfe8082e3ca8d8935d20c8c1a140bfe256875823a2221837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526813b22bde8d87bfe8082e3ca8d8935d20c8c1a140bfe256875823a2221837->enter($__internal_526813b22bde8d87bfe8082e3ca8d8935d20c8c1a140bfe256875823a2221837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle:Produits:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b62e3e0cc81dd402dd25de40a6ae453be3c5686001a9568e95bd19f0cff13920->leave($__internal_b62e3e0cc81dd402dd25de40a6ae453be3c5686001a9568e95bd19f0cff13920_prof);

        
        $__internal_526813b22bde8d87bfe8082e3ca8d8935d20c8c1a140bfe256875823a2221837->leave($__internal_526813b22bde8d87bfe8082e3ca8d8935d20c8c1a140bfe256875823a2221837_prof);

    }

    // line 5
    public function block_ecomm_body($context, array $blocks = array())
    {
        $__internal_382990b97116085f671107505ccdaa456408a42d047b18f4b4bc16828d702311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382990b97116085f671107505ccdaa456408a42d047b18f4b4bc16828d702311->enter($__internal_382990b97116085f671107505ccdaa456408a42d047b18f4b4bc16828d702311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ecomm_body"));

        $__internal_c36338deeed23fdbc520f0ca92b2f966f48dda9c361f2fe677bf3f407daf2366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36338deeed23fdbc520f0ca92b2f966f48dda9c361f2fe677bf3f407daf2366->enter($__internal_c36338deeed23fdbc520f0ca92b2f966f48dda9c361f2fe677bf3f407daf2366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ecomm_body"));

        // line 6
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProduits"]) || array_key_exists("listProduits", $context) ? $context["listProduits"] : (function () { throw new Twig_Error_Runtime('Variable "listProduits" does not exist.', 10, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 11
            echo "      <li>
 
          ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "
          au prix :";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo "
   
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </ul>

";
        
        $__internal_c36338deeed23fdbc520f0ca92b2f966f48dda9c361f2fe677bf3f407daf2366->leave($__internal_c36338deeed23fdbc520f0ca92b2f966f48dda9c361f2fe677bf3f407daf2366_prof);

        
        $__internal_382990b97116085f671107505ccdaa456408a42d047b18f4b4bc16828d702311->leave($__internal_382990b97116085f671107505ccdaa456408a42d047b18f4b4bc16828d702311_prof);

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
        return array (  84 => 20,  77 => 18,  68 => 14,  64 => 13,  60 => 11,  55 => 10,  49 => 6,  40 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"ECommBundle::layout.html.twig\" %}


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
