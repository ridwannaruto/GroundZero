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
        <h1> Event</h1>
        <table>
            <tr><a href=\"register_event?eid=";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["eid"]) ? $context["eid"] : $this->getContext($context, "eid")), "html", null, true);
        echo "&id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"><button>Register</button></a>

            <td><strong>Event Name</strong></td><td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
                <td><strong>Project</strong></td><td>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["pname"]) ? $context["pname"] : $this->getContext($context, "pname")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td><strong>Team Leader</strong></td><td>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["teamleader"]) ? $context["teamleader"] : $this->getContext($context, "teamleader")), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
                <td><strong>Event Description</strong></td><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
                <td><strong>Event goals</strong></td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
                <td><strong>Start date</strong></td><td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startdate"), "m/d/Y"), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
                <td><strong>end date</strong></td><td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "enddate"), "m/d/Y"), "html", null, true);
        echo "</td>
            </tr>
            <br>
        </table>


    </div>
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
        return array (  114 => 7,  102 => 38,  95 => 34,  88 => 30,  81 => 26,  74 => 22,  68 => 19,  61 => 15,  54 => 13,  48 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
