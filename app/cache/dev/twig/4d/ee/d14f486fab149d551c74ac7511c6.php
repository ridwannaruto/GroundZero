<?php

/* VolunteerManagementSystemProjectBundle:Projectview:projectview.html.twig */
class __TwigTemplate_4deed14f486fab149d551c74ac7511c6 extends Twig_Template
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
        echo "<div class=\"notify\">
    
<h2 class=\"price\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getName", array(), "method"), "html", null, true);
        echo "</h2>

    <br><br>

<p align=\"left\">
<strong>Description</strong>
<br>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getDescription", array(), "method"), "html", null, true);
        echo "<br><br>
<strong>Objectives</strong>
<br>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getObjectives", array(), "method"), "html", null, true);
        echo "<br><br>
<strong>Project Manager</strong>
<br>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")), "getFirstname", array(), "method"), "html", null, true);
        echo "<br><br><br>
<strong>Initiated on</strong>
<br>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getStartdate"), "Y-m-d"), "html", null, true);
        echo "<br><br><br>
<strong>Scheduled end date</strong>
<br>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getEnddate"), "Y-m-d"), "html", null, true);
        echo "<br><br><br>
</div>
<br><br><br>
<div class=\"notify\">
<h2 class=\"price\" >Events</h2>
<p>

</p>
    
<p align = \"center\"><table width = 90% align = \"center\">
";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 34
            echo "        <tr>
            <td width=50%><p><strong>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), 1, array(), "array"), "html", null, true);
            echo "</strong></p></td>
            <td>
                <p>
                    <a href=\"view_event?eid=";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), 0, array(), "array"), "html", null, true);
            echo "&id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "&pname=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getName", array(), "method"), "html", null, true);
            echo "\">
                        <button class=\"a-btn\">
                <span class=\"a-btn-text\">view</span>
                <span class=\"a-btn-slide-text\">details</span>
                <span class=\"a-btn-icon-right\"><span></span></span>
            </button>
                        </a>
                    </p>
                </td>
        </tr>
        
        
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        $this->displayBlock('createevent', $context, $blocks);
        // line 52
        echo "    </table>
</p>


</div>
";
    }

    // line 50
    public function block_createevent($context, array $blocks = array())
    {
        // line 51
        echo "        ";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemProjectBundle:Projectview:projectview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  134 => 50,  125 => 52,  123 => 50,  100 => 38,  94 => 35,  91 => 34,  87 => 33,  74 => 23,  69 => 21,  64 => 19,  59 => 17,  54 => 15,  45 => 9,  41 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
