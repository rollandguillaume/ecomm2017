<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeceab5bbffbc17dd3503b3d0d3ff2439e8bc6ec0e37ab17f92a8d42766b219f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeceab5bbffbc17dd3503b3d0d3ff2439e8bc6ec0e37ab17f92a8d42766b219f->enter($__internal_aeceab5bbffbc17dd3503b3d0d3ff2439e8bc6ec0e37ab17f92a8d42766b219f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a107feaf4f0acb998554bfdc46f10cce39d61942b4a23e1a65a595e69dd74d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a107feaf4f0acb998554bfdc46f10cce39d61942b4a23e1a65a595e69dd74d2e->enter($__internal_a107feaf4f0acb998554bfdc46f10cce39d61942b4a23e1a65a595e69dd74d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeceab5bbffbc17dd3503b3d0d3ff2439e8bc6ec0e37ab17f92a8d42766b219f->leave($__internal_aeceab5bbffbc17dd3503b3d0d3ff2439e8bc6ec0e37ab17f92a8d42766b219f_prof);

        
        $__internal_a107feaf4f0acb998554bfdc46f10cce39d61942b4a23e1a65a595e69dd74d2e->leave($__internal_a107feaf4f0acb998554bfdc46f10cce39d61942b4a23e1a65a595e69dd74d2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48abbd64d14efd4083f2cdf632e0d872ba8b2e04912eab5dbb91a01af22b2256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48abbd64d14efd4083f2cdf632e0d872ba8b2e04912eab5dbb91a01af22b2256->enter($__internal_48abbd64d14efd4083f2cdf632e0d872ba8b2e04912eab5dbb91a01af22b2256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_781af71987d2563cd6921a8fa3167ce179a4f9a8333559c3e98c777fe63b2f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781af71987d2563cd6921a8fa3167ce179a4f9a8333559c3e98c777fe63b2f3a->enter($__internal_781af71987d2563cd6921a8fa3167ce179a4f9a8333559c3e98c777fe63b2f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_781af71987d2563cd6921a8fa3167ce179a4f9a8333559c3e98c777fe63b2f3a->leave($__internal_781af71987d2563cd6921a8fa3167ce179a4f9a8333559c3e98c777fe63b2f3a_prof);

        
        $__internal_48abbd64d14efd4083f2cdf632e0d872ba8b2e04912eab5dbb91a01af22b2256->leave($__internal_48abbd64d14efd4083f2cdf632e0d872ba8b2e04912eab5dbb91a01af22b2256_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb9341e2d87a2e84fa0fc4838044b2dc38e8979b647257c863c199a1738f5ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9341e2d87a2e84fa0fc4838044b2dc38e8979b647257c863c199a1738f5ac2->enter($__internal_eb9341e2d87a2e84fa0fc4838044b2dc38e8979b647257c863c199a1738f5ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8448a08222b13e8210fe22c36e3f5bb7948ce33560c0086a046bb9eea0252295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8448a08222b13e8210fe22c36e3f5bb7948ce33560c0086a046bb9eea0252295->enter($__internal_8448a08222b13e8210fe22c36e3f5bb7948ce33560c0086a046bb9eea0252295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8448a08222b13e8210fe22c36e3f5bb7948ce33560c0086a046bb9eea0252295->leave($__internal_8448a08222b13e8210fe22c36e3f5bb7948ce33560c0086a046bb9eea0252295_prof);

        
        $__internal_eb9341e2d87a2e84fa0fc4838044b2dc38e8979b647257c863c199a1738f5ac2->leave($__internal_eb9341e2d87a2e84fa0fc4838044b2dc38e8979b647257c863c199a1738f5ac2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14e7ecda7edc1338b9d2e6de6b9369fbc933bb8fc5f0f2485c44d656298de3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e7ecda7edc1338b9d2e6de6b9369fbc933bb8fc5f0f2485c44d656298de3e9->enter($__internal_14e7ecda7edc1338b9d2e6de6b9369fbc933bb8fc5f0f2485c44d656298de3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3abb4baafbdf1132e46801bf197777cf05bb5d2fc2b9a2a4a4ba987157abc93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abb4baafbdf1132e46801bf197777cf05bb5d2fc2b9a2a4a4ba987157abc93b->enter($__internal_3abb4baafbdf1132e46801bf197777cf05bb5d2fc2b9a2a4a4ba987157abc93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3abb4baafbdf1132e46801bf197777cf05bb5d2fc2b9a2a4a4ba987157abc93b->leave($__internal_3abb4baafbdf1132e46801bf197777cf05bb5d2fc2b9a2a4a4ba987157abc93b_prof);

        
        $__internal_14e7ecda7edc1338b9d2e6de6b9369fbc933bb8fc5f0f2485c44d656298de3e9->leave($__internal_14e7ecda7edc1338b9d2e6de6b9369fbc933bb8fc5f0f2485c44d656298de3e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
