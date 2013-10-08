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
    <div class=\"login\">
        <h1>Search Volunteers</h1>
     <p align=\"center\">   
   <strong> ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</strong><br>
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'row');
        echo "   
        </p><p align=\"right\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </p>
       </div></section>
<section class=\"container\">
    <div class=\"login\" width=500>
        <h1>Contact List </h1>
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 23
            echo "        <p>
        <strong>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "firstname", array(), "array"), "html", null, true);
            echo "</strong><br>
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "lastname", array(), "array"), "html", null, true);
            echo "<br>
        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "email", array(), "array"), "html", null, true);
            echo "<br>
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "mobilenumber", array(), "array"), "html", null, true);
            echo "<br>
        ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "accesslevel", array(), "array"), "html", null, true);
            echo "
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div></section>
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
        return array (  109 => 31,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  81 => 23,  77 => 22,  68 => 16,  64 => 15,  59 => 13,  55 => 12,  51 => 11,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
