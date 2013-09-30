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
        echo "Volma - Registration";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>You have sucessfully Registered!</h1>

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
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
