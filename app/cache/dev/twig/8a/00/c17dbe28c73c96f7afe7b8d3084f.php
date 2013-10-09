<?php

/* VolunteerManagementSystemPagesBundle:Profilepage:editUserName.html.twig */
class __TwigTemplate_8a00c17dbe28c73c96f7afe7b8d3084f extends Twig_Template
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
     <div class=\"propic\" >
   <img src=\"";
        // line 10
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
    <th width=\"18%\" rowspan=\"6\" scope=\"row\">
    <td width=\"3%\" height=\"35\">&nbsp;</td>
    <td height=\"34\">";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "<strong>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
        echo "</strong></td><td>
        
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo " ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "</td>
        <td width=\"7%\"></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Password </strong></td>
    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("edit_Password");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Name with Initials</strong></td>
    <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "namewithinitials"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>First Name</strong> </td>
    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Last Name </strong></td>
    <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("edit_Name");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td><strong>NIC</strong></td>
    <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("edit_NIC");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Gender</strong></td>
    <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("edit_Gender");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td><strong>Date of Birth </strong></td>
    <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateOfBirth"), "m/d/Y"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("edit_DOB");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Email</strong></td>
    <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("edit_Email");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Mobile Number</strong> </td>
    <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("edit_MobileNumb");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Contact Number </strong></td>
    <td>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("edit_ContactNumb");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Address</strong></td>
    <td>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>City</strong</td>
    <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\"><button>edit</button></a></td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td><strong>Country</strong></td>
    <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("edit_Address");
        echo "\"><button>edit</button></a></td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Profilepage:editUserName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 115,  245 => 114,  236 => 108,  232 => 107,  223 => 101,  219 => 100,  210 => 94,  206 => 93,  197 => 87,  193 => 86,  184 => 80,  180 => 79,  171 => 73,  167 => 72,  158 => 66,  154 => 65,  145 => 59,  141 => 58,  133 => 53,  129 => 52,  121 => 47,  117 => 46,  109 => 41,  105 => 40,  97 => 35,  93 => 34,  82 => 28,  78 => 27,  71 => 25,  66 => 23,  50 => 10,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
