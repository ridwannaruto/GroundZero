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
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
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
        // line 30
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
        // line 41
        $this->displayBlock('menu', $context, $blocks);
        // line 58
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
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "                                        
                                    </p>
                                
                                
                                <p align=\"center\">Developed by<br>
                          <img src=\"";
        // line 80
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

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "                \t<div class=\"grid_12\" >
                            
                    \t<nav>
                            <ul class=\"menu\">
                           
                                <li><a href=\"home?id=";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $this->displayBlock('selecthome', $context, $blocks);
        echo ">Home</a></li>
                                <li><a href=\"profile?id=";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " \"";
        $this->displayBlock('selectprofile', $context, $blocks);
        echo ">Profile</a></li>
                                       <li><a href=\"news?id=";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" ";
        $this->displayBlock('selectnews', $context, $blocks);
        echo ">News Feed</a></li>
                                <li><a href=\"projects?id=";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $this->displayBlock('selectprojects', $context, $blocks);
        echo ">Projects</a></li>
                             
                              <li><a href=\"contact?id=";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $this->displayBlock('selectcontacts', $context, $blocks);
        echo ">Contacts</a></li>
                            </ul>
                                
                        </nav>
                    </div>
                       ";
    }

    // line 47
    public function block_selecthome($context, array $blocks = array())
    {
    }

    // line 48
    public function block_selectprofile($context, array $blocks = array())
    {
    }

    // line 49
    public function block_selectnews($context, array $blocks = array())
    {
    }

    // line 50
    public function block_selectprojects($context, array $blocks = array())
    {
    }

    // line 52
    public function block_selectcontacts($context, array $blocks = array())
    {
    }

    // line 74
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
        return array (  235 => 74,  230 => 52,  225 => 50,  220 => 49,  215 => 48,  210 => 47,  198 => 52,  191 => 50,  185 => 49,  179 => 48,  173 => 47,  166 => 42,  163 => 41,  158 => 19,  153 => 17,  150 => 16,  144 => 6,  127 => 80,  120 => 75,  118 => 74,  100 => 58,  98 => 41,  84 => 30,  72 => 20,  69 => 19,  67 => 16,  62 => 14,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  36 => 6,  29 => 1,  82 => 25,  79 => 24,  63 => 12,  58 => 13,  55 => 10,  47 => 6,  44 => 5,  38 => 4,  32 => 3,);
    }
}
