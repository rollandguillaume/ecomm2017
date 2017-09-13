<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_e733370e1dbb56ffdabacef987e42425ef0a74c2be677fd0eb21a2fa9d9b00ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7de825cf53b55d748025890c56ac96b292614e1130041e797079817f3837689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7de825cf53b55d748025890c56ac96b292614e1130041e797079817f3837689->enter($__internal_b7de825cf53b55d748025890c56ac96b292614e1130041e797079817f3837689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $__internal_dac2d3389aac9f7eca211d2583417e446fe9b1ec3fe28e17d6fea0cddcb9794c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac2d3389aac9f7eca211d2583417e446fe9b1ec3fe28e17d6fea0cddcb9794c->enter($__internal_dac2d3389aac9f7eca211d2583417e446fe9b1ec3fe28e17d6fea0cddcb9794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  
</head>

<body>
  

    <div >
      <div>
        <h3>Les produits</h3>
        <ul >
          <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ecomm_home");
        echo "\">Accueil</a></li>
        </ul>
      </div>
    </div>


    
  </div>
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "

</body>
</html>
";
        
        $__internal_b7de825cf53b55d748025890c56ac96b292614e1130041e797079817f3837689->leave($__internal_b7de825cf53b55d748025890c56ac96b292614e1130041e797079817f3837689_prof);

        
        $__internal_dac2d3389aac9f7eca211d2583417e446fe9b1ec3fe28e17d6fea0cddcb9794c->leave($__internal_dac2d3389aac9f7eca211d2583417e446fe9b1ec3fe28e17d6fea0cddcb9794c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95aa97a2fb62aaff16551834fbcb764c0359d7079e497fa6b17d9fe1c3e08892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95aa97a2fb62aaff16551834fbcb764c0359d7079e497fa6b17d9fe1c3e08892->enter($__internal_95aa97a2fb62aaff16551834fbcb764c0359d7079e497fa6b17d9fe1c3e08892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a88882f9754466481fe4f14328eed78fa9470c8dd27d717f458956f5bd8585f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a88882f9754466481fe4f14328eed78fa9470c8dd27d717f458956f5bd8585f->enter($__internal_1a88882f9754466481fe4f14328eed78fa9470c8dd27d717f458956f5bd8585f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Site ecommerce";
        
        $__internal_1a88882f9754466481fe4f14328eed78fa9470c8dd27d717f458956f5bd8585f->leave($__internal_1a88882f9754466481fe4f14328eed78fa9470c8dd27d717f458956f5bd8585f_prof);

        
        $__internal_95aa97a2fb62aaff16551834fbcb764c0359d7079e497fa6b17d9fe1c3e08892->leave($__internal_95aa97a2fb62aaff16551834fbcb764c0359d7079e497fa6b17d9fe1c3e08892_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_051de9053677e0dfe2ad597c6debe611fc85f7bd40b605533382415a54133293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051de9053677e0dfe2ad597c6debe611fc85f7bd40b605533382415a54133293->enter($__internal_051de9053677e0dfe2ad597c6debe611fc85f7bd40b605533382415a54133293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18a94e1c598b5377db9f21f28092eb40823529900ee703707f4503e518eb1d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a94e1c598b5377db9f21f28092eb40823529900ee703707f4503e518eb1d47->enter($__internal_18a94e1c598b5377db9f21f28092eb40823529900ee703707f4503e518eb1d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_18a94e1c598b5377db9f21f28092eb40823529900ee703707f4503e518eb1d47->leave($__internal_18a94e1c598b5377db9f21f28092eb40823529900ee703707f4503e518eb1d47_prof);

        
        $__internal_051de9053677e0dfe2ad597c6debe611fc85f7bd40b605533382415a54133293->leave($__internal_051de9053677e0dfe2ad597c6debe611fc85f7bd40b605533382415a54133293_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  77 => 7,  63 => 29,  61 => 27,  50 => 19,  35 => 7,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}Site ecommerce{% endblock %}</title>

  
</head>

<body>
  

    <div >
      <div>
        <h3>Les produits</h3>
        <ul >
          <li><a href=\"{{ path('ecomm_home') }}\">Accueil</a></li>
        </ul>
      </div>
    </div>


    
  </div>
{% block body %}
{% endblock %}


</body>
</html>
", "CoreBundle::layout.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/src/CoreBundle/Resources/views/layout.html.twig");
    }
}
