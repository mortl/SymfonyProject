<?php

/* base.html.twig */
class __TwigTemplate_f0c572f08f9b3c6372394d78ddc850e35d2cbe53a2531c5f7f0a39b2f9c6f601 extends Twig_Template
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
        $__internal_6376c079b18985026c5d7af883aa7002057d3c60b0dc41f6bbc0543f82df0b82 = $this->env->getExtension("native_profiler");
        $__internal_6376c079b18985026c5d7af883aa7002057d3c60b0dc41f6bbc0543f82df0b82->enter($__internal_6376c079b18985026c5d7af883aa7002057d3c60b0dc41f6bbc0543f82df0b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_6376c079b18985026c5d7af883aa7002057d3c60b0dc41f6bbc0543f82df0b82->leave($__internal_6376c079b18985026c5d7af883aa7002057d3c60b0dc41f6bbc0543f82df0b82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86650f55a7f0456f7b58494653187f1ce7c75c8225a07cf325e7a0fdaca3378b = $this->env->getExtension("native_profiler");
        $__internal_86650f55a7f0456f7b58494653187f1ce7c75c8225a07cf325e7a0fdaca3378b->enter($__internal_86650f55a7f0456f7b58494653187f1ce7c75c8225a07cf325e7a0fdaca3378b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_86650f55a7f0456f7b58494653187f1ce7c75c8225a07cf325e7a0fdaca3378b->leave($__internal_86650f55a7f0456f7b58494653187f1ce7c75c8225a07cf325e7a0fdaca3378b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30f7dff54bb71d569f009953be6360d09f786492cbba5432782864109acdda59 = $this->env->getExtension("native_profiler");
        $__internal_30f7dff54bb71d569f009953be6360d09f786492cbba5432782864109acdda59->enter($__internal_30f7dff54bb71d569f009953be6360d09f786492cbba5432782864109acdda59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_30f7dff54bb71d569f009953be6360d09f786492cbba5432782864109acdda59->leave($__internal_30f7dff54bb71d569f009953be6360d09f786492cbba5432782864109acdda59_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f21ca5820e24d5a64609b8956e47b45848cde100e406ce318980d569f55efb6d = $this->env->getExtension("native_profiler");
        $__internal_f21ca5820e24d5a64609b8956e47b45848cde100e406ce318980d569f55efb6d->enter($__internal_f21ca5820e24d5a64609b8956e47b45848cde100e406ce318980d569f55efb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f21ca5820e24d5a64609b8956e47b45848cde100e406ce318980d569f55efb6d->leave($__internal_f21ca5820e24d5a64609b8956e47b45848cde100e406ce318980d569f55efb6d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1b25663036d0ac21d478bfd84e05c35e7ea7243c8b940d959295ca9b8a343e0 = $this->env->getExtension("native_profiler");
        $__internal_e1b25663036d0ac21d478bfd84e05c35e7ea7243c8b940d959295ca9b8a343e0->enter($__internal_e1b25663036d0ac21d478bfd84e05c35e7ea7243c8b940d959295ca9b8a343e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e1b25663036d0ac21d478bfd84e05c35e7ea7243c8b940d959295ca9b8a343e0->leave($__internal_e1b25663036d0ac21d478bfd84e05c35e7ea7243c8b940d959295ca9b8a343e0_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
