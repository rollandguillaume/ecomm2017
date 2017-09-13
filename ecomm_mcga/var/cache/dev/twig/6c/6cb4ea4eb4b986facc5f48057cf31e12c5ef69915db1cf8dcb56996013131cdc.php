<?php

/* @WebProfiler/Profiler/header.html.twig */
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
        $__internal_7fff8eaf4fc9fa434f4cc04312f810ca9cc38c7265183ac5a2fc7d2eb273db57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fff8eaf4fc9fa434f4cc04312f810ca9cc38c7265183ac5a2fc7d2eb273db57->enter($__internal_7fff8eaf4fc9fa434f4cc04312f810ca9cc38c7265183ac5a2fc7d2eb273db57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_159bb8e9bd05b5e3615cf5e267c4fcebcefadbd4f5dd5893598c2ea14fd68379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159bb8e9bd05b5e3615cf5e267c4fcebcefadbd4f5dd5893598c2ea14fd68379->enter($__internal_159bb8e9bd05b5e3615cf5e267c4fcebcefadbd4f5dd5893598c2ea14fd68379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_7fff8eaf4fc9fa434f4cc04312f810ca9cc38c7265183ac5a2fc7d2eb273db57->leave($__internal_7fff8eaf4fc9fa434f4cc04312f810ca9cc38c7265183ac5a2fc7d2eb273db57_prof);

        
        $__internal_159bb8e9bd05b5e3615cf5e267c4fcebcefadbd4f5dd5893598c2ea14fd68379->leave($__internal_159bb8e9bd05b5e3615cf5e267c4fcebcefadbd4f5dd5893598c2ea14fd68379_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
