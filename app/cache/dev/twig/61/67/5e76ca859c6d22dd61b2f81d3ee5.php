<?php

/* ::admin.html.twig */
class __TwigTemplate_61675e76ca859c6d22dd61b2f81d3ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'innerwrap' => array($this, 'block_innerwrap'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascriptcunstom' => array($this, 'block_javascriptcunstom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Pierre Mary | ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('javascriptcunstom', $context, $blocks);
        // line 78
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6b27d25_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b27d25_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6b27d25_style_1.css");
            // line 15
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
            // asset "6b27d25_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b27d25_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6b27d25_responsive_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
            // asset "6b27d25_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b27d25_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6b27d25_menu_3.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
            // asset "6b27d25_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b27d25_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6b27d25_bootstrap_4.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
            // asset "6b27d25_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b27d25_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6b27d25_bootstrap-responsive_5.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
            // asset "6b27d25_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b27d25_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6b27d25_admin_6.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "6b27d25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b27d25") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6b27d25.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "
        <div id=\"outer-wrap\">
        ";
        // line 24
        $this->displayBlock('innerwrap', $context, $blocks);
        // line 25
        echo "
            <header id=\"top\" role=\"banner\">
                <div class=\"block\">
                    <img src=\"web/bundles/portfolio/images/logo.png\" height=\"50\" alt=\"SDA\" class=\"block-title\">
                    <a class=\"nav-btn\" id=\"nav-open-btn\" href=\"#nav\">Navigation</a>
                </div>
            </header>

            <nav id=\"nav\" role=\"navigation\">
                <div class=\"block\">
                    <h2 class=\"block-title\">Chapters</h2>
                    <ul>
                        ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "                            <li class=\"is-active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_homepage"), "html", null, true);
            echo "\">Accueil</a></li><!--
                            --><li><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_admin_projects"), "html", null, true);
            echo "\">Projets</a></li><!--
                            --><li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                        ";
        } else {
            // line 42
            echo "                            <li class=\"is-active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_homepage"), "html", null, true);
            echo "\">Accueil</a></li><!--
                         --><li><a href=\"a-propos.html\">A propos</a></li><!--
                         --><li><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_creationpage"), "html", null, true);
            echo "\">Portfolio</a></li><!--
                         --><li><a href=\"#\">Blog</a></li><!--
                         --><li><a href=\"#\">Tutoriels</a></li><!--
                         --><li><a href=\"#\">Contact</a></li><!--
                         --><li><a href=\"#\">Mentions légales</a></li>
                        ";
        }
        // line 50
        echo "                    </ul>
                    <a class=\"close-btn\" id=\"nav-close-btn\" href=\"#top\">Retour</a>
                </div>
            </nav>
            
            ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "
        </div><!--/#inner-wrap-->
        </div><!--/#outer-wrap-->

        ";
    }

    // line 24
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"accueil\">";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
        echo "            ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            ";
        // line 64
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8018e4f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8018e4f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8018e4f_modernizr_1.js");
            // line 72
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "8018e4f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8018e4f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8018e4f_masonry.min_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "8018e4f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8018e4f_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8018e4f_easing_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "8018e4f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8018e4f_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8018e4f_jquery.ui.totop.min_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "8018e4f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8018e4f_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8018e4f_main_5.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "8018e4f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8018e4f_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8018e4f_bootstrap.min_6.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "8018e4f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8018e4f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8018e4f.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 74
        echo "        ";
    }

    // line 76
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 77
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 77,  266 => 76,  262 => 74,  218 => 72,  214 => 64,  211 => 63,  208 => 62,  204 => 56,  201 => 55,  195 => 24,  187 => 57,  185 => 55,  178 => 50,  169 => 44,  163 => 42,  156 => 40,  152 => 39,  147 => 38,  145 => 37,  129 => 24,  125 => 22,  122 => 21,  118 => 17,  74 => 15,  69 => 7,  66 => 6,  60 => 5,  55 => 78,  53 => 76,  50 => 75,  47 => 62,  45 => 21,  38 => 18,  36 => 6,  32 => 5,  26 => 1,  153 => 44,  150 => 43,  131 => 25,  116 => 29,  110 => 25,  95 => 23,  91 => 22,  86 => 19,  71 => 17,  67 => 16,  61 => 13,  57 => 12,  51 => 11,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
