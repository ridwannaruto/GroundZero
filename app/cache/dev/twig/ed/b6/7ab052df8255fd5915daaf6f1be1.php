<?php

/* VolunteerManagementSystemPagesBundle:profilepage:profilepage.html.twig */
class __TwigTemplate_edb67ab052df8255fd5915daaf6f1be1 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("just");
        echo "\" method=\"post\" >
<p align=\"right\">
            <button type=\"submit\">Generate Career Report</button>
 </p>
</form>
<div class=\"inner\">
    
        <div class=\"propic\" >
   <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/images/me.jpg"), "html", null, true);
        echo "\" width=\"200\" height=\"200\"></h2>
             </div>       \t
 <table width=\"93%\">
  <tr>
    <th width=\"18%\" height=\"33\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th width=\"18%\" rowspan=\"6\" scope=\"row\"> <td width=\"3%\" height=\"35\">&nbsp;</td>
    <td width=\"18%\"><strong>User Name</strong> </td>
    <td width=\"55%\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</td>
    <td width=\"7%\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("edit_UserName");
        echo "\">edit</a></td>
  </tr>
  
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Password </strong></td>
    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("edit_Password");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Name with Initials</strong></td>
    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "namewithinitials"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>First Name</strong> </td>
    <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Last Name </strong></td>
    <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>NIC</strong></td>
    <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("edit_NIC");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Gender</strong></td>
    <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("edit_Gender");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Date of Birth </strong></td>
    <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateOfBirth"), "m/d/Y"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("edit_DOB");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Email</strong></td>
    <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("edit_Email");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Mobile Number</strong> </td>
    <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("edit_MobileNumb");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Contact Number </strong></td>
    <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("edit_ContactNumb");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Address</strong></td>
    <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>City</strong</td>
    <td>";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Country</strong></td>
    <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\">edit</a></td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:profilepage:profilepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 116,  238 => 115,  229 => 109,  225 => 108,  216 => 102,  212 => 101,  203 => 95,  199 => 94,  190 => 88,  186 => 87,  177 => 81,  173 => 80,  164 => 74,  160 => 73,  151 => 67,  147 => 66,  138 => 60,  134 => 59,  126 => 54,  122 => 53,  114 => 48,  110 => 47,  102 => 42,  98 => 41,  90 => 36,  86 => 35,  77 => 29,  73 => 28,  57 => 15,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
