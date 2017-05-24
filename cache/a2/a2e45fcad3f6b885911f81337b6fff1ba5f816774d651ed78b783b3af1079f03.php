<?php

/* profile/view.html */
class __TwigTemplate_b91b822a3dd4d6b5a7df013917076a35e6da972b0875efbd82d0071eb7fa5df2 extends Twig_Template
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
        $this->loadTemplate("index.html", "profile/view.html", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <div class=\"row\"><h1>Profile</h1><div class=\"pull-right\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profile_edit"), "html", null, true);
        echo "\">Edit</a></div></div>
    <div class=\"row\">Name:";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["profile"] ?? null), "name", array(), "array"), "html", null, true);
        echo "</div>
    <div class=\"row\">Surname: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["profile"] ?? null), "surname", array(), "array"), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profile/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  31 => 4,  28 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile/view.html", "/home/html/sports/templates/profile/view.html");
    }
}
