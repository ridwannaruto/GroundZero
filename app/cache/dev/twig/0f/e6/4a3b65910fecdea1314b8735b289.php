<?php

/* VolunteerManagementSystemPagesBundle:Projectspage:projectspageadmin.html.twig */
class __TwigTemplate_0fe64a3b65910fecdea1314b8735b289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VolunteerManagementSystemPagesBundle:Projectspage:projectspage.html.twig");

        $this->blocks = array(
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VolunteerManagementSystemPagesBundle:Projectspage:projectspage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_admin($context, array $blocks = array())
    {
        // line 4
        echo "<form action=\"projectcreation?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"post\" >
<p align=\"right\">
            <button type=\"submit\">Create Project</button>
 </p>
</form>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Projectspage:projectspageadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
