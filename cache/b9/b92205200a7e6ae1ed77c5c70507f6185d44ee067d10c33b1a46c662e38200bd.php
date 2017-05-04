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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Umawianie sie na sport</title>
    <script src=\"js/jquery-3.2.1.min.js\"></script>
    <script src=\"js/bootstrap.js\"></script>
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap-theme.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    ";
        // line 11
        $this->displayBlock('scripts', $context, $blocks);
        // line 12
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
                <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
        echo "\">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

";
        // line 34
        $this->loadTemplate("flash.html", "layout.html", 34)->display($context);
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "</body>
</html>";
    }

    // line 11
    public function block_scripts($context, array $blocks = array())
    {
    }

    // line 35
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
        return array (  76 => 35,  71 => 11,  66 => 37,  64 => 35,  62 => 34,  53 => 28,  35 => 12,  33 => 11,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "/home/html/sports/templates/layout.html");
    }
}
