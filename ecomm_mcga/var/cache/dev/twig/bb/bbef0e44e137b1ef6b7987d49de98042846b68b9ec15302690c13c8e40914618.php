<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_748581b5f23cfc772fb955a043833322a1781cd61ddf6bd4e2023f3133ec98b8 extends Twig_Template
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
        $__internal_af68b62eb8937f0aa8c79c69961722978d1f1cd684fcbbb71e0decc2ccbe7c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af68b62eb8937f0aa8c79c69961722978d1f1cd684fcbbb71e0decc2ccbe7c1e->enter($__internal_af68b62eb8937f0aa8c79c69961722978d1f1cd684fcbbb71e0decc2ccbe7c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_dcd7fbdd3c5822c77816237fc51a3565b384f1ebbb3b07d6d0f3b18388cb7636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd7fbdd3c5822c77816237fc51a3565b384f1ebbb3b07d6d0f3b18388cb7636->enter($__internal_dcd7fbdd3c5822c77816237fc51a3565b384f1ebbb3b07d6d0f3b18388cb7636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_af68b62eb8937f0aa8c79c69961722978d1f1cd684fcbbb71e0decc2ccbe7c1e->leave($__internal_af68b62eb8937f0aa8c79c69961722978d1f1cd684fcbbb71e0decc2ccbe7c1e_prof);

        
        $__internal_dcd7fbdd3c5822c77816237fc51a3565b384f1ebbb3b07d6d0f3b18388cb7636->leave($__internal_dcd7fbdd3c5822c77816237fc51a3565b384f1ebbb3b07d6d0f3b18388cb7636_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
