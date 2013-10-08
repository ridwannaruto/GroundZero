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
            'admin' => array($this, 'block_admin'),
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
        $this->displayBlock('admin', $context, $blocks);
        // line 29
        echo "<h1 class=\"price\">Notifications</h1>
<p align =\"justify\">Following notifications displays uptodate project & events npotifications that were subscribed by you. It also display special notifications which mainly concerns you.</p>
<p> <div class=\"inner\">
 <table width=\"398\" border=\"10\" align=\"center\" cellpadding=\"0\">
   ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notify"]) ? $context["notify"] : $this->getContext($context, "notify")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 34
            echo "        <p>
        <section class=\"container\">
        <div class=\"notify\" width=\"500px\">
        <strong>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getName", array(), "method"), "html", null, true);
            echo "</strong><br>
        <strong>Details: </strong><p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDetails", array(), "method"), "html", null, true);
            echo "</p><br>
        <strong>Project: </strong>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getProject", array(), "method"), "html", null, true);
            echo "<br>       
        <strong>Notified Date: </strong>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDate"), "Y-m-d"), "html", null, true);
            echo "
        </div></section>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        
       
</table></div></p>
<p> </p>
<h1 class=\"price\">Calendar</h1>
<p align =\"justify\">Following calendar displays up to date project scheduled events and organized workshops that are open for every volunteer. It also indicate special days which are deadlines or progress dates for events your registered to.</p>
<div id='calendar'></div>


";
    }

    // line 27
    public function block_admin($context, array $blocks = array())
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
        return array (  137 => 27,  124 => 44,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  97 => 34,  93 => 33,  87 => 29,  85 => 27,  82 => 26,  64 => 12,  59 => 11,  56 => 10,  48 => 6,  45 => 5,  39 => 4,  33 => 3,);
    }
}
