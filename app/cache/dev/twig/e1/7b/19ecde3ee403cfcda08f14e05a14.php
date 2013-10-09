<?php

/* VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig */
class __TwigTemplate_e17b19ecde3ee403cfcda08f14e05a14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'selecthome' => array($this, 'block_selecthome'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'adminpromotion' => array($this, 'block_adminpromotion'),
            'adminevent' => array($this, 'block_adminevent'),
            'adminreport' => array($this, 'block_adminreport'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Volma - Home";
    }

    // line 4
    public function block_selecthome($context, array $blocks = array())
    {
        echo "class=\"active\" ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/fullcalendar.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"> 
        
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
 <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/fullcalendar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script>\$(document).ready(function() {

    // page is now ready, initialize the calendar...
    \$('#calendar').fullCalendar('next');
    \$('#calendar').fullCalendar({
    dayClick: function() {
        alert('a day has been clicked!');
        
    },
    
    events: function(start, end, callback) {
        \$.ajax({
            url: 'myxmlfeed.php',
            dataType: 'xml',
            data: {
                // our hypothetical feed requires UNIX timestamps
                start: Math.round(start.getTime() / 1000),
                end: Math.round(end.getTime() / 1000)
            },
            success: function(doc) {
                var events = [];
                \$(doc).find('event').each(function() {
                    events.push({
                        title: \$(this).attr('title'),
                        start: \$(this).attr('start') // will be parsed
                    });
                });
                callback(events);
            }
        });
    }
});

});
</script>
";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        $this->displayBlock('adminpromotion', $context, $blocks);
        // line 52
        echo "<h1 class=\"price\">Notifications</h1>
<p align =\"justify\">Following notifications displays uptodate project & events npotifications that were subscribed by you. It also display special notifications which mainly concerns you.</p>
<p> <div class=\"inner\">
 <table width=\"398\" border=\"10\" align=\"center\" cellpadding=\"0\">
   ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notify"]) ? $context["notify"] : $this->getContext($context, "notify")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 57
            echo "        <p>
        <section class=\"container\">
        <div class=\"notify\" >
        <p align=\"right\"><strong>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getName", array(), "method"), "html", null, true);
            echo "</strong></p><p>
        <strong>Details: </strong>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDetails", array(), "method"), "html", null, true);
            echo "<br>
        <strong>Project: </strong>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getProject", array(), "method"), "html", null, true);
            echo "<br>       
        <strong>Notified Date: </strong>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDate"), "Y-m-d"), "html", null, true);
            echo "
        </div></section>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        
       
</table></div></p>
<p> </p>
";
        // line 71
        $this->displayBlock('adminevent', $context, $blocks);
        // line 73
        echo "<h1 class=\"price\">Calendar</h1>
<p align =\"justify\">Following calendar displays up to date project scheduled events and organized workshops that are open for every volunteer. It also indicate special days which are deadlines or progress dates for events your registered to.</p>
<div id='calendar'></div>

<p></p>
";
        // line 78
        $this->displayBlock('adminreport', $context, $blocks);
    }

    // line 50
    public function block_adminpromotion($context, array $blocks = array())
    {
    }

    // line 71
    public function block_adminevent($context, array $blocks = array())
    {
    }

    // line 78
    public function block_adminreport($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 78,  173 => 71,  168 => 50,  164 => 78,  157 => 73,  155 => 71,  149 => 67,  139 => 63,  135 => 62,  131 => 61,  127 => 60,  122 => 57,  118 => 56,  112 => 52,  110 => 50,  107 => 49,  66 => 12,  61 => 11,  58 => 10,  50 => 6,  47 => 5,  41 => 4,  35 => 3,);
    }
}
