<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_43d852aa63ca9dc57bd43e3dcb961d2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascriptcunstom' => array($this, 'block_javascriptcunstom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container\">

\t<section class=\"main\">
\t\t<form class=\"form-3\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
\t\t    <p class=\"clearfix\">
\t\t        <label for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" required=\"required\" />
\t\t    </p>
\t\t    <p class=\"clearfix\">
\t\t        <label for=\"password\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    \t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t    </p>
\t\t    <p class=\"clearfix\">
\t\t        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    \t\t\t<label for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t    </p>
\t\t    <p class=\"clearfix\">
\t\t        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t    </p>       
\t\t</form>​
\t</section>

\t";
        // line 28
        if ($this->getContext($context, "error")) {
            // line 29
            echo "    \t<div id=\"flash-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
\t";
        }
        // line 31
        echo "
</div>

";
    }

    // line 36
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/users/js/modernizr.custom.63321.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  94 => 36,  87 => 31,  81 => 29,  79 => 28,  71 => 23,  65 => 20,  57 => 15,  51 => 12,  47 => 11,  42 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
