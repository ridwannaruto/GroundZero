<?php

/* VolunteerManagementSystemProjectBundle:ProjectView:projectviewadmin.html.twig */
class __TwigTemplate_86202aaa36e37fbd2c427274275f8205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VolunteerManagementSystemProjectBundle:Projectview:projectview.html.twig");

        $this->blocks = array(
            'createevent' => array($this, 'block_createevent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VolunteerManagementSystemProjectBundle:Projectview:projectview.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_createevent($context, array $blocks = array())
    {
        // line 4
        echo "<p align=\"right\">
    <a href=\"create_event?id=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "&projectId=";
        echo twig_escape_filter($this->env, (isset($context["pid"]) ? $context["pid"] : $this->getContext($context, "pid")), "html", null, true);
        echo "&pname=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getName", array(), "method"), "html", null, true);
        echo "\"><button>Create Event</button></a>
</p>
 ";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemProjectBundle:ProjectView:projectviewadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}
