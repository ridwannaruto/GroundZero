<?php

/* VolunteerManagementSystemPagesBundle:Profilepage:editAddress.html.twig */
class __TwigTemplate_ce5525074ff236f5c6ab97560fe6c143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'selectprofile' => array($this, 'block_selectprofile'),
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
        echo "Volma - Profile";
    }

    // line 4
    public function block_selectprofile($context, array $blocks = array())
    {
        echo "class=\"active\" ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"inner\">
 <table width=\"93%\">
  <tr>
    <th width=\"18%\" height=\"33\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th width=\"18%\" rowspan=\"6\" scope=\"row\"><img src=\"file:///C|/wamp/www/volmaa/mm_product_lg.gif\" width=\"193\" height=\"189\" alt=\"ff\" /></th>
    <td width=\"3%\" height=\"35\">&nbsp;</td>
    <td width=\"18%\">User Name </td>
    <td width=\"55%\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</td>
    <td width=\"7%\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("edit_UserName");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>Password </td>
    <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("edit_Password");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>Name with Initials</td>
    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "namewithinitials"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>First Name </td>
    <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    <td></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>Last Name </td>
    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</td>
    <td></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>Nic</td>
    <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("edit_NIC");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td>Gender</td>
    <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("edit_Gender");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td>Date of Borth </td>
    <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateOfBirth"), "m/d/Y"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("edit_DOB");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>Email</td>
    <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("edit_Email");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>Mobile Number </td>
    <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("edit_MobileNumb");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>Contact Number </td>
    <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("edit_ContactNumb");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</td>
    <td>";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'row');
        echo "</td></td>
    <td>edit</td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td></td>
    <td>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'row');
        echo "</td>
    <td></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td></td>
    <td>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'row');
        echo "<p align=\"center\">
        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo " </p>";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "</td>
    <td></td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Profilepage:editAddress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 109,  220 => 108,  210 => 101,  200 => 94,  196 => 93,  192 => 92,  184 => 87,  180 => 86,  171 => 80,  167 => 79,  158 => 73,  154 => 72,  145 => 66,  141 => 65,  132 => 59,  128 => 58,  119 => 52,  115 => 51,  106 => 45,  97 => 39,  89 => 34,  85 => 33,  77 => 28,  73 => 27,  65 => 22,  61 => 21,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
