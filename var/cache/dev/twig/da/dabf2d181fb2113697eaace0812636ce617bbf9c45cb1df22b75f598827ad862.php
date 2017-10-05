<?php

/* default/index.html.twig */
class __TwigTemplate_e7dd53a1d59c18ca9afe194e1bc787facc3052bd1f139ee8df3eac6ed5269f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ada0fdbb60e4a314bd7800edcdfb857afd863a4b2cabc641575dce2ef83a34aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada0fdbb60e4a314bd7800edcdfb857afd863a4b2cabc641575dce2ef83a34aa->enter($__internal_ada0fdbb60e4a314bd7800edcdfb857afd863a4b2cabc641575dce2ef83a34aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_fafa964fc9989191063565fdbae9ae820560d4f33a3262886d0c914878f33520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafa964fc9989191063565fdbae9ae820560d4f33a3262886d0c914878f33520->enter($__internal_fafa964fc9989191063565fdbae9ae820560d4f33a3262886d0c914878f33520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada0fdbb60e4a314bd7800edcdfb857afd863a4b2cabc641575dce2ef83a34aa->leave($__internal_ada0fdbb60e4a314bd7800edcdfb857afd863a4b2cabc641575dce2ef83a34aa_prof);

        
        $__internal_fafa964fc9989191063565fdbae9ae820560d4f33a3262886d0c914878f33520->leave($__internal_fafa964fc9989191063565fdbae9ae820560d4f33a3262886d0c914878f33520_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2716c6261ae43546748dcce7f623174fc2e9782582b3be2b0f022cca58d60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2716c6261ae43546748dcce7f623174fc2e9782582b3be2b0f022cca58d60b->enter($__internal_1b2716c6261ae43546748dcce7f623174fc2e9782582b3be2b0f022cca58d60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0802eb46ef9cb14cf506ff76beb1f639cbe8ed5e69a9373f44f1707fd17293d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0802eb46ef9cb14cf506ff76beb1f639cbe8ed5e69a9373f44f1707fd17293d3->enter($__internal_0802eb46ef9cb14cf506ff76beb1f639cbe8ed5e69a9373f44f1707fd17293d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h3>hello</h3>

";
        
        $__internal_0802eb46ef9cb14cf506ff76beb1f639cbe8ed5e69a9373f44f1707fd17293d3->leave($__internal_0802eb46ef9cb14cf506ff76beb1f639cbe8ed5e69a9373f44f1707fd17293d3_prof);

        
        $__internal_1b2716c6261ae43546748dcce7f623174fc2e9782582b3be2b0f022cca58d60b->leave($__internal_1b2716c6261ae43546748dcce7f623174fc2e9782582b3be2b0f022cca58d60b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}

  <h3>hello</h3>

{% endblock %}", "default/index.html.twig", "/home/xing/Desktop/workspace/symfony_doit/app/Resources/views/default/index.html.twig");
    }
}
