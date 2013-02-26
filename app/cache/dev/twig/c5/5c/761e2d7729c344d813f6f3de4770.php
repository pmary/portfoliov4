<?php

/* ::base.html.twig */
class __TwigTemplate_c55c761e2d7729c344d813f6f3de4770 extends Twig_Template
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
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('javascriptcunstom', $context, $blocks);
        // line 68
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
            // asset "e84afde_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e84afde_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e84afde_style_1.css");
            // line 12
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
            // asset "e84afde_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e84afde_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e84afde_responsive_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
            // asset "e84afde_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e84afde_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e84afde_menu_3.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "e84afde"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e84afde") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e84afde.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "
        <div id=\"outer-wrap\">
        ";
        // line 21
        $this->displayBlock('innerwrap', $context, $blocks);
        // line 22
        echo "
            <header id=\"top\" role=\"banner\">
                <div class=\"block\">
                    <img src=\"../bundles/portfolio/images/logo.png\" height=\"50\" alt=\"SDA\" class=\"block-title\">
                    <a class=\"nav-btn\" id=\"nav-open-btn\" href=\"#nav\">Navigation</a>
                </div>
            </header>

            <nav id=\"nav\" role=\"navigation\">
                <div class=\"block\">
                    <h2 class=\"block-title\">Chapters</h2>
                    <ul>
                            <li class=\"is-active\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_homepage"), "html", null, true);
        echo "\">Accueil</a></li><!--
                         --><li><a href=\"a-propos.html\">A propos</a></li><!--
                         --><li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_creationpage"), "html", null, true);
        echo "\">Portfolio</a></li><!--
                         --><li><a href=\"#\">Blog</a></li><!--
                         --><li><a href=\"#\">Tutoriels</a></li><!--
                         --><li><a href=\"#\">Contact</a></li><!--
                         --><li><a href=\"#\">Mentions légales</a></li>
                    </ul>
                    <a class=\"close-btn\" id=\"nav-close-btn\" href=\"#top\">Retour</a>
                </div>
            </nav>
            
            ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
        </div><!--/#inner-wrap-->
        </div><!--/#outer-wrap-->

        ";
    }

    // line 21
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"accueil\">";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "            ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            ";
        // line 55
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cb01551_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cb01551_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cb01551_modernizr_1.js");
            // line 62
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "cb01551_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cb01551_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cb01551_masonry.min_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "cb01551_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cb01551_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cb01551_easing_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "cb01551_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cb01551_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cb01551_jquery.ui.totop.min_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "cb01551_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cb01551_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cb01551_main_5.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "cb01551"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cb01551") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cb01551.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 64
        echo "        ";
    }

    // line 66
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 67
        echo "        ";
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
        return array (  223 => 67,  220 => 66,  216 => 64,  178 => 62,  174 => 55,  171 => 54,  168 => 53,  164 => 47,  161 => 46,  155 => 21,  147 => 48,  145 => 46,  132 => 36,  127 => 34,  113 => 22,  111 => 21,  107 => 19,  104 => 18,  100 => 14,  74 => 12,  69 => 7,  66 => 6,  60 => 5,  55 => 68,  53 => 66,  50 => 65,  47 => 53,  45 => 18,  38 => 15,  36 => 6,  32 => 5,  26 => 1,);
    }
}
