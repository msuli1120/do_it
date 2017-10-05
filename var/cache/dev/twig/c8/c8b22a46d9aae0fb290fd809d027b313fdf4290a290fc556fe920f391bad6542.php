<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
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
        $__internal_962eb278c2fa5d5799c65cc3d8b2b44d2a5be79f7cdf7567ddc64390ef901882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962eb278c2fa5d5799c65cc3d8b2b44d2a5be79f7cdf7567ddc64390ef901882->enter($__internal_962eb278c2fa5d5799c65cc3d8b2b44d2a5be79f7cdf7567ddc64390ef901882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_21686623272c61c1082604acb7428a9658058e652f17f3310df7798cdd874357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21686623272c61c1082604acb7428a9658058e652f17f3310df7798cdd874357->enter($__internal_21686623272c61c1082604acb7428a9658058e652f17f3310df7798cdd874357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/global.css"), "html", null, true);
        echo "\">
  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  <div class=\"container\" id=\"root\">
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "  </div>

";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
  integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
  crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_962eb278c2fa5d5799c65cc3d8b2b44d2a5be79f7cdf7567ddc64390ef901882->leave($__internal_962eb278c2fa5d5799c65cc3d8b2b44d2a5be79f7cdf7567ddc64390ef901882_prof);

        
        $__internal_21686623272c61c1082604acb7428a9658058e652f17f3310df7798cdd874357->leave($__internal_21686623272c61c1082604acb7428a9658058e652f17f3310df7798cdd874357_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac1f28232fad12fe33a90de122c774dc02a2375cacbe218473d2c6fabf95a675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1f28232fad12fe33a90de122c774dc02a2375cacbe218473d2c6fabf95a675->enter($__internal_ac1f28232fad12fe33a90de122c774dc02a2375cacbe218473d2c6fabf95a675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7402de0612cda519ed0b172053ffb2a63580cbba222f1b32989e6548e07902f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7402de0612cda519ed0b172053ffb2a63580cbba222f1b32989e6548e07902f1->enter($__internal_7402de0612cda519ed0b172053ffb2a63580cbba222f1b32989e6548e07902f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7402de0612cda519ed0b172053ffb2a63580cbba222f1b32989e6548e07902f1->leave($__internal_7402de0612cda519ed0b172053ffb2a63580cbba222f1b32989e6548e07902f1_prof);

        
        $__internal_ac1f28232fad12fe33a90de122c774dc02a2375cacbe218473d2c6fabf95a675->leave($__internal_ac1f28232fad12fe33a90de122c774dc02a2375cacbe218473d2c6fabf95a675_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e76b798277474d492eefd4767d9355d718e601678dd97aa0c656328ff59e218a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76b798277474d492eefd4767d9355d718e601678dd97aa0c656328ff59e218a->enter($__internal_e76b798277474d492eefd4767d9355d718e601678dd97aa0c656328ff59e218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a8a7533dfa7ed93ab5953d26ae94db37ea3fd2eed52b566a652ac53e535c9828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a7533dfa7ed93ab5953d26ae94db37ea3fd2eed52b566a652ac53e535c9828->enter($__internal_a8a7533dfa7ed93ab5953d26ae94db37ea3fd2eed52b566a652ac53e535c9828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a8a7533dfa7ed93ab5953d26ae94db37ea3fd2eed52b566a652ac53e535c9828->leave($__internal_a8a7533dfa7ed93ab5953d26ae94db37ea3fd2eed52b566a652ac53e535c9828_prof);

        
        $__internal_e76b798277474d492eefd4767d9355d718e601678dd97aa0c656328ff59e218a->leave($__internal_e76b798277474d492eefd4767d9355d718e601678dd97aa0c656328ff59e218a_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec930a78a30a0d01f10d9706f7270c208422dac711aef4f635a17eb069c5f232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec930a78a30a0d01f10d9706f7270c208422dac711aef4f635a17eb069c5f232->enter($__internal_ec930a78a30a0d01f10d9706f7270c208422dac711aef4f635a17eb069c5f232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58c43ec96334cc40d4001914b42756f3afdd092686c30ddea6478ada71227657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c43ec96334cc40d4001914b42756f3afdd092686c30ddea6478ada71227657->enter($__internal_58c43ec96334cc40d4001914b42756f3afdd092686c30ddea6478ada71227657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58c43ec96334cc40d4001914b42756f3afdd092686c30ddea6478ada71227657->leave($__internal_58c43ec96334cc40d4001914b42756f3afdd092686c30ddea6478ada71227657_prof);

        
        $__internal_ec930a78a30a0d01f10d9706f7270c208422dac711aef4f635a17eb069c5f232->leave($__internal_ec930a78a30a0d01f10d9706f7270c208422dac711aef4f635a17eb069c5f232_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a000fac14843ddc1c1abad0154925c3abe4fed5ab5104003da7b60361e3fe53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a000fac14843ddc1c1abad0154925c3abe4fed5ab5104003da7b60361e3fe53->enter($__internal_4a000fac14843ddc1c1abad0154925c3abe4fed5ab5104003da7b60361e3fe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ee5aaae7d514fdf07de8262b6d3527c386ee2cf0ea5bac0e6ecd549282056e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee5aaae7d514fdf07de8262b6d3527c386ee2cf0ea5bac0e6ecd549282056e9->enter($__internal_8ee5aaae7d514fdf07de8262b6d3527c386ee2cf0ea5bac0e6ecd549282056e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8ee5aaae7d514fdf07de8262b6d3527c386ee2cf0ea5bac0e6ecd549282056e9->leave($__internal_8ee5aaae7d514fdf07de8262b6d3527c386ee2cf0ea5bac0e6ecd549282056e9_prof);

        
        $__internal_4a000fac14843ddc1c1abad0154925c3abe4fed5ab5104003da7b60361e3fe53->leave($__internal_4a000fac14843ddc1c1abad0154925c3abe4fed5ab5104003da7b60361e3fe53_prof);

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
        return array (  134 => 16,  117 => 13,  100 => 8,  82 => 7,  68 => 21,  62 => 17,  60 => 16,  56 => 14,  54 => 13,  46 => 9,  44 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"{{ asset('build/global.css') }}\">
  <title>{% block title %}Welcome!{% endblock %}</title>
  {% block stylesheets %}{% endblock %}
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
  <div class=\"container\" id=\"root\">
    {% block body %}{% endblock %}
  </div>

{% block javascripts %}{% endblock %}
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
  integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
  crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('build/app.js') }}\"></script>
</body>
</html>
", "base.html.twig", "/home/xing/Desktop/workspace/symfony_doit/app/Resources/views/base.html.twig");
    }
}
