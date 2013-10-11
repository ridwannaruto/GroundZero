<?php

/* VolunteerManagementSystemPagesBundle:Newspage:newspageadmin.html.twig */
class __TwigTemplate_460e22b904766892ee2d71067f958769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VolunteerManagementSystemPagesBundle:Newspage:newspage.html.twig");

        $this->blocks = array(
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VolunteerManagementSystemPagesBundle:Newspage:newspage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_admin($context, array $blocks = array())
    {
        // line 4
        echo "<p align=\"right\">
    <a href=\"createNews?id=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        <button>Create News</button></a>
    <a href=\"workshopCreate?id=";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        <button>Create Workshop</button></a>
</p>

";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Newspage:newspageadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
