<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3a34aee5513b6bc55cfdf2f6a5051340b708557d1c69cd78f1c93a5356bfe54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2167e585e3820fdf75082136986c8f52502abe9cf99ef5e2be3585b21a792059 = $this->env->getExtension("native_profiler");
        $__internal_2167e585e3820fdf75082136986c8f52502abe9cf99ef5e2be3585b21a792059->enter($__internal_2167e585e3820fdf75082136986c8f52502abe9cf99ef5e2be3585b21a792059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2167e585e3820fdf75082136986c8f52502abe9cf99ef5e2be3585b21a792059->leave($__internal_2167e585e3820fdf75082136986c8f52502abe9cf99ef5e2be3585b21a792059_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c750005da23ff92f715950d974b969754b866d107bf2fa034086169fe13e200 = $this->env->getExtension("native_profiler");
        $__internal_5c750005da23ff92f715950d974b969754b866d107bf2fa034086169fe13e200->enter($__internal_5c750005da23ff92f715950d974b969754b866d107bf2fa034086169fe13e200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c750005da23ff92f715950d974b969754b866d107bf2fa034086169fe13e200->leave($__internal_5c750005da23ff92f715950d974b969754b866d107bf2fa034086169fe13e200_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_23c60927b7eaa104f6da0ec98b0d08695081af9070863eccadaff433d41b4095 = $this->env->getExtension("native_profiler");
        $__internal_23c60927b7eaa104f6da0ec98b0d08695081af9070863eccadaff433d41b4095->enter($__internal_23c60927b7eaa104f6da0ec98b0d08695081af9070863eccadaff433d41b4095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_23c60927b7eaa104f6da0ec98b0d08695081af9070863eccadaff433d41b4095->leave($__internal_23c60927b7eaa104f6da0ec98b0d08695081af9070863eccadaff433d41b4095_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d698dadf1e96cb6e2c557509890f4c1d72ff579fdd91baa0575a5446e0022eff = $this->env->getExtension("native_profiler");
        $__internal_d698dadf1e96cb6e2c557509890f4c1d72ff579fdd91baa0575a5446e0022eff->enter($__internal_d698dadf1e96cb6e2c557509890f4c1d72ff579fdd91baa0575a5446e0022eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d698dadf1e96cb6e2c557509890f4c1d72ff579fdd91baa0575a5446e0022eff->leave($__internal_d698dadf1e96cb6e2c557509890f4c1d72ff579fdd91baa0575a5446e0022eff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
