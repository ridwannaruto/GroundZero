<?php

/* VolunteerManagementSystemPagesBundle:Promote:error.html.twig */
class __TwigTemplate_f8d6110e8ddcb2fb16e178ab461f79dc extends Twig_Template
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
        echo "you have not sucessfully promoted to admin

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Promote:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
