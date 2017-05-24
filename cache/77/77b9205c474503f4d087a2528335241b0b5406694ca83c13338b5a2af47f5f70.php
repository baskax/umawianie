<?php

/* events/list.html */
class __TwigTemplate_b7c5671193f2dd74c2ca2f62a730cb744bcdf7a0cb35313fbd599a38eb98d01d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("index.html", "events/list.html", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <div class=\"row\"><h1>Events list</h1></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "events/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "events/list.html", "/home/html/sports/templates/events/list.html");
    }
}
