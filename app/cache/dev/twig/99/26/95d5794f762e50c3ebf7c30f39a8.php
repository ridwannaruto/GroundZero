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
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
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
        // line 28
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
                \t
                \t<div class=\"grid_12\" >
                    \t<nav>
                            <ul class=\"menu\">
                           
                                <li><a href=\"index.html\">Home</a></li>
                                <li><a href=\"services.html\">Profile</a></li>
                                       <li><a href=\"services.html\">News Feed</a></li>
                                <li><a href=\"catalogue.html\">Projects</a></li>
                             
                              <li><a href=\"contacts.html\">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
             
            </div>
        </div>   \t
    </header><div class=\"ic\">More Website Templates  @ TemplateMonster.com - August22nd 2011!</div>
    
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
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "                                        
                                    </p>
                                
                                
                                <p align=\"center\">Developed by<br>
                          <img src=\"";
        // line 76
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
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Volma";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "       
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/CSS/grid.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"> 
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery-1.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery.galleriffic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/JS/jquery.opacityrollover.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>      
\t
   

";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
    }

    // line 86
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
        return array (  168 => 86,  163 => 70,  154 => 13,  150 => 12,  146 => 11,  142 => 10,  138 => 9,  134 => 8,  131 => 7,  128 => 6,  122 => 5,  116 => 87,  114 => 86,  101 => 76,  94 => 71,  92 => 70,  47 => 28,  35 => 18,  33 => 6,  29 => 5,  23 => 1,);
    }
}
