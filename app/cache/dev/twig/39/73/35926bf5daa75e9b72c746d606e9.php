<?php

/* VolunteerManagementSystemEventBundle:Task:new.html.twig */
class __TwigTemplate_397335926bf5daa75e9b72c746d606e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'selectprojects' => array($this, 'block_selectprojects'),
            'body' => array($this, 'block_body'),
            'admin' => array($this, 'block_admin'),
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
        echo "Volma - Projects";
    }

    // line 4
    public function block_selectprojects($context, array $blocks = array())
    {
        echo " class=\"active\" ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        $this->displayBlock('admin', $context, $blocks);
        // line 9
        echo " <h2 class=\"price\">Rate Volunteers</h2>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
           
    ";
        // line 14
        echo "    

    
   
        ";
        // line 19
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rates"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 20
            echo "           <section class=\"container\">
            <div class=\"notify\">
            ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name"), 'widget');
            echo "<br><br>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "rate"), 'label');
            echo "<br>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "rate"), 'widget');
            echo "<br>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "comment"), 'label');
            echo "<br>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "comment"), 'widget');
            echo "
        </div> </section>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  
        <p align = \"center\"> 
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "
";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </p>
            <br><br>
           
   
    
";
    }

    // line 7
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemEventBundle:Task:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 7,  97 => 28,  93 => 27,  89 => 25,  72 => 22,  68 => 20,  63 => 19,  57 => 14,  52 => 11,  48 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
