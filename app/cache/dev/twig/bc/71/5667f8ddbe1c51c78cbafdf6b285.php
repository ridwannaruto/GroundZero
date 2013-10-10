<?php

/* VolunteerManagementSystemPagesBundle:Newspage:newspage.html.twig */
class __TwigTemplate_bc715667f8ddbe1c51c78cbafdf6b285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'selectnews' => array($this, 'block_selectnews'),
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
        echo "Volma - News";
    }

    // line 5
    public function block_selectnews($context, array $blocks = array())
    {
        echo " class=\"active\" ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        $this->displayBlock('admin', $context, $blocks);
        // line 9
        echo "<h2 class=\"price\">News Feed</h2>
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 11
            echo " <p>
        
        <div class=\"notify\" >
        <p align=\"left\"><strong>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "heading", array(), "array"), "html", null, true);
            echo "</strong><br>
        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "description", array(), "array"), "html", null, true);
            echo "<br></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
";
    }

    // line 7
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Newspage:newspage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 7,  73 => 17,  65 => 16,  61 => 15,  55 => 11,  51 => 10,  48 => 9,  46 => 7,  43 => 6,  37 => 5,  31 => 3,);
    }
}
