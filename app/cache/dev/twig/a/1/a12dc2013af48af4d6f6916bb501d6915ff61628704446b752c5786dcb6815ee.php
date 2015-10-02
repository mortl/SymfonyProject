<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_0e05188b04c37919d08921f7c9c3aba73c49f4a50af58347487739c9ea151556 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5b62314e5c8a15a5c01f2b22575a10e2fb8e9825853ca300efc9d1d8e2bf51f = $this->env->getExtension("native_profiler");
        $__internal_d5b62314e5c8a15a5c01f2b22575a10e2fb8e9825853ca300efc9d1d8e2bf51f->enter($__internal_d5b62314e5c8a15a5c01f2b22575a10e2fb8e9825853ca300efc9d1d8e2bf51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5b62314e5c8a15a5c01f2b22575a10e2fb8e9825853ca300efc9d1d8e2bf51f->leave($__internal_d5b62314e5c8a15a5c01f2b22575a10e2fb8e9825853ca300efc9d1d8e2bf51f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2410a26f631ae8fbaceaa44b4a64947e31034f6dbf56fae9c0c05c665118b719 = $this->env->getExtension("native_profiler");
        $__internal_2410a26f631ae8fbaceaa44b4a64947e31034f6dbf56fae9c0c05c665118b719->enter($__internal_2410a26f631ae8fbaceaa44b4a64947e31034f6dbf56fae9c0c05c665118b719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2410a26f631ae8fbaceaa44b4a64947e31034f6dbf56fae9c0c05c665118b719->leave($__internal_2410a26f631ae8fbaceaa44b4a64947e31034f6dbf56fae9c0c05c665118b719_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_12c88dcc0499bf7500edcd992a002c749cb6a47e4a152fed6495b29aaca09b91 = $this->env->getExtension("native_profiler");
        $__internal_12c88dcc0499bf7500edcd992a002c749cb6a47e4a152fed6495b29aaca09b91->enter($__internal_12c88dcc0499bf7500edcd992a002c749cb6a47e4a152fed6495b29aaca09b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_12c88dcc0499bf7500edcd992a002c749cb6a47e4a152fed6495b29aaca09b91->leave($__internal_12c88dcc0499bf7500edcd992a002c749cb6a47e4a152fed6495b29aaca09b91_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e17c9d1ba847e537c089ac4cf0f05ce88a4ed708d9e4bd7d26c623340f24238 = $this->env->getExtension("native_profiler");
        $__internal_4e17c9d1ba847e537c089ac4cf0f05ce88a4ed708d9e4bd7d26c623340f24238->enter($__internal_4e17c9d1ba847e537c089ac4cf0f05ce88a4ed708d9e4bd7d26c623340f24238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_4e17c9d1ba847e537c089ac4cf0f05ce88a4ed708d9e4bd7d26c623340f24238->leave($__internal_4e17c9d1ba847e537c089ac4cf0f05ce88a4ed708d9e4bd7d26c623340f24238_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8432a25936a2bd2f78b8f432302c395de70426fbcaca9c9af37e66449a2023d = $this->env->getExtension("native_profiler");
        $__internal_b8432a25936a2bd2f78b8f432302c395de70426fbcaca9c9af37e66449a2023d->enter($__internal_b8432a25936a2bd2f78b8f432302c395de70426fbcaca9c9af37e66449a2023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b8432a25936a2bd2f78b8f432302c395de70426fbcaca9c9af37e66449a2023d->leave($__internal_b8432a25936a2bd2f78b8f432302c395de70426fbcaca9c9af37e66449a2023d_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
