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
        $__internal_0c50ab63dda557bd473bb18d0f8e738cf9177cd9239beb5a3620324bbd71249c = $this->env->getExtension("native_profiler");
        $__internal_0c50ab63dda557bd473bb18d0f8e738cf9177cd9239beb5a3620324bbd71249c->enter($__internal_0c50ab63dda557bd473bb18d0f8e738cf9177cd9239beb5a3620324bbd71249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c50ab63dda557bd473bb18d0f8e738cf9177cd9239beb5a3620324bbd71249c->leave($__internal_0c50ab63dda557bd473bb18d0f8e738cf9177cd9239beb5a3620324bbd71249c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_777c3fbf00030c2ffd640a55fa8e5bd02e0916014000406f47f5d9a5985194ba = $this->env->getExtension("native_profiler");
        $__internal_777c3fbf00030c2ffd640a55fa8e5bd02e0916014000406f47f5d9a5985194ba->enter($__internal_777c3fbf00030c2ffd640a55fa8e5bd02e0916014000406f47f5d9a5985194ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_777c3fbf00030c2ffd640a55fa8e5bd02e0916014000406f47f5d9a5985194ba->leave($__internal_777c3fbf00030c2ffd640a55fa8e5bd02e0916014000406f47f5d9a5985194ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7df8c593f6b0a1ca09cae717a02db712a4b142fa6f3fd1acb0dc16f7a5ff49e7 = $this->env->getExtension("native_profiler");
        $__internal_7df8c593f6b0a1ca09cae717a02db712a4b142fa6f3fd1acb0dc16f7a5ff49e7->enter($__internal_7df8c593f6b0a1ca09cae717a02db712a4b142fa6f3fd1acb0dc16f7a5ff49e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7df8c593f6b0a1ca09cae717a02db712a4b142fa6f3fd1acb0dc16f7a5ff49e7->leave($__internal_7df8c593f6b0a1ca09cae717a02db712a4b142fa6f3fd1acb0dc16f7a5ff49e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bebcd8acdb429dab164e11bd9766ccc62c75a56a4ef86842328acc1497b4bb9e = $this->env->getExtension("native_profiler");
        $__internal_bebcd8acdb429dab164e11bd9766ccc62c75a56a4ef86842328acc1497b4bb9e->enter($__internal_bebcd8acdb429dab164e11bd9766ccc62c75a56a4ef86842328acc1497b4bb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bebcd8acdb429dab164e11bd9766ccc62c75a56a4ef86842328acc1497b4bb9e->leave($__internal_bebcd8acdb429dab164e11bd9766ccc62c75a56a4ef86842328acc1497b4bb9e_prof);

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
