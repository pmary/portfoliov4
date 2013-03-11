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
        // line 16
        echo "        ";
        $this->displayBlock('javascripttop', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 162
        echo "
        ";
        // line 163
        $this->displayBlock('javascriptcunstom', $context, $blocks);
        // line 165
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
        echo "            <script type=\"{ asset('')}}bundles/portfolio/js/hinclude.js\"></script>
        ";
    }

    // line 16
    public function block_javascripttop($context, array $blocks = array())
    {
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
                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "/bundles/portfolio/images/logo.png\" height=\"50\" alt=\"SDA\" class=\"block-title\">
                    <a class=\"nav-btn\" id=\"nav-open-btn\" href=\"#nav\">Navigation</a>
                </div>
            </header>

            <nav id=\"nav\" role=\"navigation\">
                <div class=\"block\">
                    <h2 class=\"block-title\">Chapters</h2>
                    <ul>
                            <li class=\"is-active\"><a onclick=\"loadViewAjax('pm_portfolio_homepage','Pierre Mary | Accueil','/')\">Accueil</a></li><!--
                         --><li><a onclick=\"loadViewAjax('pm_portfolio_creationpage','Pierre Mary | Portfolio','portfolio')\">Portfolio</a></li><!--
                         --><li><a onclick=\"loadViewAjax('pm_portfolio_apropos','Pierre Mary | A propos','a-propos')\">A propos</a></li><!--
                         --><li><a onclick=\"loadViewAjax('pm_portfolio_contact','Pierre Mary | Contact','contact')\">Contact</a></li><!--
                         --><li><a class=\"external-link\" href=\"http://www.stonedigitalart.com/\" target=\"_blank\">Blog/Tutoriels</a></li><!--
                         --><li><a onclick=\"loadViewAjax('pm_portfolio_mentions','Pierre Mary | Mentions légales','mentions')\">Mentions légales</a></li>
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
            <div id=\"loading-zone\">
                ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "            </div>

        </div><!--/#inner-wrap-->
        </div><!--/#outer-wrap-->

        ";
    }

    // line 24
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\">";
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        // line 60
        echo "                ";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            ";
        // line 69
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5b71500_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b71500_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5b71500_prefixfree.min_1.js");
            // line 76
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "5b71500_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b71500_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5b71500_modernizr_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "5b71500_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b71500_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5b71500_easing_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "5b71500_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b71500_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5b71500_jquery.ui.totop.min_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "5b71500_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b71500_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5b71500_main_5.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "5b71500"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b71500") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5b71500.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 78
        echo "            <script>
                /****
                // Gestion de l'historique pour les changements d'adresse
                ****/
                var curentHtml = \$(\"div#loading-zone\").html();
                var curentPageTitle = document.title;
                window.history.pushState({\"html\":curentHtml,\"pageTitle\":curentPageTitle});

                /****
                // Gestion des changements d'adresse en Ajax
                ****/        
                function loadViewAjax(route,pagetitle,url,id){
                    \$(\"div#loading-zone\").html('');
                    \$('#inner-wrap').removeClass();
                    \$('.loader').css('display','block');

                    switch(route){
                        case 'pm_portfolio_homepage':
                            path = \"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_portfolio_homepage_ajax"), "html", null, true);
        echo "\";
                            break;
                        case 'pm_portfolio_creationpage':
                            path = \"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_portfolio_creationpage_ajax"), "html", null, true);
        echo "\";
                            break;
                        case 'pm_portfolio_projectcard':
                            var path = \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_portfolio_projectcard_ajax", array("id" => "id")), "html", null, true);
        echo "\";
                            path = path.replace(\"id\", id);
                            break;
                        case 'pm_portfolio_apropos':
                            path = \"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_portfolio_apropos_ajax"), "html", null, true);
        echo "\";
                            break;
                        case 'pm_portfolio_contact':
                            path = \"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_portfolio_contact_ajax"), "html", null, true);
        echo "\";
                            break;
                        case 'pm_portfolio_mentions':
                            path = \"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_portfolio_mentions_ajax"), "html", null, true);
        echo "\";
                            break;
                    }
                    
                    \$.ajax({
                        type: \"POST\",
                        url: path,
                        cache: \"true\",
                        dataType: \"html\",
                        success: function(result){
                            \$('.loader').css('display','none');
                            \$(\"div#loading-zone\").append(result);
                            document.title = pagetitle;
                            //window.history.pushState({\"pageTitle\":pagetitle},\"\", url);
                            window.history.pushState({\"html\":result,\"pageTitle\":pagetitle},\"\", url);
                            \$(document).ready(function() {
                            var \$container = \$('#portfolio-gallery');

                            \$container.imagesLoaded( function(){
                              \$container.masonry({
                                itemSelector : '.thumbbox'
                              });
                              \$('#portfolio-gallery').masonry('reloadItems');
                            });
                        });
                        },
                        error: function(result) {
                        }
                    });
                }
                window.onpopstate = function(e){
                    if(e.state){
                        document.getElementById(\"loading-zone\").innerHTML = e.state.html;
                        document.title = e.state.pageTitle;
                        \$('#main').css('display','block');
                        \$(document).ready(function() {
                            var \$container = \$('#portfolio-gallery');

                            \$container.imagesLoaded( function(){
                              \$container.masonry({
                                itemSelector : '.thumbbox'
                              });
                              \$('#portfolio-gallery').masonry('reloadItems');
                            });
                        });
                    }
                };
                
            </script>
        ";
    }

    // line 163
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 164
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
        return array (  344 => 164,  341 => 163,  287 => 112,  281 => 109,  275 => 106,  268 => 102,  262 => 99,  256 => 96,  236 => 78,  198 => 76,  194 => 69,  191 => 68,  188 => 67,  184 => 60,  181 => 59,  175 => 24,  166 => 61,  164 => 59,  130 => 28,  125 => 25,  123 => 24,  119 => 22,  116 => 21,  112 => 17,  109 => 16,  104 => 14,  78 => 12,  73 => 7,  70 => 6,  64 => 5,  59 => 165,  57 => 163,  54 => 162,  51 => 67,  49 => 21,  42 => 18,  39 => 16,  37 => 6,  33 => 5,  27 => 1,);
    }
}
