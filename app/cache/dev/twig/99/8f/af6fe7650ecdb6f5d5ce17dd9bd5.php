<?php

/* VolunteerManagementSystemEventBundle:Default:event.html.twig */
class __TwigTemplate_998faf6fe7650ecdb6f5d5ce17dd9bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Volma - Registration";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " <section class=\"container\">
    <div class=\"login\">
      <h1>Register</h1>
      ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
        
        
        
        
        
 
        
 
    </div>
        

  </section>


";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemEventBundle:Default:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 8,  41 => 7,  36 => 5,  30 => 4,);
    }
}
