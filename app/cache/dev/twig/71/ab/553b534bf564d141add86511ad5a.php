<?php

/* VolunteerManagementSystemReportGenerationBundle:ProjectReport:ProjectReport.html.twig */
class __TwigTemplate_71ab553b534bf564d141add86511ad5a extends Twig_Template
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
        echo "Volma-Project Report";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Project Report: ";
        echo twig_escape_filter($this->env, (isset($context["projectname"]) ? $context["projectname"] : $this->getContext($context, "projectname")), "html", null, true);
        echo "</h1>



<div class=\"inner\">
    <table width=\"398\" border=\"0\" align=\"center\" cellpadding=\"0\">
        <tr>
            <td height=\"26\" colspan=\"2\">Project Report
            </td>
            
        </tr>
        <tr>
            
            <td valign=\"top\"><div align=\"left\">Project Name:";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["projectname"]) ? $context["projectname"] : $this->getContext($context, "projectname")), "html", null, true);
        echo "</div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Status:";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
        echo " </div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Description:";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo "</div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Objectives:";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["objectives"]) ? $context["objectives"] : $this->getContext($context, "objectives")), "html", null, true);
        echo "</div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Start Date :";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["startdate"]) ? $context["startdate"] : $this->getContext($context, "startdate")), "m/d/Y"), "html", null, true);
        echo "</div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">End Date :";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["enddate"]) ? $context["enddate"] : $this->getContext($context, "enddate")), "m/d/Y"), "html", null, true);
        echo " </div></td>

        </tr>
        <tr>
            <td valign=\"top\"><div align=\"left\">Project Manager:";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["projectmanager"]) ? $context["projectmanager"] : $this->getContext($context, "projectmanager")), "html", null, true);
        echo " </div></td>

        </tr>

    </table>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemReportGenerationBundle:ProjectReport:ProjectReport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 43,  90 => 39,  83 => 35,  76 => 31,  69 => 27,  62 => 23,  55 => 19,  38 => 6,  35 => 5,  29 => 3,);
    }
}
