<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_5e401f19f0368efe8e92aecc73c7d34d408551fd1c22b47128bd9692fe4fc8e6 extends Twig_Template
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
        $__internal_b605216b4671067a22c5e70c9764bf7f33bbaec5f37b1c994359936465fd5b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b605216b4671067a22c5e70c9764bf7f33bbaec5f37b1c994359936465fd5b14->enter($__internal_b605216b4671067a22c5e70c9764bf7f33bbaec5f37b1c994359936465fd5b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_3c4a776cd0e25ff1ea929f14c9c26e45bdc02f56cf941ba352984a5305364787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4a776cd0e25ff1ea929f14c9c26e45bdc02f56cf941ba352984a5305364787->enter($__internal_3c4a776cd0e25ff1ea929f14c9c26e45bdc02f56cf941ba352984a5305364787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_b605216b4671067a22c5e70c9764bf7f33bbaec5f37b1c994359936465fd5b14->leave($__internal_b605216b4671067a22c5e70c9764bf7f33bbaec5f37b1c994359936465fd5b14_prof);

        
        $__internal_3c4a776cd0e25ff1ea929f14c9c26e45bdc02f56cf941ba352984a5305364787->leave($__internal_3c4a776cd0e25ff1ea929f14c9c26e45bdc02f56cf941ba352984a5305364787_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
