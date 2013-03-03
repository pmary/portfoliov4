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
            'javascripttop' => array($this, 'block_javascripttop'),
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
        echo "        ";
        $this->displayBlock('javascripttop', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "
        ";
        // line 78
        $this->displayBlock('javascriptcunstom', $context, $blocks);
        // line 80
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

    // line 15
    public function block_javascripttop($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "
        <div id=\"outer-wrap\">
        ";
        // line 23
        $this->displayBlock('innerwrap', $context, $blocks);
        // line 24
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_homepage"), "html", null, true);
        echo "\">Accueil</a></li><!--
                         --><li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_creationpage"), "html", null, true);
        echo "\">Portfolio</a></li><!--
                         --><li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_apropos"), "html", null, true);
        echo "\">A propos</a></li><!--
                         --><li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_contact"), "html", null, true);
        echo "\">Contact</a></li><!--
                         --><li><a class=\"external-link\" href=\"http://www.stonedigitalart.com/\" target=\"_blank\">Blog/Tutoriels</a></li><!--
                         --><li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pm_portfolio_mentions"), "html", null, true);
        echo "\">Mentions légales</a></li>
                    </ul>
                    <a class=\"close-btn\" id=\"nav-close-btn\" href=\"#top\">Retour</a>
                </div>
            </nav>
            <h1 class=\"loader\">
                <span>C</span>
                <span>H</span>
                <span>A</span>
                <span>R</span>
                <span>E</span>
                <span>G</span>
                <span>E</span>
                <span>N</span>
                <span>T</span>
            </h1>
            ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "
        </div><!--/#inner-wrap-->
        </div><!--/#outer-wrap-->

        ";
    }

    // line 23
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"accueil\">";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        // line 58
        echo "            ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            ";
        // line 66
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f2964f0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2964f0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f2964f0_prefixfree.min_1.js");
            // line 74
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "f2964f0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2964f0_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f2964f0_modernizr_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "f2964f0_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2964f0_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f2964f0_masonry.min_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "f2964f0_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2964f0_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f2964f0_easing_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "f2964f0_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2964f0_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f2964f0_jquery.ui.totop.min_5.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "f2964f0_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2964f0_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f2964f0_main_6.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "f2964f0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2964f0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f2964f0.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 76
        echo "        ";
    }

    // line 78
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 79
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
        return array (  258 => 79,  255 => 78,  251 => 76,  207 => 74,  203 => 66,  200 => 65,  197 => 64,  193 => 58,  190 => 57,  184 => 23,  176 => 59,  174 => 57,  155 => 41,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  124 => 24,  122 => 23,  118 => 21,  115 => 20,  111 => 16,  108 => 15,  104 => 14,  78 => 12,  73 => 7,  70 => 6,  64 => 5,  59 => 80,  57 => 78,  54 => 77,  51 => 64,  49 => 20,  42 => 17,  39 => 15,  37 => 6,  33 => 5,  27 => 1,);
    }
}
