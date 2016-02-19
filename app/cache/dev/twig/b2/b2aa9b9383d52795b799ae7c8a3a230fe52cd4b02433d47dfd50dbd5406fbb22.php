<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bd6d29d336937cf11df8d78a4e01e46fa709bb0163e58f0220d23f0b688a7099 extends Twig_Template
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
        $__internal_5c1690245527e0a79634d8902f0527d00b84b101f5dda67e61ede7b5aa4e5b20 = $this->env->getExtension("native_profiler");
        $__internal_5c1690245527e0a79634d8902f0527d00b84b101f5dda67e61ede7b5aa4e5b20->enter($__internal_5c1690245527e0a79634d8902f0527d00b84b101f5dda67e61ede7b5aa4e5b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1690245527e0a79634d8902f0527d00b84b101f5dda67e61ede7b5aa4e5b20->leave($__internal_5c1690245527e0a79634d8902f0527d00b84b101f5dda67e61ede7b5aa4e5b20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3871cd999944d4acc80bcead3c85edea9be37806adc85c3a0b93ee722a6f6fb2 = $this->env->getExtension("native_profiler");
        $__internal_3871cd999944d4acc80bcead3c85edea9be37806adc85c3a0b93ee722a6f6fb2->enter($__internal_3871cd999944d4acc80bcead3c85edea9be37806adc85c3a0b93ee722a6f6fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3871cd999944d4acc80bcead3c85edea9be37806adc85c3a0b93ee722a6f6fb2->leave($__internal_3871cd999944d4acc80bcead3c85edea9be37806adc85c3a0b93ee722a6f6fb2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_994574933984264c125cade7053538453ca2e567431e92f8f2de85ed5c634b1d = $this->env->getExtension("native_profiler");
        $__internal_994574933984264c125cade7053538453ca2e567431e92f8f2de85ed5c634b1d->enter($__internal_994574933984264c125cade7053538453ca2e567431e92f8f2de85ed5c634b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_994574933984264c125cade7053538453ca2e567431e92f8f2de85ed5c634b1d->leave($__internal_994574933984264c125cade7053538453ca2e567431e92f8f2de85ed5c634b1d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c39e5009e257a51045298a95857451cb5e0ccd3bfba9adda0c2163189e9dc39 = $this->env->getExtension("native_profiler");
        $__internal_7c39e5009e257a51045298a95857451cb5e0ccd3bfba9adda0c2163189e9dc39->enter($__internal_7c39e5009e257a51045298a95857451cb5e0ccd3bfba9adda0c2163189e9dc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7c39e5009e257a51045298a95857451cb5e0ccd3bfba9adda0c2163189e9dc39->leave($__internal_7c39e5009e257a51045298a95857451cb5e0ccd3bfba9adda0c2163189e9dc39_prof);

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
