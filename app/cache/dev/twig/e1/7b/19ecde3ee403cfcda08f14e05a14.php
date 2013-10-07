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
    }
});

});
</script>
";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "<h1 class=\"price\">Notifications</h1>
<p align =\"justify\">Following notifications displays uptodate project & events npotifications that were subscribed by you. It also display special notifications which mainly concerns you.</p>

<p> </p>
<h1 class=\"price\">Calendar</h1>
<p align =\"justify\">Following calendar displays up to date project scheduled events and organized workshops that are open for every volunteer. It also indicate special days which are deadlines or progress dates for events your registered to.</p>
<div id='calendar'></div>


";
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
        return array (  84 => 27,  81 => 26,  63 => 12,  58 => 11,  55 => 10,  47 => 6,  44 => 5,  38 => 4,  32 => 3,);
    }
}
