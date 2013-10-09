<?php

/* VolunteerManagementSystemProjectBundle:ProjectView:projectview.html.twig */
class __TwigTemplate_71d96387c030201fece929c227bf7ddc extends Twig_Template
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
        // line 4
        echo "Volma - Projects
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1 class=\"price\" align = \"center\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getName", array(), "method"), "html", null, true);
        echo "</h1>
<section class=\"container\">
    <div class=\"notify\">
<h1>Basic Information</h1>
<p align=\"left\">
<strong>Description</strong>
<br>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getDescription", array(), "method"), "html", null, true);
        echo "<br><br>
<strong>Objectives</strong>
<br>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "getObjectives", array(), "method"), "html", null, true);
        echo "<br><br>
<strong>Project Manager</strong>
<br>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")), "getFirstname", array(), "method"), "html", null, true);
        echo "<br><br><br>


<h1>Events</h1>



<h1>Volunteers</h1>
</p>
</div></section>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemProjectBundle:ProjectView:projectview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  55 => 15,  50 => 13,  40 => 7,  37 => 6,  32 => 4,  29 => 3,);
    }
}
