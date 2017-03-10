<?php

/* index.html */
class __TwigTemplate_0b9898ffec90b2c06995947cbab64e53f4d785b9140638c81025e4d3ca5fa4eb extends Twig_Template
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
        echo "
<br />
ls";
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
        return new Twig_Source("hello world
<br />
{{ text }}
<br />
ls", "index.html", "/home/data/wwwroot/NewYeeSlim/yeeslim/views/templates/index.html");
    }
}
