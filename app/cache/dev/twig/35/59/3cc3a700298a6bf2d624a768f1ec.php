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
    </table>
</div>
        </section>
        
    
    
<p align =\"justify\"></p>
<p> <div class=\"inner\">
    <h2 class=\"price\">Comments</h2>
 <table width=\"398\" border=\"10\" align=\"center\" cellpadding=\"0\">
   ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 50
            echo "        <p>
        
        <div class=\"notify\" >
        <p align=\"center\"><strong>\"";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "html", null, true);
            echo "\"</strong></p><p>
              
        
        </div>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        
       
</table></div></p>

<p align =\"justify\"></p>
<p> <div class=\"inner\">
    <h2 class=\"price\">Projects Participated</h2>
 <table width=\"398\" border=\"10\" align=\"center\" cellpadding=\"0\">
   ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 68
            echo "        <p>
        
        <div class=\"notify\" >
        <p align=\"center\"><strong></strong></p><p>
       <strong>Project Name: </strong>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getName", array(), "method"), "html", null, true);
            echo "<br>
       <strong>Details: </strong>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDescription", array(), "method"), "html", null, true);
            echo "<br>
        
        </div>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        
       
</table></div></p>


<p> </p>
    
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
        return array (  150 => 78,  139 => 73,  135 => 72,  129 => 68,  125 => 67,  115 => 59,  103 => 53,  98 => 50,  94 => 49,  78 => 36,  69 => 30,  58 => 24,  38 => 6,  35 => 5,  29 => 3,);
    }
}
