<?php

/* layout.html */
class __TwigTemplate_7e823c8df94080268b5611b32d9fd7b42eaabb00f71e7747437ed6ada788a81e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"initial-scale=1.0\">
    <meta charset=\"utf-8\">
    <title>Umawianie sie na sport</title>
    <script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
    <script src=\"../../../js/jquery-3.2.1.min.js\"></script>
    <script src=\"../../../js/bootstrap.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"../../../css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"../../../css/bootstrap-theme.css\">
    <link rel=\"stylesheet\" href=\"../../../css/style.css\">
    ";
        // line 15
        $this->displayBlock('scripts', $context, $blocks);
        // line 16
        echo "</head>
<body>
<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Umawianie sie na sport</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"/\">Home</a></li>
            </ul>
        </div>
    </div>
</nav>
";
        // line 36
        $this->loadTemplate("menu.html", "layout.html", 36)->display($context);
        // line 37
        $this->loadTemplate("flash.html", "layout.html", 37)->display($context);
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "</body>
</html>
";
    }

    // line 15
    public function block_scripts($context, array $blocks = array())
    {
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  73 => 15,  67 => 40,  65 => 38,  63 => 37,  61 => 36,  39 => 16,  37 => 15,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "/home/html/sports/templates/layout.html");
    }
}
