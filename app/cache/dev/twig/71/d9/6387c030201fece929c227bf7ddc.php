<?php

/* VolunteerManagementSystemProjectBundle:ProjectView:projectview.html.twig */
class __TwigTemplate_71d96387c030201fece929c227bf7ddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'createevent' => array($this, 'block_createevent'),
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
        // line 4
        echo "Volma - Projects
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1 class=\"price\" align = \"center\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getName", array(), "method"), "html", null, true);
        echo "</h1>
<section class=\"container\">
    <div class=\"notify\">
<h1>Basic Information</h1>
<p align=\"left\">
<strong>Description</strong>
<br>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getDescription", array(), "method"), "html", null, true);
        echo "<br><br>
<strong>Objectives</strong>
<br>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getObjectives", array(), "method"), "html", null, true);
        echo "<br><br>
<strong>Project Manager</strong>
<br>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")), "getFirstname", array(), "method"), "html", null, true);
        echo "<br><br><br>
<strong>Initiated on</strong>
<br>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getStartdate"), "Y-m-d"), "html", null, true);
        echo "<br><br><br>
<strong>Scheduled end date</strong>
<br>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getEnddate"), "Y-m-d"), "html", null, true);
        echo "<br><br><br>
<h1>Events</h1>
<p>
";
        // line 24
        $this->displayBlock('createevent', $context, $blocks);
        // line 26
        echo "</p>
    
<p align = \"center\"><table width = 90% align = \"center\">
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 30
            echo "        <tr>
            <td width=70%><p><strong>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), 1, array(), "array"), "html", null, true);
            echo "</strong></p></td>
            <td><p><a href=\"view_event?eid=";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), 0, array(), "array"), "html", null, true);
            echo "&id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"><button>view details</button></a></p></td>
        </tr>
        
        
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>
</p>


</div></section>
";
    }

    // line 24
    public function block_createevent($context, array $blocks = array())
    {
        // line 25
        echo "        ";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemProjectBundle:ProjectView:projectview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 25,  117 => 24,  108 => 37,  95 => 32,  91 => 31,  88 => 30,  84 => 29,  79 => 26,  77 => 24,  71 => 21,  66 => 19,  61 => 17,  56 => 15,  51 => 13,  41 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
