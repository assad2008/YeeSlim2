<?php

/* index.html */
class __TwigTemplate_122a990b778cb51f2d1a0364af2f8f464294bb5d9c9a3bfe0dcc10a6e7cd58ca extends Twig_Template
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
        // line 1
        echo "hello world
<br />
";
        // line 3
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/home/data/wwwroot/NewYeeSlim/yeeslim/views/templates/index.html");
    }
}
