<?php

/* VolunteerManagementSystemPagesBundle:Profilepage:profilepage.html.twig */
class __TwigTemplate_6bb05b5fac5bc738d08f6600505b125a extends Twig_Template
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
        echo "<?php
\$fname => \$user-> getFirstname();
\$lname => \$user->getLastname();
\$email => \$user->getEmail();
\$gender => \$user->getGender();
\$phone => \$user->getPhoneNumer();
        


?>
<div class=\"inner\">
                               <table width=\"398\" border=\"0\" align=\"center\" cellpadding=\"0\">
  <tr>
    <td height=\"26\" colspan=\"2\">Your Profile Information 
      </td>
\t<td><div align=\"right\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("account_logout");
        echo "\">logout</a></div></td>
  </tr>
  <tr>
    <td width=\"129\" rowspan=\"5\"><img src=\"\"<?php echo \$picture ?>\" alt=\"no image found\"/></td>
    <td width=\"82\" valign=\"top\"><div align=\"left\"><?php echo \$fname ?>:</div></td>
    <td width=\"165\" valign=\"top\"><?php echo \$fname ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\"><?php echo \$lname ?>:</div></td>
    <td valign=\"top\"><?php echo \$lname ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\"><?php echo \$gender ?>:</div></td>
    <td valign=\"top\"><?php echo \$gender ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\"><?php echo \$email ?>:</div></td>
    <td valign=\"top\"><?php echo \$Email ?></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\"><?php echo \$contact ?>: </div></td>
    <td valign=\"top\"><?php echo \$contact ?></td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Profilepage:profilepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
