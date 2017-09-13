<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_09486ce732be869d7f8ac9e4a83f447986a3ce162945cfbf30a96b20de9b808f extends Twig_Template
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
        $__internal_fa24f53cc947282cfdc70d09e86887ed47a66804b6345d379617b3a8f11045b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa24f53cc947282cfdc70d09e86887ed47a66804b6345d379617b3a8f11045b6->enter($__internal_fa24f53cc947282cfdc70d09e86887ed47a66804b6345d379617b3a8f11045b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_90fcf5972ff157624f8a44dcb3211f9743a93da52bf035b637bb7cebf96e66c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fcf5972ff157624f8a44dcb3211f9743a93da52bf035b637bb7cebf96e66c2->enter($__internal_90fcf5972ff157624f8a44dcb3211f9743a93da52bf035b637bb7cebf96e66c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_fa24f53cc947282cfdc70d09e86887ed47a66804b6345d379617b3a8f11045b6->leave($__internal_fa24f53cc947282cfdc70d09e86887ed47a66804b6345d379617b3a8f11045b6_prof);

        
        $__internal_90fcf5972ff157624f8a44dcb3211f9743a93da52bf035b637bb7cebf96e66c2->leave($__internal_90fcf5972ff157624f8a44dcb3211f9743a93da52bf035b637bb7cebf96e66c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
