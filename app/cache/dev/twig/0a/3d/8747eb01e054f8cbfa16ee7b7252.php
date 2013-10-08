<?php

/* VolunteerManagementSystemPagesBundle:Profilepage:editPassword.html.twig */
class __TwigTemplate_0a3d8747eb01e054f8cbfa16ee7b7252 extends Twig_Template
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
      <p align=\"center\">
    <img src=\"file:///C|/wamp/www/volmaa/mm_product_lg.gif\" width=\"193\" height=\"189\" alt=\"ff\" /></th>
   </p>
                          <table width=\"92%\" border=\"1\">
  <tr>
    
  </tr>
  <tr>
 <tr>
    <th width=\"18%\" rowspan=\"6\" scope=\"row\"><td width=\"3%\" height=\"35\">&nbsp;</td>
    <td width=\"18%\"><strong>User Name</strong> </td>
    <td width=\"55%\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</td>
    <td width=\"7%\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("edit_UserName");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "<strong>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo "</strong></td><td>
    
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo " ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "</td>
        <td width=\"7%\"></td>
  </tr><br><br>
  
   <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Name with Initials</strong></td>
    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "namewithinitials"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>First Name</strong> </td>
    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Last Name </strong></td>
    <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>NIC</strong></td>
    <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("edit_NIC");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Gender</strong></td>
    <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("edit_Gender");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Date of Birth </strong></td>
    <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateOfBirth"), "m/d/Y"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("edit_DOB");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Email</strong></td>
    <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("edit_Email");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Mobile Number</strong> </td>
    <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("edit_MobileNumb");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Contact Number </strong></td>
    <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("edit_ContactNumb");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Address</strong></td>
    <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>City</strong</td>
    <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Country</strong></td>
    <td>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\">edit</a></td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Profilepage:editPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 110,  237 => 109,  228 => 103,  224 => 102,  215 => 96,  211 => 95,  202 => 89,  198 => 88,  189 => 82,  185 => 81,  176 => 75,  172 => 74,  163 => 68,  159 => 67,  150 => 61,  146 => 60,  137 => 54,  133 => 53,  125 => 48,  121 => 47,  113 => 42,  109 => 41,  101 => 36,  97 => 35,  85 => 28,  81 => 27,  77 => 26,  70 => 24,  64 => 21,  60 => 20,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
