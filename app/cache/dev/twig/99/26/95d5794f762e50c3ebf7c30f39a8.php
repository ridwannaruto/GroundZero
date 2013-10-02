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
            'menu' => array($this, 'block_menu'),
            'selecthome' => array($this, 'block_selecthome'),
            'selectprofile' => array($this, 'block_selectprofile'),
            'selectnews' => array($this, 'block_selectnews'),
            'selectprojects' => array($this, 'block_selectprojects'),
            'selectcontacts' => array($this, 'block_selectcontacts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
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
        // line 29
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
        // line 40
        $this->displayBlock('menu', $context, $blocks);
        // line 57
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
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "                                        
                                    </p>
                                
                                
                                <p align=\"center\">Developed by<br>
                          <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/images/Footer.png"), "html", null, true);
        echo "\" width=\"190\" height=\"67\"></p></div></div>
                            <div class=\"container_12\"></div>
                        </div>
                    </div>
                </div>
            </div>\t
        </div>
       
    </section>
        
        ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Volma";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "       
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/grid.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"> 
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery-1.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery.galleriffic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery.opacityrollover.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>      
\t
   

";
    }

    // line 40
    public function block_menu($context, array $blocks = array())
    {
        // line 41
        echo "                \t<div class=\"grid_12\" >
                            
                    \t<nav>
                            <ul class=\"menu\">
                           
                                <li><a href=\"home?id=";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $this->displayBlock('selecthome', $context, $blocks);
        echo ">Home</a></li>
                                <li><a href=\"profile?id=";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " \"";
        $this->displayBlock('selectprofile', $context, $blocks);
        echo ">Profile</a></li>
                                       <li><a href=\"news?id=";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" ";
        $this->displayBlock('selectnews', $context, $blocks);
        echo ">News Feed</a></li>
                                <li><a href=\"projects?id=";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $this->displayBlock('selectprojects', $context, $blocks);
        echo ">Projects</a></li>
                             
                              <li><a href=\"contact?id=";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $this->displayBlock('selectcontacts', $context, $blocks);
        echo ">Contacts</a></li>
                            </ul>
                                
                        </nav>
                    </div>
                       ";
    }

    // line 46
    public function block_selecthome($context, array $blocks = array())
    {
    }

    // line 47
    public function block_selectprofile($context, array $blocks = array())
    {
    }

    // line 48
    public function block_selectnews($context, array $blocks = array())
    {
    }

    // line 49
    public function block_selectprojects($context, array $blocks = array())
    {
    }

    // line 51
    public function block_selectcontacts($context, array $blocks = array())
    {
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
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
        return array (  236 => 89,  231 => 73,  226 => 51,  221 => 49,  216 => 48,  211 => 47,  206 => 46,  194 => 51,  187 => 49,  181 => 48,  175 => 47,  169 => 46,  162 => 41,  159 => 40,  150 => 14,  146 => 13,  142 => 12,  138 => 11,  134 => 10,  130 => 9,  127 => 8,  124 => 7,  118 => 6,  112 => 90,  110 => 89,  97 => 79,  90 => 74,  88 => 73,  70 => 57,  68 => 40,  54 => 29,  42 => 19,  40 => 7,  36 => 6,  29 => 1,);
    }
}
