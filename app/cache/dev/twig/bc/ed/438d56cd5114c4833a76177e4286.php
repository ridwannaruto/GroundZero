<?php

/* VolunteerManagementSystemPagesBundle:Projectspage:projectspage.html.twig */
class __TwigTemplate_bced438d56cd5114c4833a76177e4286 extends Twig_Template
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
        echo "List of projects<br><br>
 ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " 
        <div class=\"notify\" >
        <p align=\"left\"><a href=\"project_view?id=";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "&pid=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "getId", array(), "method"), "html", null, true);
            echo "\"<strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "getName", array(), "method"), "html", null, true);
            echo "</strong></a></p>
        </div>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 7
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Projectspage:projectspage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  58 => 12,  51 => 10,  48 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
