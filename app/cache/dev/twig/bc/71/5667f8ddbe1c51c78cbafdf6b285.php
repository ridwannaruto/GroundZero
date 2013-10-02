<?php

/* VolunteerManagementSystemPagesBundle:Newspage:newspage.html.twig */
class __TwigTemplate_bc715667f8ddbe1c51c78cbafdf6b285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'selectnews' => array($this, 'block_selectnews'),
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
        echo "Volma - News";
    }

    // line 5
    public function block_selectnews($context, array $blocks = array())
    {
        echo " class=\"active\" ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "News Feed
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Newspage:newspage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  42 => 6,  36 => 5,  30 => 3,);
    }
}
