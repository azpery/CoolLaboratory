<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_5e66f571c0972533af9b6f22a9e1c8cbb6088a6412eb8e7cde4eaa5dc14fa123 extends Twig_Template
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
        $__internal_bcaa26dbfe64cc9fc1091f556506be4d0b0c1e55b73e84dbd0c73177ebf35e42 = $this->env->getExtension("native_profiler");
        $__internal_bcaa26dbfe64cc9fc1091f556506be4d0b0c1e55b73e84dbd0c73177ebf35e42->enter($__internal_bcaa26dbfe64cc9fc1091f556506be4d0b0c1e55b73e84dbd0c73177ebf35e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_bcaa26dbfe64cc9fc1091f556506be4d0b0c1e55b73e84dbd0c73177ebf35e42->leave($__internal_bcaa26dbfe64cc9fc1091f556506be4d0b0c1e55b73e84dbd0c73177ebf35e42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
