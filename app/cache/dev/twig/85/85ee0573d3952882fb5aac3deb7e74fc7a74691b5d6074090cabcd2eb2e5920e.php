<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8f8870b6d4a8fe85047c882b3593b2e6b6373d0c9ecdad1556f3d4abf04802dd extends Twig_Template
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
        $__internal_3a1498d6546fd64e3141a74f33bf5b9e01e549a34078302cdb675192011581ec = $this->env->getExtension("native_profiler");
        $__internal_3a1498d6546fd64e3141a74f33bf5b9e01e549a34078302cdb675192011581ec->enter($__internal_3a1498d6546fd64e3141a74f33bf5b9e01e549a34078302cdb675192011581ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a1498d6546fd64e3141a74f33bf5b9e01e549a34078302cdb675192011581ec->leave($__internal_3a1498d6546fd64e3141a74f33bf5b9e01e549a34078302cdb675192011581ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00e18330cb51d508b1183b90a479b61ed971b5437ec78e3cbedc25e100d97e71 = $this->env->getExtension("native_profiler");
        $__internal_00e18330cb51d508b1183b90a479b61ed971b5437ec78e3cbedc25e100d97e71->enter($__internal_00e18330cb51d508b1183b90a479b61ed971b5437ec78e3cbedc25e100d97e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_00e18330cb51d508b1183b90a479b61ed971b5437ec78e3cbedc25e100d97e71->leave($__internal_00e18330cb51d508b1183b90a479b61ed971b5437ec78e3cbedc25e100d97e71_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75e8daef2446435f8e7ddc32168e192e0b264db2b06fb511f07a661a3ea82f87 = $this->env->getExtension("native_profiler");
        $__internal_75e8daef2446435f8e7ddc32168e192e0b264db2b06fb511f07a661a3ea82f87->enter($__internal_75e8daef2446435f8e7ddc32168e192e0b264db2b06fb511f07a661a3ea82f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_75e8daef2446435f8e7ddc32168e192e0b264db2b06fb511f07a661a3ea82f87->leave($__internal_75e8daef2446435f8e7ddc32168e192e0b264db2b06fb511f07a661a3ea82f87_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b4adc583da2b5e7b93b655d741e4f6cdff05990db096778a2b3b27735f78bda = $this->env->getExtension("native_profiler");
        $__internal_1b4adc583da2b5e7b93b655d741e4f6cdff05990db096778a2b3b27735f78bda->enter($__internal_1b4adc583da2b5e7b93b655d741e4f6cdff05990db096778a2b3b27735f78bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1b4adc583da2b5e7b93b655d741e4f6cdff05990db096778a2b3b27735f78bda->leave($__internal_1b4adc583da2b5e7b93b655d741e4f6cdff05990db096778a2b3b27735f78bda_prof);

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
