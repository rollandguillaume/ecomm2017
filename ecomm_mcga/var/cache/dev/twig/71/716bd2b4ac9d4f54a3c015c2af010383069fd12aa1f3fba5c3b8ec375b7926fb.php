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
        $__internal_aaaa7c13f273b8ff1bcc2edffc4c0b266124e49838a777dbe88780a1ff2dcaaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaaa7c13f273b8ff1bcc2edffc4c0b266124e49838a777dbe88780a1ff2dcaaf->enter($__internal_aaaa7c13f273b8ff1bcc2edffc4c0b266124e49838a777dbe88780a1ff2dcaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a9acb2c3e1a112ee45216a77cfb9de32f9214c9d02ee905e16f4d42fc6508d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9acb2c3e1a112ee45216a77cfb9de32f9214c9d02ee905e16f4d42fc6508d23->enter($__internal_a9acb2c3e1a112ee45216a77cfb9de32f9214c9d02ee905e16f4d42fc6508d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_aaaa7c13f273b8ff1bcc2edffc4c0b266124e49838a777dbe88780a1ff2dcaaf->leave($__internal_aaaa7c13f273b8ff1bcc2edffc4c0b266124e49838a777dbe88780a1ff2dcaaf_prof);

        
        $__internal_a9acb2c3e1a112ee45216a77cfb9de32f9214c9d02ee905e16f4d42fc6508d23->leave($__internal_a9acb2c3e1a112ee45216a77cfb9de32f9214c9d02ee905e16f4d42fc6508d23_prof);

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
