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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Portfolio";
    }

    // line 4
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"portfolio\">";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div id=\"main\" role=\"main\">
        <ul id=\"portfolio-gallery\" class=\"portfolio-thumbs\">
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projects"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 10
            echo "              <li class=\"thumbbox\">
                ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "medias"));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 12
                echo "                  ";
                if (($this->getAttribute($this->getContext($context, "project"), "thumb") == $this->getAttribute($this->getContext($context, "media"), "id"))) {
                    // line 13
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("pm_portfolio_projectcard", array("id" => $this->getAttribute($this->getContext($context, "project"), "id")))), "html", null, true);
                    echo "\">
                      <img class=\"thumb\" src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
                    echo "bundles/portfolio/images/medias/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "src"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
                    echo "\">
                      <div>
                        <span>";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
                    echo "</span>
                        <span>
                            ";
                    // line 18
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 19
                        echo "                                ";
                        if ((($this->getAttribute($this->getContext($context, "category"), "id") == $this->getAttribute($this->getContext($context, "project"), "category1")) || (($this->getAttribute($this->getContext($context, "category"), "id") == $this->getAttribute($this->getContext($context, "project"), "category2")) && ($this->getAttribute($this->getContext($context, "category"), "id") != 0)))) {
                            // line 20
                            echo "                                    ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
                            echo "<br>
                                ";
                        }
                        // line 22
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 23
                    echo "                        </span>
                    </div>
                    </a>
                  ";
                }
                // line 27
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 28
            echo "              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "        </ul>
    </div>
";
    }

    // line 34
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 35
        echo "    <!-- Hover effect -->
    <script src=\"";
        // line 36
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
        return array (  133 => 36,  130 => 35,  127 => 34,  121 => 30,  114 => 28,  108 => 27,  102 => 23,  96 => 22,  90 => 20,  87 => 19,  83 => 18,  78 => 16,  69 => 14,  64 => 13,  61 => 12,  57 => 11,  54 => 10,  50 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 2,);
    }
}
