<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_8f1975f35d87036b4117eb35d1de407e0cfe7965c20985fd4165471d1e42fc3e extends Twig_Template
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
        $__internal_80568eba6b8b84635ab25157ea21a2ea433d238ecdc680c1821c9f40fc8eaa69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80568eba6b8b84635ab25157ea21a2ea433d238ecdc680c1821c9f40fc8eaa69->enter($__internal_80568eba6b8b84635ab25157ea21a2ea433d238ecdc680c1821c9f40fc8eaa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_e6febb9b8f508344340ba2787909dca53c72d6eded5544c26c7a4b29aefd2410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6febb9b8f508344340ba2787909dca53c72d6eded5544c26c7a4b29aefd2410->enter($__internal_e6febb9b8f508344340ba2787909dca53c72d6eded5544c26c7a4b29aefd2410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_80568eba6b8b84635ab25157ea21a2ea433d238ecdc680c1821c9f40fc8eaa69->leave($__internal_80568eba6b8b84635ab25157ea21a2ea433d238ecdc680c1821c9f40fc8eaa69_prof);

        
        $__internal_e6febb9b8f508344340ba2787909dca53c72d6eded5544c26c7a4b29aefd2410->leave($__internal_e6febb9b8f508344340ba2787909dca53c72d6eded5544c26c7a4b29aefd2410_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
