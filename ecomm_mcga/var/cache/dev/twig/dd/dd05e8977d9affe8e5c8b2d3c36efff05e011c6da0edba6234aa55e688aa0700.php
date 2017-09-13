<?php

/* base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e4148f3ab79addabeab859933b3b42995a18a77db7d723048f4d9a0da0110c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4148f3ab79addabeab859933b3b42995a18a77db7d723048f4d9a0da0110c6->enter($__internal_9e4148f3ab79addabeab859933b3b42995a18a77db7d723048f4d9a0da0110c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a31dc8bb04ed3de1795a0e54c60c9c46b4646b34b33ec6f4f162bd442e6ae7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31dc8bb04ed3de1795a0e54c60c9c46b4646b34b33ec6f4f162bd442e6ae7b1->enter($__internal_a31dc8bb04ed3de1795a0e54c60c9c46b4646b34b33ec6f4f162bd442e6ae7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9e4148f3ab79addabeab859933b3b42995a18a77db7d723048f4d9a0da0110c6->leave($__internal_9e4148f3ab79addabeab859933b3b42995a18a77db7d723048f4d9a0da0110c6_prof);

        
        $__internal_a31dc8bb04ed3de1795a0e54c60c9c46b4646b34b33ec6f4f162bd442e6ae7b1->leave($__internal_a31dc8bb04ed3de1795a0e54c60c9c46b4646b34b33ec6f4f162bd442e6ae7b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4344c4a27c4210d0426a2d11f257caf1fa488043ea4450c84615b7888a40baf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4344c4a27c4210d0426a2d11f257caf1fa488043ea4450c84615b7888a40baf8->enter($__internal_4344c4a27c4210d0426a2d11f257caf1fa488043ea4450c84615b7888a40baf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68b2f19b6d1241d668cd7a43ce7a8a41656cd0d26897a86f9a2f4f5d1c2a1951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b2f19b6d1241d668cd7a43ce7a8a41656cd0d26897a86f9a2f4f5d1c2a1951->enter($__internal_68b2f19b6d1241d668cd7a43ce7a8a41656cd0d26897a86f9a2f4f5d1c2a1951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_68b2f19b6d1241d668cd7a43ce7a8a41656cd0d26897a86f9a2f4f5d1c2a1951->leave($__internal_68b2f19b6d1241d668cd7a43ce7a8a41656cd0d26897a86f9a2f4f5d1c2a1951_prof);

        
        $__internal_4344c4a27c4210d0426a2d11f257caf1fa488043ea4450c84615b7888a40baf8->leave($__internal_4344c4a27c4210d0426a2d11f257caf1fa488043ea4450c84615b7888a40baf8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d984f397208789fff800ef4738caff8e2123989fc461e595e993bbe69729bbf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d984f397208789fff800ef4738caff8e2123989fc461e595e993bbe69729bbf2->enter($__internal_d984f397208789fff800ef4738caff8e2123989fc461e595e993bbe69729bbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cd8e86d633424a1792eff2f61a1908e3d2804bb33382c0e7aee51b1c3434fbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8e86d633424a1792eff2f61a1908e3d2804bb33382c0e7aee51b1c3434fbb8->enter($__internal_cd8e86d633424a1792eff2f61a1908e3d2804bb33382c0e7aee51b1c3434fbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd8e86d633424a1792eff2f61a1908e3d2804bb33382c0e7aee51b1c3434fbb8->leave($__internal_cd8e86d633424a1792eff2f61a1908e3d2804bb33382c0e7aee51b1c3434fbb8_prof);

        
        $__internal_d984f397208789fff800ef4738caff8e2123989fc461e595e993bbe69729bbf2->leave($__internal_d984f397208789fff800ef4738caff8e2123989fc461e595e993bbe69729bbf2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b55e672b1339a8de3403a7f9597f929eeebd2051b92e93992f920e0d944da1b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55e672b1339a8de3403a7f9597f929eeebd2051b92e93992f920e0d944da1b0->enter($__internal_b55e672b1339a8de3403a7f9597f929eeebd2051b92e93992f920e0d944da1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea39a25f4b9154359e4c610d454f5d398f494fdbb830e35cc37888e5a878a6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea39a25f4b9154359e4c610d454f5d398f494fdbb830e35cc37888e5a878a6e5->enter($__internal_ea39a25f4b9154359e4c610d454f5d398f494fdbb830e35cc37888e5a878a6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea39a25f4b9154359e4c610d454f5d398f494fdbb830e35cc37888e5a878a6e5->leave($__internal_ea39a25f4b9154359e4c610d454f5d398f494fdbb830e35cc37888e5a878a6e5_prof);

        
        $__internal_b55e672b1339a8de3403a7f9597f929eeebd2051b92e93992f920e0d944da1b0->leave($__internal_b55e672b1339a8de3403a7f9597f929eeebd2051b92e93992f920e0d944da1b0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6a56682f2dd6f224ef90e8e26af07680a6b4b0492eaa62eff7c33751afeecb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a56682f2dd6f224ef90e8e26af07680a6b4b0492eaa62eff7c33751afeecb6->enter($__internal_b6a56682f2dd6f224ef90e8e26af07680a6b4b0492eaa62eff7c33751afeecb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f87b9594d2e566544fc8027094fd0bded3d6125136f369d2d943ee05c16f0e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87b9594d2e566544fc8027094fd0bded3d6125136f369d2d943ee05c16f0e1f->enter($__internal_f87b9594d2e566544fc8027094fd0bded3d6125136f369d2d943ee05c16f0e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f87b9594d2e566544fc8027094fd0bded3d6125136f369d2d943ee05c16f0e1f->leave($__internal_f87b9594d2e566544fc8027094fd0bded3d6125136f369d2d943ee05c16f0e1f_prof);

        
        $__internal_b6a56682f2dd6f224ef90e8e26af07680a6b4b0492eaa62eff7c33751afeecb6->leave($__internal_b6a56682f2dd6f224ef90e8e26af07680a6b4b0492eaa62eff7c33751afeecb6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/max/git/ecomm2017/ecomm_mcga/app/Resources/views/base.html.twig");
    }
}
