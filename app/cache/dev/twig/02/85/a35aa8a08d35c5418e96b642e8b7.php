<?php

/* VolunteerManagementSystemEventBundle:Confirm:eventconfirmation.html.twig */
class __TwigTemplate_0285a35aa8a08d35c5418e96b642e8b7 extends Twig_Template
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
        echo "Volma - Confirm event Creation
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1 align = \"center\"> Confirm event Creation</h1>
<p align=\"center\">
event has been created successfully!<br>
We have informed <strong>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</strong> about his appointment
</p>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemEventBundle:Confirm:eventconfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
