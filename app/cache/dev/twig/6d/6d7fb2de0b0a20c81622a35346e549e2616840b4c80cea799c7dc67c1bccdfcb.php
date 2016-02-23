<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_965e73699ee5da1ef0e2a8af7a92a857fcf2ffe24f59a53fb2b3c41d7eed7355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78cd92f31e9abbbba71a0566f075302872dd09352d6792f14233595c58ceea10 = $this->env->getExtension("native_profiler");
        $__internal_78cd92f31e9abbbba71a0566f075302872dd09352d6792f14233595c58ceea10->enter($__internal_78cd92f31e9abbbba71a0566f075302872dd09352d6792f14233595c58ceea10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_78cd92f31e9abbbba71a0566f075302872dd09352d6792f14233595c58ceea10->leave($__internal_78cd92f31e9abbbba71a0566f075302872dd09352d6792f14233595c58ceea10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
