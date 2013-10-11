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

<<<<<<< HEAD
    // line 20
=======
    // line 18
>>>>>>> branch 'master' of https://github.com/ridwannaruto/GroundZero.git
    public function block_adminreport($context, array $blocks = array())
    {
<<<<<<< HEAD
        // line 21
=======
        // line 19
>>>>>>> branch 'master' of https://github.com/ridwannaruto/GroundZero.git
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
<<<<<<< HEAD
        return array (  69 => 21,  66 => 20,  55 => 14,  52 => 13,  42 => 7,  36 => 4,  33 => 3,  30 => 2,);
=======
        return array (  65 => 19,  62 => 18,  53 => 13,  49 => 11,  46 => 10,  36 => 4,  33 => 3,  30 => 2,);
>>>>>>> branch 'master' of https://github.com/ridwannaruto/GroundZero.git
    }
}
