<?php

/* VolunteerManagementSystemEventBundle:Event:event.html.twig */
class __TwigTemplate_9aae4855ef6114b3033cb05a59a9410b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'selectprojects' => array($this, 'block_selectprojects'),
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
        echo "Volma - Projects";
    }

    // line 4
    public function block_selectprojects($context, array $blocks = array())
    {
        echo " class=\"active\" ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        $this->displayBlock('admin', $context, $blocks);
        // line 9
        echo "<section class=\"container\">
    <div class=\"notify\">
        <h2 class=\"price\"> Event</h2>
        <br><br>
           <strong>Event Name</strong><br>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
        echo "
            <br><br>
         
         <strong>Project</strong><br>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["pname"]) ? $context["pname"] : $this->getContext($context, "pname")), "html", null, true);
        echo "
            <br><br>
        <strong>Team Leader</strong><br>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["teamleader"]) ? $context["teamleader"] : $this->getContext($context, "teamleader")), "html", null, true);
        echo "
           <br><br>
            
           
        <strong>Event Description</strong><br>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
        echo "
           <br><br>
          <strong>Event Goals</strong><br>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
        echo "
            <br><br>
         <strong>Start Date</strong><br>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startdate"), "m/d/Y"), "html", null, true);
        echo "
            <br><br>
           
           
         <strong>End Date</strong><br>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "enddate"), "m/d/Y"), "html", null, true);
        echo "
            
       <br><br>
        
    <br>
    <a href=\"register_event?eid=";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["eid"]) ? $context["eid"] : $this->getContext($context, "eid")), "html", null, true);
        echo "&id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
            <button class=\"a-btn\">
                <span class=\"a-btn-text\">Volunteer</span>
                <span class=\"a-btn-slide-text\">to this</span>
                <span class=\"a-btn-icon-right\"><span></span></span>
            </button>
        </a>
    <br><br><br>
    </div>
        </section>
";
    }

    // line 7
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemEventBundle:Event:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 7,  97 => 35,  89 => 30,  82 => 26,  77 => 24,  72 => 22,  65 => 18,  60 => 16,  54 => 13,  48 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
