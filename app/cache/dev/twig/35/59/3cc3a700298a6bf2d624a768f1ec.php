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
        echo "


<section class=\"container\">
<div class=\"notify\">
<h2 class=\"price\">Volunteer Track Record</h2>  <br><br>

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
    <td><strong>Name</strong></td>
    <td>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["fname"]) ? $context["fname"] : $this->getContext($context, "fname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lname"]) ? $context["lname"] : $this->getContext($context, "lname")), "html", null, true);
        echo "</td>
    
  </tr>
         <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Joined Date</strong></td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["jdate"]) ? $context["jdate"] : $this->getContext($context, "jdate")), "m/d/Y"), "html", null, true);
        echo "</td>
    
  </tr>
         <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Overall Rating</strong></td>
    <td>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["overallrating"]) ? $context["overallrating"] : $this->getContext($context, "overallrating")), "html", null, true);
        echo "</td>
    
  </tr>
        
         <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Events Participated</strong></td>
    <td>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "html", null, true);
        echo "</td>
     <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Comments</strong></td>
    <td>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")), "html", null, true);
        echo "</td>
    
  </tr>
     <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Workshops Attended </strong></td>
    <td>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["workshops"]) ? $context["workshops"] : $this->getContext($context, "workshops")), "html", null, true);
        echo " </td>
    
  </tr>   
 
        
        
      
        

    </table>
        </div>
        </section>

        
      


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
        return array (  104 => 53,  95 => 47,  88 => 43,  78 => 36,  69 => 30,  58 => 24,  38 => 6,  35 => 5,  29 => 3,);
    }
}
