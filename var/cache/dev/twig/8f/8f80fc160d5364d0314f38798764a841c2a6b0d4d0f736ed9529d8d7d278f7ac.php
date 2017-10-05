<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_de8fddf395242fda76f2f2d562cc79728caf01607e7e1d41b2274258c3da0454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8fddf395242fda76f2f2d562cc79728caf01607e7e1d41b2274258c3da0454->enter($__internal_de8fddf395242fda76f2f2d562cc79728caf01607e7e1d41b2274258c3da0454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a1fe613915dc7700a361704f3049238ae6360bcab324ee761e0f503f0415375b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fe613915dc7700a361704f3049238ae6360bcab324ee761e0f503f0415375b->enter($__internal_a1fe613915dc7700a361704f3049238ae6360bcab324ee761e0f503f0415375b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8fddf395242fda76f2f2d562cc79728caf01607e7e1d41b2274258c3da0454->leave($__internal_de8fddf395242fda76f2f2d562cc79728caf01607e7e1d41b2274258c3da0454_prof);

        
        $__internal_a1fe613915dc7700a361704f3049238ae6360bcab324ee761e0f503f0415375b->leave($__internal_a1fe613915dc7700a361704f3049238ae6360bcab324ee761e0f503f0415375b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c775693555e127c6ae324cf44f4e934356c7489f6ac7ecf478f6d4dd13940f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c775693555e127c6ae324cf44f4e934356c7489f6ac7ecf478f6d4dd13940f15->enter($__internal_c775693555e127c6ae324cf44f4e934356c7489f6ac7ecf478f6d4dd13940f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf2a7ecb48ff337107890a0b888bd00d3462ac7af76f89ce49ce0ffd66baf63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2a7ecb48ff337107890a0b888bd00d3462ac7af76f89ce49ce0ffd66baf63b->enter($__internal_cf2a7ecb48ff337107890a0b888bd00d3462ac7af76f89ce49ce0ffd66baf63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cf2a7ecb48ff337107890a0b888bd00d3462ac7af76f89ce49ce0ffd66baf63b->leave($__internal_cf2a7ecb48ff337107890a0b888bd00d3462ac7af76f89ce49ce0ffd66baf63b_prof);

        
        $__internal_c775693555e127c6ae324cf44f4e934356c7489f6ac7ecf478f6d4dd13940f15->leave($__internal_c775693555e127c6ae324cf44f4e934356c7489f6ac7ecf478f6d4dd13940f15_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4efa310cd870f909caeb09e8a48bc1455d6a34aba73286ffd88eb90905616fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efa310cd870f909caeb09e8a48bc1455d6a34aba73286ffd88eb90905616fc4->enter($__internal_4efa310cd870f909caeb09e8a48bc1455d6a34aba73286ffd88eb90905616fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cf97c29aac7822e3493a9cf655011ffb5507e4e1683fecda2a1b7dc75d8d026d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf97c29aac7822e3493a9cf655011ffb5507e4e1683fecda2a1b7dc75d8d026d->enter($__internal_cf97c29aac7822e3493a9cf655011ffb5507e4e1683fecda2a1b7dc75d8d026d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cf97c29aac7822e3493a9cf655011ffb5507e4e1683fecda2a1b7dc75d8d026d->leave($__internal_cf97c29aac7822e3493a9cf655011ffb5507e4e1683fecda2a1b7dc75d8d026d_prof);

        
        $__internal_4efa310cd870f909caeb09e8a48bc1455d6a34aba73286ffd88eb90905616fc4->leave($__internal_4efa310cd870f909caeb09e8a48bc1455d6a34aba73286ffd88eb90905616fc4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6c397fb1ed3c6e04b09dd4e63a4fc99b634cb6df613e6a67a233037012cc747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c397fb1ed3c6e04b09dd4e63a4fc99b634cb6df613e6a67a233037012cc747->enter($__internal_f6c397fb1ed3c6e04b09dd4e63a4fc99b634cb6df613e6a67a233037012cc747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf4978048923bc126e689222964718b10630a39b207a300b673a78194c4500e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4978048923bc126e689222964718b10630a39b207a300b673a78194c4500e7->enter($__internal_bf4978048923bc126e689222964718b10630a39b207a300b673a78194c4500e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bf4978048923bc126e689222964718b10630a39b207a300b673a78194c4500e7->leave($__internal_bf4978048923bc126e689222964718b10630a39b207a300b673a78194c4500e7_prof);

        
        $__internal_f6c397fb1ed3c6e04b09dd4e63a4fc99b634cb6df613e6a67a233037012cc747->leave($__internal_f6c397fb1ed3c6e04b09dd4e63a4fc99b634cb6df613e6a67a233037012cc747_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/xing/Desktop/workspace/symfony_doit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
