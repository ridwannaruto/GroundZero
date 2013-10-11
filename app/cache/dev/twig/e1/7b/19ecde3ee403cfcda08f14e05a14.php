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
<script>
    \$(document).ready(function() {

    // page is now ready, initialize the calendar...

   \$('#calendar').fullCalendar({

    eventSources: [

        // your event source
        {
            events: [ // put the array in the `events` property
                {
                    title  : 'Coordinate Morning Session',
                    start  : '2013-10-01'
                },
                {
                    title  : 'Write Article',
                    start  : '2013-10-05',
                    end    : '2013-10-07'
                },
                {
                    title  : 'Reply to Web Forum',
                    start  : '2013-10-09 12:30:00',
                }
            ],
            color: 'black',     // an option!
            textColor: 'yellow' // an option!
        }

        // any other event sources...

    ],
    

});
    

});
</script>
";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        $this->displayBlock('adminpromotion', $context, $blocks);
        // line 57
        echo "<h2 class=\"price\">Notifications</h2>
<p align =\"justify\">Following notifications displays uptodate project & events npotifications that were subscribed by you. It also display special notifications which mainly concerns you.</p>
<p> <div class=\"inner\">
 <table width=\"398\" border=\"10\" align=\"center\" cellpadding=\"0\">
   ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notify"]) ? $context["notify"] : $this->getContext($context, "notify")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 62
            echo "        <p>
        
        <div class=\"notify\" >
        <p align=\"right\"><strong>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getName", array(), "method"), "html", null, true);
            echo "</strong></p><p>
        <strong>Details: </strong>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDetails", array(), "method"), "html", null, true);
            echo "<br>
        <strong>Project: </strong>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getProject", array(), "method"), "html", null, true);
            echo "<br>       
        <strong>Notified Date: </strong>";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDate"), "Y-m-d"), "html", null, true);
            echo "
        </div>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        
       
</table></div></p>
<p> </p>
";
        // line 76
        $this->displayBlock('adminevent', $context, $blocks);
        // line 82
        echo "<h2 class=\"price\">Calendar</h2>
<p align =\"justify\">Following calendar displays up to date project scheduled events and organized workshops that are open for every volunteer. It also indicate special days which are deadlines or progress dates for events your registered to.</p>
<div id='calendar'></div>

<p></p>
";
        // line 87
        $this->displayBlock('adminreport', $context, $blocks);
    }

    // line 55
    public function block_adminpromotion($context, array $blocks = array())
    {
    }

    // line 76
    public function block_adminevent($context, array $blocks = array())
    {
        // line 77
        echo "<p align=\"right\">
            <a href=\"manage_event?id=";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"<strong><button type=\"submit\">Manage Events</button></strong></a>
            
       </p>
";
    }

    // line 87
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
        return array (  192 => 87,  184 => 78,  181 => 77,  178 => 76,  173 => 55,  169 => 87,  162 => 82,  160 => 76,  154 => 72,  144 => 68,  140 => 67,  136 => 66,  132 => 65,  127 => 62,  123 => 61,  117 => 57,  115 => 55,  112 => 54,  66 => 12,  61 => 11,  58 => 10,  50 => 6,  47 => 5,  41 => 4,  35 => 3,);
    }
}
