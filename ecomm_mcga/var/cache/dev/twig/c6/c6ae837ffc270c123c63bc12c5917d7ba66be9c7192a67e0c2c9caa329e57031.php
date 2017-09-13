<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_85d8d9bca213f9329ed580914dd02d314a2f53506afc7d7f934598a310ff0233 extends Twig_Template
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
        $__internal_2200aa9ca00ece66b5eb9bf39d15ed3d91ce519d4a7ff4a27ee5a6d344d86111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2200aa9ca00ece66b5eb9bf39d15ed3d91ce519d4a7ff4a27ee5a6d344d86111->enter($__internal_2200aa9ca00ece66b5eb9bf39d15ed3d91ce519d4a7ff4a27ee5a6d344d86111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_b170bf7841dd7025faec4f8ad5692210018c1044c6b3a2ea47aac65ee9ee7e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b170bf7841dd7025faec4f8ad5692210018c1044c6b3a2ea47aac65ee9ee7e70->enter($__internal_b170bf7841dd7025faec4f8ad5692210018c1044c6b3a2ea47aac65ee9ee7e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_2200aa9ca00ece66b5eb9bf39d15ed3d91ce519d4a7ff4a27ee5a6d344d86111->leave($__internal_2200aa9ca00ece66b5eb9bf39d15ed3d91ce519d4a7ff4a27ee5a6d344d86111_prof);

        
        $__internal_b170bf7841dd7025faec4f8ad5692210018c1044c6b3a2ea47aac65ee9ee7e70->leave($__internal_b170bf7841dd7025faec4f8ad5692210018c1044c6b3a2ea47aac65ee9ee7e70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
