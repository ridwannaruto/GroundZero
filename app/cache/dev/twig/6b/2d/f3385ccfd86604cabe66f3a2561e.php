<?php

/* VolunteerManagementSystemReportGenerationBundle:display:userDetails.html.twig */
class __TwigTemplate_6b2df3385ccfd86604cabe66f3a2561e extends Twig_Template
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
        echo "Volma-User Report ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"propic\" >
   <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/images/me.jpg"), "html", null, true);
        echo "\" width=\"200\" height=\"200\"></h2>
             </div> 

<h1>User Personal Details</h1>  
<table width=\"93%\">
  <tr>
    <th width=\"18%\" height=\"33\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Name with Initials</strong></td>
    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "namewithinitials"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>First Name</strong> </td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Last Name </strong></td>
    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>NIC</strong></td>
    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Gender</strong></td>
    <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Date of Birth </strong></td>
    <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateOfBirth"), "m/d/Y"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Email</strong></td>
    <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Mobile Number</strong> </td>
    <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Contact Number </strong></td>
    <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Address</strong></td>
    <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>City</strong</td>
    <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Country</strong></td>
    <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo "</td>
  </tr>

  
  
  
</table> 

<h1>User Track Record</h1>  

<table width=\"93%\">
  <tr>
    <th width=\"18%\" height=\"33\" scope=\"row\"> &nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Joined date</strong></td>
    <td>";
        // line 119
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "joinedDate"), "m/d/Y"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Overall Rating</strong></td>
    <td>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "overallRating"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Projects Participated</strong></td>
    <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "projectHistory"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Events Participated</strong></td>
    <td>";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "eventHistory"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Comments by team leaders</strong></td>
    <td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "comments"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Workshops Participated</strong></td>
    <td>";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "workshopsAttended"), "html", null, true);
        echo "</td>
    
  </tr>
</table>

";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemReportGenerationBundle:display:userDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 149,  231 => 143,  222 => 137,  213 => 131,  204 => 125,  195 => 119,  171 => 98,  161 => 91,  151 => 84,  141 => 77,  131 => 70,  121 => 63,  111 => 56,  101 => 49,  91 => 42,  82 => 36,  73 => 30,  64 => 24,  45 => 8,  41 => 6,  38 => 5,  29 => 3,);
    }
}
