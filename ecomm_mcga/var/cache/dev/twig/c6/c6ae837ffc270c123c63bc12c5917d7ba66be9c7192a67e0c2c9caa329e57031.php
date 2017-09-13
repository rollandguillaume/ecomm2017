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
        $__internal_ead6fb45031b00ead21262c17a7b513ca8ac34004c684f99ae51a093e5bcf343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead6fb45031b00ead21262c17a7b513ca8ac34004c684f99ae51a093e5bcf343->enter($__internal_ead6fb45031b00ead21262c17a7b513ca8ac34004c684f99ae51a093e5bcf343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_64599edb71c4d9c8832f00e2959e9c031f752dd9f1aea87cd55fce71a0f98f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64599edb71c4d9c8832f00e2959e9c031f752dd9f1aea87cd55fce71a0f98f5a->enter($__internal_64599edb71c4d9c8832f00e2959e9c031f752dd9f1aea87cd55fce71a0f98f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ead6fb45031b00ead21262c17a7b513ca8ac34004c684f99ae51a093e5bcf343->leave($__internal_ead6fb45031b00ead21262c17a7b513ca8ac34004c684f99ae51a093e5bcf343_prof);

        
        $__internal_64599edb71c4d9c8832f00e2959e9c031f752dd9f1aea87cd55fce71a0f98f5a->leave($__internal_64599edb71c4d9c8832f00e2959e9c031f752dd9f1aea87cd55fce71a0f98f5a_prof);

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
