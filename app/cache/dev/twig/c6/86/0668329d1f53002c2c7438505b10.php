<?php

/* VolunteerManagementSystemRegistrationBundle:Submission:submission.html.twig */
class __TwigTemplate_c6860668329d1f53002c2c7438505b10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Volma - Registration";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<h1>Please fill in the form correctly</h1>

";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemRegistrationBundle:Submission:submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  41 => 4,  36 => 3,  30 => 2,);
    }
}
