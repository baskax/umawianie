<?php

/* flash.html */
class __TwigTemplate_965ac096cced590d17bb9fee067c27ceb414354bfd79d40ec0d1186e0bf0dade extends Twig_Template
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
        echo "<div class=\"flash-container\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Knlv\Slim\Views\TwigMessages')->getMessages("danger"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 3
            echo "<div class=\"alert alert-error alert-dismissable fade in\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    <strong>Error!</strong> ";
            // line 5
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Knlv\Slim\Views\TwigMessages')->getMessages("info"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 10
            echo "<div class=\"alert alert-info alert-dismissable fade in\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    <strong>Info!</strong> ";
            // line 12
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Knlv\Slim\Views\TwigMessages')->getMessages("success"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 17
            echo "<div class=\"alert alert-success alert-dismissable fade in\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    <strong>Success!</strong> ";
            // line 19
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Knlv\Slim\Views\TwigMessages')->getMessages("warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 24
            echo "<div class=\"alert alert-warning alert-dismissable fade in\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    <strong>Warning!</strong> ";
            // line 26
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "flash.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  90 => 26,  86 => 24,  82 => 23,  79 => 22,  70 => 19,  66 => 17,  62 => 16,  59 => 15,  50 => 12,  46 => 10,  42 => 9,  39 => 8,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "flash.html", "/home/html/sports/templates/flash.html");
    }
}
