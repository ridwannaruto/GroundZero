<?php

/* VolunteerManagementSystemRegistrationBundle:Registration:registration.html.twig */
class __TwigTemplate_fa902d1bb4ffa12dbff3371eeb2f34bd extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Volma - Registration";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo " <section class=\"container\">
    <div class=\"login\">
      <h1>Register</h1>
           
        
okjoj<br>
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
 </div>
        

  </section>


";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemRegistrationBundle:Registration:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  38 => 7,  35 => 6,  29 => 4,);
    }
}
