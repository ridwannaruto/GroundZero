<?php

/* VolunteerManagementSystemPagesBundle:Homepage:homepageadmin.html.twig */
class __TwigTemplate_b065fcf2c25e7d6bde72e39ce88408e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig");

        $this->blocks = array(
            'adminpromotion' => array($this, 'block_adminpromotion'),
            'adminevent' => array($this, 'block_adminevent'),
            'adminreport' => array($this, 'block_adminreport'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_adminpromotion($context, array $blocks = array())
    {
        // line 3
        echo "<p align=\"right\">
<a href=\"adminManagement?id=";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">

            <button>Admin Management</button></a>
        <a href=\"OverallReport?id=";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">

            <button type=\"submit\">Statistics</button></a>
 </p>

";
    }

    // line 13
    public function block_adminevent($context, array $blocks = array())
    {
        // line 14
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("just");
        echo "\" method=\"post\" >
        <p align=\"right\">
            <button type=\"submit\">Manage Events</button>
       </p>
</form>
";
    }

    // line 20
    public function block_adminreport($context, array $blocks = array())
    {
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Homepage:homepageadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  66 => 20,  55 => 14,  52 => 13,  42 => 7,  36 => 4,  33 => 3,  30 => 2,);
    }
}
