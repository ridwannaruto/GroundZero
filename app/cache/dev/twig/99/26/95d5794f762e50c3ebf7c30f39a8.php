<?php

/* ::base.html.twig */
class __TwigTemplate_992695d5794f762e50c3ebf7c30f39a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'selecthome' => array($this, 'block_selecthome'),
            'selectprofile' => array($this, 'block_selectprofile'),
            'selectnews' => array($this, 'block_selectnews'),
            'selectprojects' => array($this, 'block_selectprojects'),
            'selectcontacts' => array($this, 'block_selectcontacts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/Forms.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"> 
        
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/grid.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"> 
        
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery-1.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery.galleriffic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery.opacityrollover.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>      
\t
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "      
    </head>
    <body>
        <!--==============================header=================================-->
    <header>
    \t
        <div class=\"row-2\">
        \t<div class=\"main\">
            \t<div class=\"container_12\">
                \t<div class=\"grid_9\"><br>
                    \t<h2 align=\"center\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/images/volma.png"), "html", null, true);
        echo "\" width=\"245\" height=\"100\"></h2>
                    \t<h2 align=\"center\"><span class=\"price\">Volunteer Management System</span></h2>
                    </div>
                \t<div class=\"clear\"></div>
                </div>
            </div>
        </div> 
        
        <div class=\"row-1\">
       \t  <div class=\"main\">
            \t<div class=\"container_12\" >
                \t";
        // line 43
        $this->displayBlock('menu', $context, $blocks);
        // line 62
        echo "                </div>
             
            </div>
        </div>   \t
    </header>    
<!-- content -->
    <section id=\"content\">
        <div class=\"bg-top\">
        \t<div class=\"bg-top-2\">
                <div class=\"bg\">
                    <div class=\"bg-top-shadow\">
                        <div class=\"main\">
                            <div class=\"gallery p3\">
                              <div class=\"inner\">
                              
                                <p>
                                    ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "                                        
                                    </p>
                                
                                
                                <p align=\"center\">Developed by<br>
                          <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/images/Footer.png"), "html", null, true);
        echo "\" width=\"190\" height=\"67\"></p></div></div>
                            <div class=\"container_12\"></div>
                        </div>
                    </div>
                </div>
            </div>\t
        </div>
       
    </section>
        
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Volma";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "
    ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        // line 44
        echo "                \t<div class=\"grid_12\" >
                            
                    \t<nav>
                            <ul class=\"menu\">
                           
                                <li><a href=\"home?id=";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $this->displayBlock('selecthome', $context, $blocks);
        echo ">Home</a></li>
                                <li><a href=\"profile?id=";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " \"";
        $this->displayBlock('selectprofile', $context, $blocks);
        echo ">Profile</a></li>
                                       <li><a href=\"news?id=";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" ";
        $this->displayBlock('selectnews', $context, $blocks);
        echo ">News Feed</a></li>
                                <li><a href=\"projects?id=";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $this->displayBlock('selectprojects', $context, $blocks);
        echo ">Projects</a></li>
                             
                              <li><a href=\"contact?id=";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $this->displayBlock('selectcontacts', $context, $blocks);
        echo ">Contacts</a></li>
                             <li><a href=\"logout\">Log Out</a></li>
                           
                            </ul>
                                
                        </nav>
                    </div>
                       ";
    }

    // line 49
    public function block_selecthome($context, array $blocks = array())
    {
    }

    // line 50
    public function block_selectprofile($context, array $blocks = array())
    {
    }

    // line 51
    public function block_selectnews($context, array $blocks = array())
    {
    }

    // line 52
    public function block_selectprojects($context, array $blocks = array())
    {
    }

    // line 54
    public function block_selectcontacts($context, array $blocks = array())
    {
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 78,  237 => 54,  232 => 52,  227 => 51,  222 => 50,  217 => 49,  203 => 54,  196 => 52,  190 => 51,  184 => 50,  178 => 49,  171 => 44,  168 => 43,  163 => 21,  158 => 19,  155 => 18,  149 => 6,  132 => 84,  125 => 79,  123 => 78,  105 => 62,  103 => 43,  89 => 32,  77 => 22,  74 => 21,  72 => 18,  67 => 16,  63 => 15,  59 => 14,  54 => 12,  50 => 11,  46 => 10,  41 => 8,  36 => 6,  29 => 1,);
    }
}
