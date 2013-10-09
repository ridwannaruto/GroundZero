<?php

/* VolunteerManagementSystemPagesBundle:Contactpage:contactpage.html.twig */
class __TwigTemplate_0fe16c486c820a2507e5c29c93e0c4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'selectcontacts' => array($this, 'block_selectcontacts'),
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
        echo "Volma - Contacts";
    }

    // line 4
    public function block_selectcontacts($context, array $blocks = array())
    {
        echo " class=\"active\" ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<section class=\"container\">
    <div class=\"notify\">
        <h1>Search Volunteers</h1>
       
   <strong> ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</strong><t>
<p align=\"center\">         
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'widget');
        echo "   
        
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </p>
       </div></section>
<section class=\"container\">
    <div class=\"notify\" width=500>
        <h1>Contact List </h1>
        <table width=90%>
    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 25
            echo "        <tr><td>
        <strong>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "firstname", array(), "array"), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "lastname", array(), "array"), "html", null, true);
            echo "</td><td></strong>
        
        ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "email", array(), "array"), "html", null, true);
            echo "</td><td>
        ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "mobilenumber", array(), "array"), "html", null, true);
            echo "</td><td>
        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "accesslevel", array(), "array"), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>
        </div></section>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Contactpage:contactpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  101 => 30,  97 => 29,  93 => 28,  86 => 26,  83 => 25,  79 => 24,  69 => 17,  65 => 16,  60 => 14,  55 => 12,  51 => 11,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
