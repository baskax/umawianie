<?php

/* menu.html */
class __TwigTemplate_bde8e43073da6edbf5358aa7c011945bc98e3bf2ce0a668b14517ceda26661fc extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-static-top\">
    <div class=\"container\">

        <div id=\"navbar-inner\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profile_view"), "html", null, true);
        echo "\">Profile</a></li>
                <li class=\"dropdown\">
                    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("events_list"), "html", null, true);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Events<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Add</a></li>
                        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("events_list"), "html", null, true);
        echo "\">List</a></li>
                        <li><a href=\"#\">Manage</a></li>
                        <li><a href=\"#\">History</a></li>
                    </ul>
                </li>

                <li><a href=\"#contact\">Friends</a></li>

                <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
        echo "\">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  37 => 11,  31 => 8,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu.html", "/home/html/sports/templates/menu.html");
    }
}
