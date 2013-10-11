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

<section class=\"container\">
<div class=\"notify\">
<h2 class=\"price\">User Personal Details</h2>  <br><br>
<div class=\"propic\" >
   <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/images/me.jpg"), "html", null, true);
        echo "\" width=\"200\" height=\"200\"></h2>
             </div> 
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
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "namewithinitials"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>First Name</strong> </td>
    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Last Name </strong></td>
    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>NIC</strong></td>
    <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Gender</strong></td>
    <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Date of Birth </strong></td>
    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateOfBirth"), "m/d/Y"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Email</strong></td>
    <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Mobile Number</strong> </td>
    <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Contact Number </strong></td>
    <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Address</strong></td>
    <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>City</strong</td>
    <td>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    
    <td height=\"34\">&nbsp;</td>
    <td><strong>Country</strong></td>
    <td>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo "</td>
  </tr>

  
  
  
</table> 
</div></sesction>
        <section class=\"container\">
<div class=\"notify\">
<h2 class=\"price\">User Track Record</h2>  

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
        // line 123
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "joinedDate"), "m/d/Y"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Overall Rating</strong></td>
    <td>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "overallRating"), "html", null, true);
        echo "</td>
    
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Projects Participated</strong></td>
    ";
        // line 135
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "projectHistory"));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 136
            echo "    <td>";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Events Participated</strong></td>
    ";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "eventHistory"));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 143
            echo "    <td>";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Comments by team leaders</strong></td>
    ";
        // line 149
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "comments"));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 150
            echo "    <td>";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Workshops Participated</strong></td>
    ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["trackrecord"]) ? $context["trackrecord"] : $this->getContext($context, "trackrecord")), "workshopsAttended"));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 157
            echo "    <td>";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "  </tr>
</table>
</div></section>
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
        return array (  287 => 159,  278 => 157,  274 => 156,  268 => 152,  259 => 150,  255 => 149,  249 => 145,  240 => 143,  236 => 142,  230 => 138,  221 => 136,  217 => 135,  208 => 129,  199 => 123,  173 => 100,  163 => 93,  153 => 86,  143 => 79,  133 => 72,  123 => 65,  113 => 58,  103 => 51,  93 => 44,  84 => 38,  75 => 32,  66 => 26,  49 => 12,  41 => 6,  38 => 5,  29 => 3,);
    }
}
