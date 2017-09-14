<?php

/* ECommBundle:Produits:index.html.twig */
class __TwigTemplate_2862faf0b7aa3cd8628b8248de0907ea9b24c5c8f5284585323d2212cdd5b41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ECommBundle:Produits:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96cdeaea62315cbc775ce5d1801b963cc81061b0a7c2093be6ffd616b10c18db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cdeaea62315cbc775ce5d1801b963cc81061b0a7c2093be6ffd616b10c18db->enter($__internal_96cdeaea62315cbc775ce5d1801b963cc81061b0a7c2093be6ffd616b10c18db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle:Produits:index.html.twig"));

        $__internal_c2cdc40fbc7fe7127e44685f5284fd8f7a940a9e160bdcef00e253c62eb52ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cdc40fbc7fe7127e44685f5284fd8f7a940a9e160bdcef00e253c62eb52ebc->enter($__internal_c2cdc40fbc7fe7127e44685f5284fd8f7a940a9e160bdcef00e253c62eb52ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle:Produits:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96cdeaea62315cbc775ce5d1801b963cc81061b0a7c2093be6ffd616b10c18db->leave($__internal_96cdeaea62315cbc775ce5d1801b963cc81061b0a7c2093be6ffd616b10c18db_prof);

        
        $__internal_c2cdc40fbc7fe7127e44685f5284fd8f7a940a9e160bdcef00e253c62eb52ebc->leave($__internal_c2cdc40fbc7fe7127e44685f5284fd8f7a940a9e160bdcef00e253c62eb52ebc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e74588332dc6b50228abfb4c032eca9de8efd0cf0eb99628edb2f490ee428f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e74588332dc6b50228abfb4c032eca9de8efd0cf0eb99628edb2f490ee428f0->enter($__internal_0e74588332dc6b50228abfb4c032eca9de8efd0cf0eb99628edb2f490ee428f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e73e4cc4ce617374159bd9ca644b61f0f532c2f89509e2b2e8967a0b257877f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73e4cc4ce617374159bd9ca644b61f0f532c2f89509e2b2e8967a0b257877f7->enter($__internal_e73e4cc4ce617374159bd9ca644b61f0f532c2f89509e2b2e8967a0b257877f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<h1>Produits</h1>

<hr>

  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProduits"]) || array_key_exists("listProduits", $context) ? $context["listProduits"] : (function () { throw new Twig_Error_Runtime('Variable "listProduits" does not exist.', 13, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 14
            echo "      <li>

          ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "
          au prix :";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo "

      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>

";
        
        $__internal_e73e4cc4ce617374159bd9ca644b61f0f532c2f89509e2b2e8967a0b257877f7->leave($__internal_e73e4cc4ce617374159bd9ca644b61f0f532c2f89509e2b2e8967a0b257877f7_prof);

        
        $__internal_0e74588332dc6b50228abfb4c032eca9de8efd0cf0eb99628edb2f490ee428f0->leave($__internal_0e74588332dc6b50228abfb4c032eca9de8efd0cf0eb99628edb2f490ee428f0_prof);

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
        return array (  88 => 23,  81 => 21,  72 => 17,  68 => 16,  64 => 14,  59 => 13,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}


{% block body %}

<h1>Produits</h1>

<hr>

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
