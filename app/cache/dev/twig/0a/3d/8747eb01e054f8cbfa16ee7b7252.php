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
 <table width=\"93%\">
  <tr>
    <th width=\"18%\" height=\"33\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th width=\"18%\" rowspan=\"6\" scope=\"row\">
    <td width=\"3%\" height=\"35\">&nbsp;</td>
    <td height=\"34\"><strong>User Name</strong></td>
    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</td>
        <td width=\"7%\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("edit_UserName");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "<strong> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo "</strong></td>
        <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "<p align=\"right\">
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo " ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "</p></td>
    <td></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Name with Initials</strong></td>
    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "namewithinitials"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>First Name</strong> </td>
    <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Last Name </strong></td>
    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>NIC</strong></td>
    <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("edit_NIC");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Gender</strong></td>
    <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("edit_Gender");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Date of Birth </strong></td>
    <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateOfBirth"), "m/d/Y"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("edit_DOB");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Email</strong></td>
    <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("edit_Email");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Mobile Number</strong> </td>
    <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("edit_MobileNumb");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Contact Number </strong></td>
    <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("edit_ContactNumb");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Address</strong></td>
    <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>City</strong</td>
    <td>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Country</strong></td>
    <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\"><button>edit</button></a></td>
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
        return array (  244 => 113,  240 => 112,  231 => 106,  227 => 105,  218 => 99,  214 => 98,  205 => 92,  201 => 91,  192 => 85,  188 => 84,  179 => 78,  175 => 77,  166 => 71,  162 => 70,  153 => 64,  149 => 63,  140 => 57,  136 => 56,  128 => 51,  124 => 50,  116 => 45,  112 => 44,  104 => 39,  100 => 38,  89 => 32,  85 => 31,  79 => 30,  75 => 29,  68 => 25,  64 => 24,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
