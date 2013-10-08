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
    <td colspan=\"2\">";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "<p>User Name </p>
    
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'row');
        echo "<p align=\"center\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo " </p>";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "</td>
        <td width=\"7%\"></td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>Password </td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>Name with Initials</td>
    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "namewithinitials"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>First Name </td>
    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>Last Name </td>
    <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <td height=\"34\">&nbsp;</td>
    <td>Nic</td>
    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td>Gender</td>
    <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <th width=\"18%\" scope=\"row\">&nbsp;</th>
    <td height=\"34\">&nbsp;</td>
    <td>Date of Borth </td>
    <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>Email</td>
    <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>Mobile Number </td>
    <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>Contact Number </td>
    <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>Adress</td>
    <td>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>City</td>
    <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo "</td>
    <td>edit</td>
  </tr>
  <tr>
    <th height=\"34\" scope=\"row\">&nbsp;</th>
    <td>&nbsp;</td>
    <td>Country</td>
    <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo "</td>
    <td>edit</td>
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
        return array (  200 => 110,  190 => 103,  180 => 96,  170 => 89,  160 => 82,  150 => 75,  140 => 68,  130 => 61,  120 => 54,  111 => 48,  102 => 42,  93 => 36,  84 => 30,  73 => 24,  69 => 23,  65 => 22,  60 => 20,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
