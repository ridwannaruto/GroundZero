<?php

/* VolunteerManagementSystemPagesBundle:Demote:success.html.twig */
class __TwigTemplate_f87911622a9bff05336891355b442dea extends Twig_Template
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
        echo "     <h1 align=\"center\">Success</h1><p align=\"center\">   
         
         <br>
         <strong>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</strong> is now an volunteer in the system
         <br>
         <br>
         <a href=\"home?id=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"><button>continue</button></a>
         
     </p>

";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Demote:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
