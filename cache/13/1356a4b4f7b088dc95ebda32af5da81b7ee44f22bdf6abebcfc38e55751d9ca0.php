<?php

/* events/add.html */
class __TwigTemplate_fbb868d2954a4a5edec63290a1118a43ce25e105635432efcd50608e5d04f407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "events/add.html", 1);
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
    <div class=\"row\"><h1>Add new event</h1></div>
    <form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("events_add_post"), "html", null, true);
        echo "\">
        <fieldset>

            <!-- Form Name -->
            <legend>Add new event</legend>

            <!-- Text input-->
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"desc\">Description</label>
                <div class=\"col-md-4\">
                    <input id=\"desc\" name=\"desc\" type=\"text\" placeholder=\"\" class=\"form-control input-md\" required=\"\">

                </div>
            </div>

            <!-- Select Basic -->
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"event_type\">Event type</label>
                <div class=\"col-md-4\">
                    <select id=\"event_type\" name=\"event_type\" class=\"form-control\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 26
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </select>
                </div>
            </div>

            <!-- Appended Input-->
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"date\">Date</label>
                <div class=\"col-md-4\">
                    <div class=\"input-group\">
                        <input type=\"datetime-local\" id=\"date\" name=\"date\" class=\"form-control\" placeholder=\"\" required=\"\">
                    </div>

                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"max_users\">Maksymalna liczba zawodników</label>
                <div class=\"col-md-4\">
                    <input id=\"max_users\" name=\"max_users\" type=\"number\" placeholder=\"\" class=\"form-control input-md\" required=\"\">
                </div>
            </div>
                    <input id=\"lat\" name=\"lat\" type=\"hidden\">
                    <input id=\"lng\" name=\"lng\" type=\"hidden\">

            <!--submit -->
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"lng\">Submit</label>
                <div class=\"col-md-4\">
                    <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                </div>
            </div>
        </fieldset>

    </form>
<div id=\"map\" style=\"float:left;height:300px; width: 600px;\"></div> <script>
     function initMap() {
        var uluru = {lat: 51.0, lng: 17.0 };
     var   map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
      var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          draggable: true,
          title:\"drag to match event position\"
        });
      

    google.maps.event.addListener(map,'dragend',function(e) {
      \$(\"#lat\").val(marker.getPosition().lat());
      \$(\"#lng\").val(marker.getPosition().lng());
    });
 }
    </script>

<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBI-diNGgBdd3J-VhPMZy8TrPqpWZFDADM&callback=initMap\"></script>

</div>
";
    }

    public function getTemplateName()
    {
        return "events/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  62 => 26,  58 => 25,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "events/add.html", "/home/html/sports/templates/events/add.html");
    }
}
