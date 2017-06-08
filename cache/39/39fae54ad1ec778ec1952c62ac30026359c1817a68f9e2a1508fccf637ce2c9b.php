<?php

/* profile/edit.html */
class __TwigTemplate_1f9424d38efb0c013170f32ad922ef8e5aedbe98bb3d7843a4df24384a5e32e6 extends Twig_Template
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
        $this->loadTemplate("layout.html", "profile/edit.html", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <div class=\"row\"><h1>Profile edit</h1><div class=\"pull-right\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profile_view"), "html", null, true);
        echo "\">Back</a></div></div>
    <form class=\"form\" method=\"POST\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profile_edit_post"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
        <input id=\"name\" type=\"text\" name=\"name\" />
            <label for=\"name\">Name</label></div>
        <div class=\"form-group\">
        <input id=\"surname\" type=\"text\" name=\"surname\" />
            <label for=\"surname\">Surname</label></div>
        <button type=\"submit\" class=\"btn btn-primary\">Edit</button>
    </form>

</div>
";
    }

    public function getTemplateName()
    {
        return "profile/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  28 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile/edit.html", "/home/html/sports/templates/profile/edit.html");
    }
}
