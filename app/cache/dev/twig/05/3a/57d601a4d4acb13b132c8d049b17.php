<?php

/* VolunteerManagementSystemEventBundle:Default:createevent.html.twig */
class __TwigTemplate_053a57d601a4d4acb13b132c8d049b17 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Volma - Projects";
    }

    // line 5
    public function block_selectprojects($context, array $blocks = array())
    {
        echo " class=\"active\" ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayBlock('admin', $context, $blocks);
        // line 10
        echo "
<section class=\"container\">
    <div class=\"notify\">
        <h1>Create New Event</h1>
        <table height=\"387\" width=\"95%\">
            <tr>
                <th scope=\"row\" width=30%\"><p align=\"left\"><strong>Project</strong></p></th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["pname"]) ? $context["pname"] : $this->getContext($context, "pname")), "html", null, true);
        echo "</td>
                <td >&nbsp;</td>
                    <td >&nbsp;</td>
            </tr>
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            <tr>
                <th scope=\"row\"><p align=\"left\"><strong>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "</strong></p></th>
                    <td colspan=\"2\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <th scope=\"row\"><p align=\"left\"><strong>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "teamleader"), 'label');
        echo "</strong></p></th>
                    <td>&nbsp;";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "teamleader"), 'widget');
        echo "</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th scope=\"row\"><p align=\"left\"><strong>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight"), 'label');
        echo "</strong></p></th>
                    <td>&nbsp;";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight"), 'widget');
        echo "</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th scope=\"row\"><p align=\"left\"><strong>Description </strong></p></th>
                   <td colspan=\"3\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "</td> 
                    
                </tr>
                <tr>
                    <th scope=\"row\"><p align=\"left\"><strong>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goals"), 'label');
        echo " </strong></p></th>
                    <td colspan=\"3\">&nbsp;";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goals"), 'widget');
        echo " </td>
                    
                </tr>
                <tr>
                    <th scope=\"row\"><p align=\"left\"><strong >";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate"), 'label');
        echo "</strong></p></th>
                    <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate"), 'widget');
        echo " </td>
                   
                </tr>
                <tr>
                    <th scope=\"row\"><p align=\"left\"><strong>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "starttime"), 'label');
        echo "</strong></p></th>
                    <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "starttime"), 'widget');
        echo " </td>
                    
                </tr>
                
                
                 <tr>
                    <th scope=\"row\"><p align=\"left\"><strong> ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deadline"), 'label');
        echo "</strong></p></th>                    
                    <td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deadline"), 'widget');
        echo "</td>
                </tr>
                
                
                
                <tr>
                    <th scope=\"row\"><p align=\"left\"><strong >";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deadlinetime"), 'label');
        echo "</strong ></p></th>
                    <td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deadlinetime"), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th scope=\"row\"></th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th scope=\"row\">&nbsp;</th>
                    <td>&nbsp;</td>
                    
                    <td colspan=\"2\"><p align=\"right\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "</p></td>
                </tr>
            </table>






        </div>


    </section>


";
    }

    // line 8
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemEventBundle:Default:createevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 8,  185 => 85,  170 => 73,  166 => 72,  157 => 66,  153 => 65,  144 => 59,  140 => 58,  133 => 54,  129 => 53,  122 => 49,  118 => 48,  111 => 44,  102 => 38,  98 => 37,  90 => 32,  86 => 31,  77 => 25,  73 => 24,  68 => 22,  64 => 21,  57 => 17,  48 => 10,  46 => 8,  43 => 7,  37 => 5,  31 => 4,);
    }
}
