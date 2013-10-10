<?php

/* VolunteerManagementSystemReportGenerationBundle:OverallReport:OverallReport.html.twig */
class __TwigTemplate_13a8db608961c6d50d6e9fb67c7215af extends Twig_Template
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
        echo "Volma - System Summery";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"price\">Summery</h2>  <br><br>

<div class=\"notify\">
    <h1 class=\"price\">Volunteers</h1>  <br><br>
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
            <td><strong>Number of Registered Volunteers</strong></td>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["noofusers"]) ? $context["noofusers"] : $this->getContext($context, "noofusers")), "html", null, true);
        echo "</td>

        </tr>
        <tr>
            <td height=\"34\">&nbsp;</td>
            <td><strong>Male Percentage</strong> </td>
            <td><script>

                var num = new Number(";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["noofmales"]) ? $context["noofmales"] : $this->getContext($context, "noofmales")), "html", null, true);
        echo " * 100 /";
        echo twig_escape_filter($this->env, (isset($context["noofusers"]) ? $context["noofusers"] : $this->getContext($context, "noofusers")), "html", null, true);
        echo ");
                var n = num.toPrecision(2);
                document.write(n);</script>%
                        
             </td>

                </tr>
                <tr>
                    <td height=\"34\">&nbsp;</td>
                    <td><strong>Female Percentage</strong> </td>
                    <td><script>

                        var num = new Number(";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["noofmales"]) ? $context["noofmales"] : $this->getContext($context, "noofmales")), "html", null, true);
        echo " * 100 /";
        echo twig_escape_filter($this->env, (isset($context["noofusers"]) ? $context["noofusers"] : $this->getContext($context, "noofusers")), "html", null, true);
        echo ");
                        var n = num.toPrecision(2);
                        document.write((100 - n));
                                </script>%</td>

                        </tr>
                        
                    </table>
                </div>


<div class=\"notify\">
    <h1 class=\"price\">Projects</h1>  <br><br>
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
            <td><strong>Number of Projects</strong></td>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["noofprojects"]) ? $context["noofprojects"] : $this->getContext($context, "noofprojects")), "html", null, true);
        echo "</td>
            

        </tr>
        <tr>
            <td height=\"34\">&nbsp;</td>
            <td><strong>Ongoing Projects</strong></td>
            <td>";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["noofongoingprojects"]) ? $context["noofongoingprojects"] : $this->getContext($context, "noofongoingprojects")), "html", null, true);
        echo "</td>
            <td></td>
            

        </tr>
        

    </table>
    
<p align =\"justify\"></p>
<p> <div class=\"inner\">
 <table width=\"398\" border=\"10\" align=\"center\" cellpadding=\"0\">
     
   ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ongoingprojects"]) ? $context["ongoingprojects"] : $this->getContext($context, "ongoingprojects")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 88
            echo "        <p>
        
        <div class=\"notify\" >
        <p align=\"left\"><strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getName", array(), "method"), "html", null, true);
            echo "</strong></p><p>
        <strong>Details: </strong>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDescription", array(), "method"), "html", null, true);
            echo "<br>
        
        </div>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "</div>
</div>
<div></div>
<div class=\"notify\">
    <h1 class=\"price\">Events</h1>  <br><br>
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
            <td><strong>Number of Events</strong></td>
            <td>";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["noofevents"]) ? $context["noofevents"] : $this->getContext($context, "noofevents")), "html", null, true);
        echo "</td>
            

        </tr>
        <tr>
            <td height=\"34\">&nbsp;</td>
            <td><strong>Ongoing Events</strong></td>
            <td>";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["noofongoingevents"]) ? $context["noofongoingevents"] : $this->getContext($context, "noofongoingevents")), "html", null, true);
        echo "</td>
            <td></td>
            

        </tr>
        

    </table>
    
<p align =\"justify\"></p>
<p> <div class=\"inner\">
 <table width=\"398\" border=\"10\" align=\"center\" cellpadding=\"0\">
     
   ";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ongoingevents"]) ? $context["ongoingevents"] : $this->getContext($context, "ongoingevents")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 135
            echo "        <p>
        
        <div class=\"notify\" >
        <p align=\"left\"><strong>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getName", array(), "method"), "html", null, true);
            echo "</strong></p><p>
        <strong>Details: </strong>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDescription", array(), "method"), "html", null, true);
            echo "<br>
        
        </div>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "</div></p>
</div>

";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemReportGenerationBundle:OverallReport:OverallReport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 144,  222 => 139,  218 => 138,  213 => 135,  209 => 134,  193 => 121,  183 => 114,  164 => 97,  153 => 92,  149 => 91,  144 => 88,  140 => 87,  124 => 74,  114 => 67,  84 => 42,  67 => 30,  56 => 22,  38 => 6,  35 => 5,  29 => 3,);
    }
}
