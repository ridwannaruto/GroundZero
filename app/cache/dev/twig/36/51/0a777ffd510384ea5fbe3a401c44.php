<?php

/* VolunteerManagementSystemRegistrationBundle:Login:login.html.twig */
class __TwigTemplate_36510a777ffd510384ea5fbe3a401c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo "Volma - Login
";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"wrapper\">
                                  <article class=\"grid_12\">
                                    <h3 class=\"color-1\">Our Services List</h3>
                                    <div class=\"wrapper\">
                                      <article class=\"grid_6 alpha\">
                                        <p>
                                          <figure class=\"img-indent frame\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/images/volunteers.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"347\" height=\"230\" /></figure>
                                        </p>
                                        
                                      </article>
                                      <div class=\"extra-wrap\">
                                        <div class=\"indent-top\">
                                          <ul class=\"list-1\">
                                            <li class=\"phone-numb\">
                                                        <h1 class=\"price\">Sign In</h1>
                                            </li>
                                            <li></li>
                                            <li>
                                              <table width=\"82%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\" align=\"center\">
                                                <tr style=\"vertical-align: top\" align=\"center\">
                                                  <td width=\"62%\" class=\"StoryContentColor\"><h4 class=\"TitleColor\">
                                                     <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("account_login");
        echo "\" method=\"POST\">
                                                    </h4>
                                                    ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
                                                    <h4 class=\"TitleColor\"><strong>User Name</strong>

                                                    <input type=\"text\" id=\"username\" name=\"username\" placeholder=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username"), "html", null, true);
        echo "\" required=\"required\" />
                                                    </h4>
                                                    <p>&nbsp;</p>
                                                    <h4 class=\"TitleColor\"><strong>password</strong>
                                                    <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password"), "html", null, true);
        echo "\" required=\"required\" />

                                                    </h4>
                                                    <p>&nbsp;</p>
                                                    <h4 class=\"TitleColor\"><strong>      </strong>
                                                    <input type=\"checkbox\" id=\"remember\" name=\"remember\" value=\"on\" />
                                                    <label for=\"remember\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("remember_me"), "html", null, true);
        echo "</label>
                                                     <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("submit"), "html", null, true);
        echo "\" />
                                                     <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("account_register");
        echo "\">Sign Up</a>
                                                     </form>
                                                    </h4></td>
                                                </tr>
                                              </table>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </article>
                                </div>
    

    

    
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemRegistrationBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  109 => 46,  105 => 45,  96 => 39,  89 => 35,  83 => 32,  78 => 30,  60 => 15,  52 => 9,  46 => 8,  43 => 7,  38 => 5,  31 => 3,);
    }
}
