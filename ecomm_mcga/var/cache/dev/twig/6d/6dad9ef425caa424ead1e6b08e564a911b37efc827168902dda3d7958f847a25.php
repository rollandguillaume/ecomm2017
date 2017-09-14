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
        $__internal_219003bdf9c236dde3823a20e98bc8f53ff197aa17fab6142638f4334006bbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219003bdf9c236dde3823a20e98bc8f53ff197aa17fab6142638f4334006bbc5->enter($__internal_219003bdf9c236dde3823a20e98bc8f53ff197aa17fab6142638f4334006bbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle:Produits:index.html.twig"));

        $__internal_bc0e9789ca1a96805471f71a1579c5234d64ee8f7644e33cfe850bee572d1c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0e9789ca1a96805471f71a1579c5234d64ee8f7644e33cfe850bee572d1c06->enter($__internal_bc0e9789ca1a96805471f71a1579c5234d64ee8f7644e33cfe850bee572d1c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECommBundle:Produits:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219003bdf9c236dde3823a20e98bc8f53ff197aa17fab6142638f4334006bbc5->leave($__internal_219003bdf9c236dde3823a20e98bc8f53ff197aa17fab6142638f4334006bbc5_prof);

        
        $__internal_bc0e9789ca1a96805471f71a1579c5234d64ee8f7644e33cfe850bee572d1c06->leave($__internal_bc0e9789ca1a96805471f71a1579c5234d64ee8f7644e33cfe850bee572d1c06_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5a2da66624d9d407489b7b4d3ec2eea715c15ddd423e57fda20bb5dec191c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a2da66624d9d407489b7b4d3ec2eea715c15ddd423e57fda20bb5dec191c2a->enter($__internal_e5a2da66624d9d407489b7b4d3ec2eea715c15ddd423e57fda20bb5dec191c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3468d33d62fcf4c82ec9ccf18bf3bda510a9794308e9e3aca5b6e6ea897c675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3468d33d62fcf4c82ec9ccf18bf3bda510a9794308e9e3aca5b6e6ea897c675->enter($__internal_a3468d33d62fcf4c82ec9ccf18bf3bda510a9794308e9e3aca5b6e6ea897c675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a3468d33d62fcf4c82ec9ccf18bf3bda510a9794308e9e3aca5b6e6ea897c675->leave($__internal_a3468d33d62fcf4c82ec9ccf18bf3bda510a9794308e9e3aca5b6e6ea897c675_prof);

        
        $__internal_e5a2da66624d9d407489b7b4d3ec2eea715c15ddd423e57fda20bb5dec191c2a->leave($__internal_e5a2da66624d9d407489b7b4d3ec2eea715c15ddd423e57fda20bb5dec191c2a_prof);

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
", "ECommBundle:Produits:index.html.twig", "/home/rollandguillaume/Desktop/ecomm2017/ecomm_mcga/src/ECommBundle/Resources/views/Produits/index.html.twig");
    }
}
