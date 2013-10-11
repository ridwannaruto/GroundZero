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
        echo "<h1 class=\"price\">Summary</h1>  <br><br>
<section class=\"container\">
    <div class=\"notify\">
        <h2 class=\"price\">Volunteers</h2>  <br><br>
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

                </section>
                <section class=\"container\">
                    <div class=\"notify\">
                        <h2 class=\"price\">Projects</h2>  <br><br>
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
        // line 68
        echo twig_escape_filter($this->env, (isset($context["noofprojects"]) ? $context["noofprojects"] : $this->getContext($context, "noofprojects")), "html", null, true);
        echo "</td>


                            </tr>
                            <tr>
                                <td height=\"34\">&nbsp;</td>
                                <td><strong>Ongoing Projects</strong></td>
                                <td>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["noofongoingprojects"]) ? $context["noofongoingprojects"] : $this->getContext($context, "noofongoingprojects")), "html", null, true);
        echo "</td>
                                <td></td>


                            </tr>


                        </table>
                        <br>
                        <h2 class=\"justify\">Current Projects </h2>
                        <p align =\"justify\"></p>
                        <p> <div class=\"inner\">
                            <table width=\"398\" border=\"10\" align=\"center\" cellpadding=\"0\">

   ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ongoingprojects"]) ? $context["ongoingprojects"] : $this->getContext($context, "ongoingprojects")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 90
            echo "                                <p>

                                <div class=\"notify\" >
                                    <p align=\"left\"><strong>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getName", array(), "method"), "html", null, true);
            echo "</strong></p><p>
                                        <strong>Details: </strong>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDescription", array(), "method"), "html", null, true);
            echo "<br>

                                </div>
                                </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                            </table>
                   
                </section>
<section class=\"container\">
                    <div class=\"notify\" >
                        <h2 class=\"price\">Events</h1>  <br><br>
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
        // line 117
        echo twig_escape_filter($this->env, (isset($context["noofevents"]) ? $context["noofevents"] : $this->getContext($context, "noofevents")), "html", null, true);
        echo "</td>


                            </tr>
                            <tr>
                                <td height=\"34\">&nbsp;</td>
                                <td><strong>Ongoing Events</strong></td>
                                <td>";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["noofongoingevents"]) ? $context["noofongoingevents"] : $this->getContext($context, "noofongoingevents")), "html", null, true);
        echo "</td>
                                <td></td>


                            </tr>


                        </table>

                        <p align =\"justify\"></p>
                        <p> <div class=\"inner\">
                            <table width=\"398\" border=\"10\" align=\"center\" cellpadding=\"0\">

   ";
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ongoingevents"]) ? $context["ongoingevents"] : $this->getContext($context, "ongoingevents")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 138
            echo "                                <p>

                                <div class=\"notify\" >
                                    <p align=\"left\"><strong>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getName", array(), "method"), "html", null, true);
            echo "</strong></p><p>
                                        <strong>Details: </strong>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "getDescription", array(), "method"), "html", null, true);
            echo "<br>

                                </div>
                                </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                        </div></table></p>
                    </div>
                </section>
<br><br>
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
        return array (  236 => 147,  225 => 142,  221 => 141,  216 => 138,  212 => 137,  196 => 124,  186 => 117,  166 => 99,  155 => 94,  151 => 93,  146 => 90,  142 => 89,  125 => 75,  115 => 68,  84 => 42,  67 => 30,  56 => 22,  38 => 6,  35 => 5,  29 => 3,);
    }
}
