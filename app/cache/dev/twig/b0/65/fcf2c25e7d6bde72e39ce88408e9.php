<?php

/* VolunteerManagementSystemPagesBundle:Homepage:homepageadmin.html.twig */
class __TwigTemplate_b065fcf2c25e7d6bde72e39ce88408e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig");

        $this->blocks = array(
            'admin' => array($this, 'block_admin'),
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
    public function block_admin($context, array $blocks = array())
    {
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
        return array (  28 => 2,);
    }
}
