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
        echo "
<form action=\"adminManagement?id=";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"post\" >
<p align=\"right\">
            <button type=\"submit\">Admin Management</button>
 </p>
</form>
";
    }

    // line 10
    public function block_adminevent($context, array $blocks = array())
    {
        // line 11
        echo "
        <p align=\"right\">
            <a href=\"manage_event?id=";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"<strong><button type=\"submit\">Manage Events</button></strong></a>
            
       </p>

";
    }

    // line 18
    public function block_adminreport($context, array $blocks = array())
    {
        // line 19
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
        return array (  65 => 19,  62 => 18,  53 => 13,  49 => 11,  46 => 10,  36 => 4,  33 => 3,  30 => 2,);
    }
}
