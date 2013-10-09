<?php

/* VolunteerManagementSystemProjectBundle:ProjectCreation:projectcreation.html.twig */
class __TwigTemplate_c787d18930b1e5b4d3c2e817c8da8889 extends Twig_Template
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
        echo "Volma - Project Creation";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " <section class=\"container\">
    <div class=\"notify\">
      <h1>Enter Project Information</h1>
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      <strong>Project Name</strong><br>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "        
        <br><br>
        <strong>Project Description</strong><br>        
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "        
        <br><br>
        <strong>Project Objectives</strong><br>   
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objectives"), 'widget');
        echo "        
        <br><br>
        <strong>Project Manager</strong><br>   
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projectmanager"), 'widget');
        echo "        
        <br><br>
        <strong>Start Date</strong><br>   
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate"), 'widget');
        echo "        
        <br><br>
        <strong>End Date</strong><br>   
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate"), 'widget');
        echo "        
        <br><br>
        <p align=\"right\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </p>
    </div>
        

  </section>


";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemProjectBundle:ProjectCreation:projectcreation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  88 => 30,  82 => 27,  76 => 24,  70 => 21,  64 => 18,  58 => 15,  52 => 12,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
