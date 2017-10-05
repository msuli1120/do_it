<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2f097e402a28dc19fc7f8d2027b49ce049cf9bb68f157d283fe3eb0bb58b89bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f097e402a28dc19fc7f8d2027b49ce049cf9bb68f157d283fe3eb0bb58b89bc->enter($__internal_2f097e402a28dc19fc7f8d2027b49ce049cf9bb68f157d283fe3eb0bb58b89bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_831964ee02137da1286dfe2a46738c086e3c0d82c1fb9bfb98b49a0fe1a40f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831964ee02137da1286dfe2a46738c086e3c0d82c1fb9bfb98b49a0fe1a40f70->enter($__internal_831964ee02137da1286dfe2a46738c086e3c0d82c1fb9bfb98b49a0fe1a40f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f097e402a28dc19fc7f8d2027b49ce049cf9bb68f157d283fe3eb0bb58b89bc->leave($__internal_2f097e402a28dc19fc7f8d2027b49ce049cf9bb68f157d283fe3eb0bb58b89bc_prof);

        
        $__internal_831964ee02137da1286dfe2a46738c086e3c0d82c1fb9bfb98b49a0fe1a40f70->leave($__internal_831964ee02137da1286dfe2a46738c086e3c0d82c1fb9bfb98b49a0fe1a40f70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bdfb1c7b6a77460483ef387b5f034798e0890caf47c64c07e2516252a1a4ac13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfb1c7b6a77460483ef387b5f034798e0890caf47c64c07e2516252a1a4ac13->enter($__internal_bdfb1c7b6a77460483ef387b5f034798e0890caf47c64c07e2516252a1a4ac13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5b0e5e34a7d3cb5f524a0a54b1f7b7e4285f9c38fd3bba4ead425ad876a8bc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0e5e34a7d3cb5f524a0a54b1f7b7e4285f9c38fd3bba4ead425ad876a8bc23->enter($__internal_5b0e5e34a7d3cb5f524a0a54b1f7b7e4285f9c38fd3bba4ead425ad876a8bc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5b0e5e34a7d3cb5f524a0a54b1f7b7e4285f9c38fd3bba4ead425ad876a8bc23->leave($__internal_5b0e5e34a7d3cb5f524a0a54b1f7b7e4285f9c38fd3bba4ead425ad876a8bc23_prof);

        
        $__internal_bdfb1c7b6a77460483ef387b5f034798e0890caf47c64c07e2516252a1a4ac13->leave($__internal_bdfb1c7b6a77460483ef387b5f034798e0890caf47c64c07e2516252a1a4ac13_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d91d9116f1ed67db9782d866645e7e59155cdcc93e3424b83dabbc111b0cdb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d91d9116f1ed67db9782d866645e7e59155cdcc93e3424b83dabbc111b0cdb7->enter($__internal_0d91d9116f1ed67db9782d866645e7e59155cdcc93e3424b83dabbc111b0cdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3f05dc132793fe46026056ddf2e66d442d83d22f38ebb53a5dbd5a2b0d3ad635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f05dc132793fe46026056ddf2e66d442d83d22f38ebb53a5dbd5a2b0d3ad635->enter($__internal_3f05dc132793fe46026056ddf2e66d442d83d22f38ebb53a5dbd5a2b0d3ad635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3f05dc132793fe46026056ddf2e66d442d83d22f38ebb53a5dbd5a2b0d3ad635->leave($__internal_3f05dc132793fe46026056ddf2e66d442d83d22f38ebb53a5dbd5a2b0d3ad635_prof);

        
        $__internal_0d91d9116f1ed67db9782d866645e7e59155cdcc93e3424b83dabbc111b0cdb7->leave($__internal_0d91d9116f1ed67db9782d866645e7e59155cdcc93e3424b83dabbc111b0cdb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fe1fb08dde00b930e2b1f6a5a1a9f10e17f657606022d6548490b3613aaeecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe1fb08dde00b930e2b1f6a5a1a9f10e17f657606022d6548490b3613aaeecd->enter($__internal_0fe1fb08dde00b930e2b1f6a5a1a9f10e17f657606022d6548490b3613aaeecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa99721e8e9c95ecd6012934017f44705fa95803f020e94ecb5804295d38384d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa99721e8e9c95ecd6012934017f44705fa95803f020e94ecb5804295d38384d->enter($__internal_aa99721e8e9c95ecd6012934017f44705fa95803f020e94ecb5804295d38384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa99721e8e9c95ecd6012934017f44705fa95803f020e94ecb5804295d38384d->leave($__internal_aa99721e8e9c95ecd6012934017f44705fa95803f020e94ecb5804295d38384d_prof);

        
        $__internal_0fe1fb08dde00b930e2b1f6a5a1a9f10e17f657606022d6548490b3613aaeecd->leave($__internal_0fe1fb08dde00b930e2b1f6a5a1a9f10e17f657606022d6548490b3613aaeecd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/home/xing/Desktop/workspace/symfony_doit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
