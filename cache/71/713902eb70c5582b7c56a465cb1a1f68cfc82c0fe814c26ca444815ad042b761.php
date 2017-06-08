<?php

/* events/details.html */
class __TwigTemplate_fa33aeb595e28ca3dcf7ee224cd5a71d6579906a6387e2cf6f14b9eb48ad3a3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "events/details.html", 1);
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
<h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "description", array()), "html", null, true);
        echo "</h1>
<h4>Data:<h2>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "date", array()), "html", null, true);
        echo "</h2></h4>
 ";
        // line 6
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "signed", array()))) {
            // line 7
            echo "                <button class=\"btn btn-primary\">Zapisz</button>
                ";
        } else {
            // line 9
            echo "                <button class=\"btn btn-primary\">Wypisz</button>
                ";
        }
        // line 11
        echo "
                ";
        // line 12
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "follow", array()))) {
            // line 13
            echo "                <button class=\"btn btn-primary\">+++</button>
                ";
        } else {
            // line 15
            echo "                <button class=\"btn btn-primary\">---</button>
                ";
        }
        // line 17
        echo "<p>Zapisani uzytkownicy</p>
 ";
        // line 18
        if ( !twig_test_empty(($context["users"] ?? null))) {
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                echo "<br/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 23
        echo " <div id=\"map\" style=\"float:left;height:300px; width: 600px;\"></div> <script>
     function initMap() {
        var uluru = {lat: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "lat", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "lng", array()), "html", null, true);
        echo " };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      } 
    </script>

<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBI-diNGgBdd3J-VhPMZy8TrPqpWZFDADM&callback=initMap\"></script>
</div>
";
    }

    public function getTemplateName()
    {
        return "events/details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  83 => 23,  74 => 20,  70 => 19,  68 => 18,  65 => 17,  61 => 15,  57 => 13,  55 => 12,  52 => 11,  48 => 9,  44 => 7,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "events/details.html", "/home/html/sports/templates/events/details.html");
    }
}
