<?php

/* events/list.html */
class __TwigTemplate_b7c5671193f2dd74c2ca2f62a730cb744bcdf7a0cb35313fbd599a38eb98d01d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "events/list.html", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <div class=\"row\"><h1>Events list</h1></div>
    ";
        // line 5
        if ( !twig_test_empty(($context["events"] ?? null))) {
            // line 6
            echo "    <table id=\"table_event_list\" class=\"table table-bordered table-striped table-responsive\">
        <thead>
        <tr>
            <th>
                Description
            </th>
            <th>
                Event type
            </th>
            <th>
                Date
            </th>
            <th>
                Place
            </th>
            <th>
                Slots
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 31
                echo "        <tr>
            <td>
                <a href=\"details/";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "description", array()), "html", null, true);
                echo "</a>
            </td>
            <td>
                ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "name", array()), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "event_date", array()), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "lat", array()), "html", null, true);
                echo " // ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "lng", array()), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "signed_users", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "max_users", array()), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 48
                if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "signed", array()))) {
                    // line 49
                    echo "               <a href=\"/panel/events/attend/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array()), "html", null, true);
                    echo "\"> <button>Zapisz</button></a>
                ";
                } else {
                    // line 51
                    echo "                <button>Wypisz</button>
                ";
                }
                // line 53
                echo "
                ";
                // line 54
                if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "follow", array()))) {
                    // line 55
                    echo "                <button>+++</button>
                ";
                } else {
                    // line 57
                    echo "                <button>---</button>
                ";
                }
                // line 59
                echo "
            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </tbody>
    </table>
    <script>
//        \$(document).ready(function() {
//            \$('#table_event_list').DataTable({
 //               \"order\": [[ 2, \"desc\" ]],
 //               \"paging\":   false
 //           });
 //       } );
    </script>
    ";
        } else {
            // line 74
            echo "    <p>No events found</p>

    ";
        }
        // line 77
        echo "</div>
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
        return array (  159 => 77,  154 => 74,  141 => 63,  132 => 59,  128 => 57,  124 => 55,  122 => 54,  119 => 53,  115 => 51,  109 => 49,  107 => 48,  99 => 45,  91 => 42,  85 => 39,  79 => 36,  71 => 33,  67 => 31,  63 => 30,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "events/list.html", "/home/html/sports/templates/events/list.html");
    }
}
