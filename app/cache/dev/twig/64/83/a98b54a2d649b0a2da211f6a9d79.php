<?php

/* VolunteerManagementSystemEventBundle:Event:eventuser.html.twig */
class __TwigTemplate_6483a98b54a2d649b0a2da211f6a9d79 extends Twig_Template
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
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
        echo "
            <br><br>
         
         <strong>Project</strong><br>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["pname"]) ? $context["pname"] : $this->getContext($context, "pname")), "html", null, true);
        echo "
            <br><br>
        <strong>Team Leader</strong><br>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["teamleader"]) ? $context["teamleader"] : $this->getContext($context, "teamleader")), "html", null, true);
        echo "
           <br><br>
            
           
        <strong>Event Description</strong><br>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
        echo "
           <br><br>
          <strong>Event Goals</strong><br>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
        echo "
            <br><br>
         <strong>Start Date</strong><br>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startdate"), "m/d/Y"), "html", null, true);
        echo "
            <br><br>
           
           
         <strong>End Date</strong><br>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "enddate"), "m/d/Y"), "html", null, true);
        echo "
            
       <br><br>
        
    
    </div>
        </section>

<section class=\"container\">
    <div class=\"notify\">
 
         <h2 class=\"price\">Volunteers</h2>
         <br><br>
       <ul>
    ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"));
            echo "</li>
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</ul>
         
  
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
        return "VolunteerManagementSystemEventBundle:Event:eventuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 7,  121 => 49,  111 => 46,  107 => 45,  90 => 31,  83 => 27,  78 => 25,  73 => 23,  66 => 19,  61 => 17,  55 => 14,  48 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
