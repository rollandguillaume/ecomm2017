<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_83d23abda652790311a706a350bc74725a82982392b755edf4e5d831c1f84c52 extends Twig_Template
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
        $__internal_e264b2717b32b1b69a139b72683aa3da38d92ec15ca0c475755e7e45d521625d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e264b2717b32b1b69a139b72683aa3da38d92ec15ca0c475755e7e45d521625d->enter($__internal_e264b2717b32b1b69a139b72683aa3da38d92ec15ca0c475755e7e45d521625d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5fad1584d91589fb9a2c56d184ca8e156e7d18fba1eeb6e5768c5be7e8b87317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fad1584d91589fb9a2c56d184ca8e156e7d18fba1eeb6e5768c5be7e8b87317->enter($__internal_5fad1584d91589fb9a2c56d184ca8e156e7d18fba1eeb6e5768c5be7e8b87317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_e264b2717b32b1b69a139b72683aa3da38d92ec15ca0c475755e7e45d521625d->leave($__internal_e264b2717b32b1b69a139b72683aa3da38d92ec15ca0c475755e7e45d521625d_prof);

        
        $__internal_5fad1584d91589fb9a2c56d184ca8e156e7d18fba1eeb6e5768c5be7e8b87317->leave($__internal_5fad1584d91589fb9a2c56d184ca8e156e7d18fba1eeb6e5768c5be7e8b87317_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
