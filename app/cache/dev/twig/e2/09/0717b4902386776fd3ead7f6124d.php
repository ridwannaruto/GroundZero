<?php

/* VolunteerManagementSystemProfileBundle:EditName:editName.html.twig */
class __TwigTemplate_e2090717b4902386776fd3ead7f6124d extends Twig_Template
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
        echo "VolunteerManagementSystemProfileBundle:EditName:editName";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"inner\">
                               <table width=\"398\" border=\"0\" align=\"center\" cellpadding=\"0\">
  <tr>
    <td height=\"26\" colspan=\"2\">Your Profile Information 
      </td>
\t<td><div align=\"right\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("account_logout");
        echo "\">logout</a></div></td>
  </tr>
  <tr>
    <td width=\"129\" rowspan=\"5\"><img src=\"<?php echo \$picture ? >\" alt=\"no image found\" align=\"right\"/></td>
   
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'row');
        echo " 
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Last Name:</div></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Gend</div></td>

  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Email Address:</div></td>
    
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Contact Number </div></td>
    
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemProfileBundle:EditName:editName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  53 => 16,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
