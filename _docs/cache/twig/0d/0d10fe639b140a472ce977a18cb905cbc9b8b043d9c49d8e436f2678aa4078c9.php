<?php

/* index.twig */

class __TwigTemplate_07d2ba539caf751c03a2da8c0b67e1fe7ba59d5d9e5c4c15bc2bfddbd460fa82 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
        ];
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if has_namespaces %}
    {% set extension = 'namespaces.twig' %}
{% else %}
    {% set extension = 'classes.twig' %}
{% endif %}

{% extends extension %}

{% block body_class 'index' %}
", "index.twig", "C:\\xampp\\htdocs\\sami_document_generator\\Sami\\Resources\\themes\\default\\index.twig");
    }

    public function block_body_class($context, array $blocks = [])
    {
        echo "index";
    }

    // line 9

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [40 => 9, 36 => 7, 33 => 4, 30 => 2, 28 => 1, 22 => 7,];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () {
            throw new Twig_Error_Runtime('Variable "extension" does not exist.', 7, $this->source);
        })()), "index.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((isset($context["has_namespaces"]) || array_key_exists("has_namespaces", $context) ? $context["has_namespaces"] : (function () {
            throw new Twig_Error_Runtime('Variable "has_namespaces" does not exist.', 1, $this->source);
        })())) {
            // line 2
            $context["extension"] = "namespaces.twig";
        } else {
            // line 4
            $context["extension"] = "classes.twig";
        }
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }
}
