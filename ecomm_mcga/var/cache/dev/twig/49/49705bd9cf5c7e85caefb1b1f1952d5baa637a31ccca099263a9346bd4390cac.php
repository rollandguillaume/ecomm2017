<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_76404c5fabb4d4179e1c5abe01233cef35360e427487fba53ccbfed17d5cb66c extends Twig_Template
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
        $__internal_2f93cfe8ecdab0e24b819bdd4d213d0538ed5a54b4b95666d657df1eea4db512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f93cfe8ecdab0e24b819bdd4d213d0538ed5a54b4b95666d657df1eea4db512->enter($__internal_2f93cfe8ecdab0e24b819bdd4d213d0538ed5a54b4b95666d657df1eea4db512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_df49fbd832ea5ffcd3cf2cc31a206f252930b88a6bc02be41a99dfc5945b7aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df49fbd832ea5ffcd3cf2cc31a206f252930b88a6bc02be41a99dfc5945b7aed->enter($__internal_df49fbd832ea5ffcd3cf2cc31a206f252930b88a6bc02be41a99dfc5945b7aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_2f93cfe8ecdab0e24b819bdd4d213d0538ed5a54b4b95666d657df1eea4db512->leave($__internal_2f93cfe8ecdab0e24b819bdd4d213d0538ed5a54b4b95666d657df1eea4db512_prof);

        
        $__internal_df49fbd832ea5ffcd3cf2cc31a206f252930b88a6bc02be41a99dfc5945b7aed->leave($__internal_df49fbd832ea5ffcd3cf2cc31a206f252930b88a6bc02be41a99dfc5945b7aed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
