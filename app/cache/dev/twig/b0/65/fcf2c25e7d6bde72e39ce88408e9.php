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

    // line 14
    public function block_adminreport($context, array $blocks = array())
    {
        // line 15
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
        return array (  54 => 15,  51 => 14,  41 => 7,  35 => 4,  32 => 3,  29 => 2,);
    }
}
