<?php

/* PmPortfolioBundle:Portfolio:portfolio.html.twig */
class __TwigTemplate_a46f1b90922d29702a54e5f1a6d5ee1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'innerwrap' => array($this, 'block_innerwrap'),
            'content' => array($this, 'block_content'),
            'javascriptcunstom' => array($this, 'block_javascriptcunstom'),
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
        echo "Portfolio";
    }

    // line 5
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"portfolio\">";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"main\" role=\"main\">
        <ul id=\"portfolio-gallery\" class=\"portfolio-thumbs test\">
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projects"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 11
            echo "              <li class=\"thumbbox\">
                ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "medias"));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 13
                echo "                  ";
                if (($this->getAttribute($this->getContext($context, "project"), "thumb") == $this->getAttribute($this->getContext($context, "media"), "id"))) {
                    // line 14
                    echo "                    <a onclick=\"loadViewAjax('pm_portfolio_projectcard','Pierre Mary | ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
                    echo "','portfolio/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "id"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "id"), "html", null, true);
                    echo "')\">
                      <img class=\"thumb\" src=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
                    echo "bundles/portfolio/images/medias/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "src"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
                    echo "\">
                      <div>
                        <span>";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
                    echo "</span>
                        <span>
                            ";
                    // line 19
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 20
                        echo "                                ";
                        if ((($this->getAttribute($this->getContext($context, "category"), "id") == $this->getAttribute($this->getContext($context, "project"), "category1")) || (($this->getAttribute($this->getContext($context, "category"), "id") == $this->getAttribute($this->getContext($context, "project"), "category2")) && ($this->getAttribute($this->getContext($context, "category"), "id") != 0)))) {
                            // line 21
                            echo "                                    ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
                            echo "<br>
                                ";
                        }
                        // line 23
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 24
                    echo "                        </span>
                    </div>
                    </a>
                  ";
                }
                // line 28
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 29
            echo "              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "        </ul>
    </div>
";
    }

    // line 35
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/js/masonry.min.js\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/js/jquery.hoverdir.js\"></script>
    <script>
        // Hover effect
        \$(' #portfolio-gallery > li ').each( function() { \$(this).hoverdir({
            hoverDelay : 75
        }); } );

        //Return to top
        \$(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            
            \$().UItoTop({ easingType: 'easeOutQuart' });
            
        });

        //Masonry initialisation
        var \$container = \$('#portfolio-gallery');

        \$container.imagesLoaded( function(){
          \$container.masonry({
            itemSelector : '.thumbbox'
          });
        });
        
        // FOnctions resize thumb
        \$(function(){
            horizontalCenter();
            var maxWidth = 0;
            
            setTimeout(resizedImages(),5000);
                //resizedImages();

            \$(window).resize(function() {
                resizedImages();
            });

            function resizedImages(){
                //alert('e');
                if(\$('body').innerWidth()<=320){
                    maxWidth = \$('body').innerWidth();
                }else if(\$('body').innerWidth()<=640){
                    maxWidth = \$('body').innerWidth();
                }else if(\$('body').innerWidth()<=1280){
                    maxWidth = \$('body').innerWidth()/2;
                }else if(\$('body').innerWidth()<=1600){
                    maxWidth = \$('body').innerWidth()/3;
                }else if(\$('body').innerWidth()<=1920){
                    maxWidth = \$('body').innerWidth()/4;
                }else if(\$('body').innerWidth()<=2560){
                    maxWidth = \$('body').innerWidth()/5;
                }else{
                    maxWidth = \$('body').innerWidth()/6;
                }
            
                \$(\".thumb\").css(\"maxWidth\",Math.floor(maxWidth));
            }

            function resizedMain(){
                \$(\"#main\").css(\"height\",\$(window).innerHeight()-\$(\"header\").innerHeight());
            }
            function horizontalCenter(){
                \$('.loader').css(\"marginTop\",\$(window).innerHeight()/2);
                \$('.loader').css(\"display\",'block');
            }

            \$(window).load(function () {
              \$('#main').css('display','block');
              \$('.loader').css('display','none');
            });
        });
        
    </script>
";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Portfolio:portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  134 => 36,  131 => 35,  125 => 31,  118 => 29,  112 => 28,  106 => 24,  100 => 23,  94 => 21,  91 => 20,  87 => 19,  82 => 17,  73 => 15,  64 => 14,  61 => 13,  57 => 12,  54 => 11,  50 => 10,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
