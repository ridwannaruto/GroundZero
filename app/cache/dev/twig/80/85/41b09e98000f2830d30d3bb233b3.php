<?php

/* VolunteerManagementSystemRegistrationBundle:Default:index.html.twig */
class __TwigTemplate_808541b09e98000f2830d30d3bb233b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "!
<BR>
";
        // line 3
        echo twig_escape_filter($this->env, twig_reverse_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "
<BR>
<!DOCTYPE html>
<html>
<head>
<style>
div.ex
{
width:220px;
padding:10px;
border:5px solid gray;
margin:0px;
}
</style>
</head>

<body>

<div class=\"ex\">The picture above is 250px wide.
The total width of this element is also 250px.</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemRegistrationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
