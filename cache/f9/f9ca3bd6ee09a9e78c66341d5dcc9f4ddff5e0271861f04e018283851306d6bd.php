<?php

/* login/login.html */
class __TwigTemplate_44b49aa789dce92cbdbd2db804e73a3ea32e355e277fe580b3da7dc52bc8e530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "login/login.html", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"css/login/login.css\">
<script src=\"js/login/login.js\"></script>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-login\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <a href=\"#\" class=\"active\" id=\"login-form-link\">Login</a>
                        </div>
                        <div class=\"col-xs-6\">
                            <a href=\"#\" id=\"register-form-link\">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form id=\"login-form\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
        echo "\" method=\"post\" role=\"form\" style=\"display: block;\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"username\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" value=\"\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">
                                </div>
                                <div class=\"form-group text-center\">
                                    <input type=\"checkbox\" tabindex=\"3\" class=\"\" name=\"remember\" id=\"remember\">
                                    <label for=\"remember\"> Remember Me</label>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-sm-offset-3\">
                                            <input type=\"submit\" name=\"login-submit\" id=\"login-submit\" tabindex=\"4\" class=\"form-control btn btn-login\" value=\"Log In\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"text-center\">
                                                <a href=\"http://phpoll.com/recover\" tabindex=\"5\" class=\"forgot-password\">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id=\"register-form\" action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\" method=\"post\" role=\"form\" style=\"display: none;\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"username\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" value=\"\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Email Address\" value=\"\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" name=\"confirm-password\" id=\"confirm-password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Confirm Password\">
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-sm-offset-3\">
                                            <input type=\"submit\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"form-control btn btn-register\" value=\"Register Now\">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 53,  61 => 25,  41 => 7,  38 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login/login.html", "/home/html/sports/templates/login/login.html");
    }
}
