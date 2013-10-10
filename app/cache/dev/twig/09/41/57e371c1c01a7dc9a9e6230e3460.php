<?php

/* VolunteerManagementSystemEventBundle:Event:eventregistered.html.twig */
class __TwigTemplate_094157e371c1c01a7dc9a9e6230e3460 extends Twig_Template
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
        <h1> Event</h1>
        <tr>
            <td><strong>Event Name</strong></td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
        echo "</td>
            </tr>
         <br>
            <tr>
         <td><strong>Team Leader</strong></td><td>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["teamleader"]) ? $context["teamleader"] : $this->getContext($context, "teamleader")), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
         <td><strong>Event Description</strong></td><td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
          <td><strong>Event goals</strong></td><td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
         <td><strong>Start date</strong></td><td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startdate"), "m/d/Y"), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
         <td><strong>end date</strong></td><td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "enddate"), "m/d/Y"), "html", null, true);
        echo "</td>
            </tr>
            <br>
         <h1>Members</h1>
       <ul>
    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</ul>
         
    <p align=\"right\">
            <a href=\"close_event?eid=";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["eid"]) ? $context["eid"] : $this->getContext($context, "eid")), "html", null, true);
        echo "&id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"><button>close Event</button></a>
            </p>
    </div>
";
    }

    // line 7
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemEventBundle:Event:eventregistered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 7,  115 => 44,  110 => 41,  101 => 39,  97 => 38,  89 => 33,  82 => 29,  75 => 25,  68 => 21,  61 => 17,  54 => 13,  48 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
