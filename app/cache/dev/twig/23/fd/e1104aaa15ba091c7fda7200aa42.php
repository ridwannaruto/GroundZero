<?php

/* VolunteerManagementSystemEventBundle:Manage:eventspage.html.twig */
class __TwigTemplate_23fde1104aaa15ba091c7fda7200aa42 extends Twig_Template
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
        echo "<div class=\"notify\" >
    <h1>List of Events</h1>

<table width=\"100%\" height=\"33\">

        <tr>
            <th width=\"10%\" rowspan=\"6\" scope=\"row\"><strong>Event Name</strong><td width=\"3%\" height=\"35\"></td>
            <td width=\"25%\"><strong>Description</strong></td>
            <td width=\"15%\"><strong>Strat Date</strong></td>
            <td width=\"15%\"><strong>End Date</strong></td>
            <td width=\"7%\"></td>
        </tr>
    </table> 
 </div>
 ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " 
<div class=\"notify\" >
    <table width=\"100%\" height=\"33\">

        <tr>
            <th width=\"10%\" rowspan=\"6\" scope=\"row\"><strong>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), 0, array(), "array"), "getName", array(), "method"), "html", null, true);
            echo "</strong><td width=\"3%\" height=\"35\"></td>
            <td width=\"30%\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), 0, array(), "array"), "getDescription"), "html", null, true);
            echo " </td>
            <td width=\"15%\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), 0, array(), "array"), "getStartdate", array(), "method"), "m/d/Y"), "html", null, true);
            echo "</td>
            <td width=\"15%\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), 0, array(), "array"), "getDeadline", array(), "method"), "m/d/Y"), "html", null, true);
            echo "</td>
            <td width=\"7%\"><a href=\"view_event?eid=";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), 0, array(), "array"), "getId", array(), "method"), "html", null, true);
            echo "&id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "&pname=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), 1, array(), "array"), "html", null, true);
            echo "\"><button>view details</button></a></td>
        </tr>
    </table> 
</div>
</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 7
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemEventBundle:Manage:eventspage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 7,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  64 => 23,  48 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
