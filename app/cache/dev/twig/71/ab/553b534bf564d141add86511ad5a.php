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
        echo "
<section class=\"container\">
    <div class=\"notify\">
        <h2 class=\"price\">Project Report</h2>  <br><br>

        <table width=\"90%\">
            <tr>
                <th width=\"18%\" height=\"33\" scope=\"row\">&nbsp;</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td height=\"34\">&nbsp;</td>
                <td><strong>Project Name</strong></td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["projectname"]) ? $context["projectname"] : $this->getContext($context, "projectname")), "html", null, true);
        echo "</td>

            </tr>
            <tr>
                <td height=\"34\">&nbsp;</td>
                <td><strong>Status</strong></td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
        echo "</td>

            </tr>
            <tr>
                <td height=\"34\">&nbsp;</td>
                <td><strong>Description</strong></td>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo "</td>

            </tr>

            <tr>
                <td height=\"34\">&nbsp;</td>
                <td><strong>Objectives</strong></td>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["objectives"]) ? $context["objectives"] : $this->getContext($context, "objectives")), "html", null, true);
        echo "</td>
            <tr>
                <td height=\"34\">&nbsp;</td>
                <td><strong>Started Date</strong></td>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["startdate"]) ? $context["startdate"] : $this->getContext($context, "startdate")), "m/d/Y"), "html", null, true);
        echo "</td>

            </tr>
            <tr>
                <td height=\"34\">&nbsp;</td>
                <td><strong>Project Manager</strong></td>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")), "lastname"), "html", null, true);
        echo " </td>

            </tr>   






        </table>
    </div>
</section>
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
        return array (  100 => 51,  91 => 45,  84 => 41,  74 => 34,  65 => 28,  56 => 22,  38 => 6,  35 => 5,  29 => 3,);
    }
}
