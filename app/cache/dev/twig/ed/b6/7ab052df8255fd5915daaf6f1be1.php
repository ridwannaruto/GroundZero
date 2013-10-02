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
        echo "
<div class=\"inner\">
                               <table width=\"398\" border=\"0\" align=\"center\" cellpadding=\"0\">
  <tr>
    <td height=\"26\" colspan=\"2\">Your Profile Information 
      </td>
\t<td><div align=\"right\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("account_logout");
        echo "\">logout</a></div></td>
  </tr>
  <tr>
    <td width=\"129\" rowspan=\"5\"><img src=\"<?php echo \$picture ? >\" alt=\"no image found\" align=\"right\"/></td>
    <td width=\"82\" valign=\"top\"><div align=\"left\">First Name:";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["fname"]) ? $context["fname"] : $this->getContext($context, "fname")), "html", null, true);
        echo "</div></td>
    <td width=\"165\" valign=\"top\"><?php echo \$fname ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Last Name:";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["lname"]) ? $context["lname"] : $this->getContext($context, "lname")), "html", null, true);
        echo ":</div></td>
    <td valign=\"top\"><?php echo \$lname ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Gender:";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "html", null, true);
        echo "</div></td>
    <td valign=\"top\"><?php echo \$gender ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Email Address:";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</div></td>
    <td valign=\"top\"><?php echo \$Email ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Contact Number:";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo " </div></td>
    <td valign=\"top\"><?php echo \$contact ?></td>
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
        return array (  88 => 33,  81 => 29,  74 => 25,  67 => 21,  60 => 17,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
