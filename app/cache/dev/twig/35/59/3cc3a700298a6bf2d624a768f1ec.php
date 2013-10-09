<?php

/* VolunteerManagementSystemReportGenerationBundle:TrackRecord:TrackRecord.html.twig */
class __TwigTemplate_35593cc3a700298a6bf2d624a768f1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Volma - Track Record";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Track Record: ";
        echo twig_escape_filter($this->env, (isset($context["fname"]) ? $context["fname"] : $this->getContext($context, "fname")), "html", null, true);
        echo "</h1>
<br><br>Name:</t>


<div class=\"inner\">
    <table width=\"398\" border=\"0\" align=\"center\" cellpadding=\"0\">
        <tr>
            <td height=\"26\" colspan=\"2\">Volunteer Track Rcord
            </td>
            
        </tr>
        <tr>
            
            <td valign=\"top\"><div align=\"left\">Name:";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["fname"]) ? $context["fname"] : $this->getContext($context, "fname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lname"]) ? $context["lname"] : $this->getContext($context, "lname")), "html", null, true);
        echo "</div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Joined date:";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["jdate"]) ? $context["jdate"] : $this->getContext($context, "jdate")), "m/d/Y"), "html", null, true);
        echo "</div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Overall Rating:";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["overallrating"]) ? $context["overallrating"] : $this->getContext($context, "overallrating")), "html", null, true);
        echo "</div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Events Participated:";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "html", null, true);
        echo "</div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Comments:";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")), "html", null, true);
        echo " </div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Workshops Attended:";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["workshops"]) ? $context["workshops"] : $this->getContext($context, "workshops")), "html", null, true);
        echo " </div></td>

        </tr>

    </table>


";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemReportGenerationBundle:TrackRecord:TrackRecord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  85 => 35,  78 => 31,  71 => 27,  64 => 23,  55 => 19,  38 => 6,  35 => 5,  29 => 3,);
    }
}
