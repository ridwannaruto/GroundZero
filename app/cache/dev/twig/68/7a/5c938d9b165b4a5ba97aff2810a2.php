<?php

/* VolunteerManagementSystemProfileBundle:editName:editName.html.twig */
class __TwigTemplate_687a5c938d9b165b4a5ba97aff2810a2 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "firstname"), 'row');
        echo " 
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "submit"), 'widget');
        echo "
      
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Last Name:";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["lname"]) ? $context["lname"] : $this->getContext($context, "lname")), "html", null, true);
        echo ":</div></td>
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Gender:";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "html", null, true);
        echo "</div></td>

  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Email Address:";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</div></td>
    
  </tr>
  <tr>
    <td valign=\"top\"><div align=\"left\">Contact Number:";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo " </div></td>
    
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemProfileBundle:editName:editName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  77 => 28,  70 => 24,  64 => 21,  57 => 17,  53 => 16,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
