<?php

/* index.html */
class __TwigTemplate_c24bb3518fe0a2402c4035a438c61121e8a3d2e167eca3ba4a9e744ae97dbe22 extends Twig_Template
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
