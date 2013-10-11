<?php

/* VolunteerManagementSystemPagesBundle:Error:adminerror.html.twig */
class __TwigTemplate_6e82cb87ca38ca1ec12d6e1ea025ec60 extends Twig_Template
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
        echo "Volma - Error";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "     <h1 align=\"center\">ERROR</h1><p align=\"center\">   
         
         <br>
         You do not have access privilege to  this page
     </p>

";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Error:adminerror.html.twig";
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
