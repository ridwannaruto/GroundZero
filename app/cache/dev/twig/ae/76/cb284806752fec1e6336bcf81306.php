<?php

/* VolunteerManagementSystemWorkshopBundle:submit:confirm.html.twig */
class __TwigTemplate_ae76cb284806752fec1e6336bcf81306 extends Twig_Template
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
        echo "Volma - Success
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1 align = \"center\"> Confirm Workshop Creation</h1>
<p align=\"center\">
Workshop has been created successfully!</p>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemWorkshopBundle:submit:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
