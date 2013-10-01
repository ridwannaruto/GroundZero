<?php

/* VolunteerManagementSystemRegistrationBundle:Homepage:homepage.html.twig */
class __TwigTemplate_50452a50cdb6bf617a1a1c520d012b28 extends Twig_Template
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
        echo "Volma - Login";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<<<<<<< HEAD
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
    <td width=\"129\" rowspan=\"5\"><img src=\"\"<?php echo \$picture ?>\" alt=\"no image found\"/></td>
    <td width=\"82\" valign=\"top\"><div align=\"left\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["fname"]) ? $context["fname"] : $this->getContext($context, "fname")), "html", null, true);
        echo ":</div></td>
    <td width=\"165\" valign=\"top\"><?php echo \$fname ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["lname"]) ? $context["lname"] : $this->getContext($context, "lname")), "html", null, true);
        echo ":</div></td>
    <td valign=\"top\"><?php echo \$lname ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "html", null, true);
        echo ":</div></td>
    <td valign=\"top\"><?php echo \$gender ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo ":</div></td>
    <td valign=\"top\"><?php echo \$Email ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo ".: </div></td>
    <td valign=\"top\"><?php echo \$contact ?></td>
  </tr>
</table>
=======

<h1>You have sucessfully Registered!</h1>
>>>>>>> branch 'master' of https://github.com/ridwannaruto/GroundZero.git

";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemRegistrationBundle:Homepage:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  74 => 29,  67 => 25,  60 => 21,  53 => 17,  46 => 13,  38 => 7,  35 => 6,  29 => 3,);
    }
}
