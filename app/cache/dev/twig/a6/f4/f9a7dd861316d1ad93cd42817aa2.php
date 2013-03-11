<?php

/* PmPortfolioBundle:Ajaxpages:portfolio.html.twig */
class __TwigTemplate_a6f4f9a7dd861316d1ad93cd42817aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"main\" role=\"main\">
    <ul id=\"portfolio-gallery\" class=\"portfolio-thumbs test\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projects"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 4
            echo "            <li class=\"thumbbox\">
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "medias"));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 6
                echo "                ";
                if (($this->getAttribute($this->getContext($context, "project"), "thumb") == $this->getAttribute($this->getContext($context, "media"), "id"))) {
                    // line 7
                    echo "                <a onclick=\"loadViewAjax('pm_portfolio_projectcard','Pierre Mary | ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
                    echo "','portfolio/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "id"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "id"), "html", null, true);
                    echo "')\">
                    <img class=\"thumb\" src=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
                    echo "bundles/portfolio/images/medias/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "src"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
                    echo "\">
                    <div>
                    <span>";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
                    echo "</span>
                    <span>
                        ";
                    // line 12
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 13
                        echo "                            ";
                        if ((($this->getAttribute($this->getContext($context, "category"), "id") == $this->getAttribute($this->getContext($context, "project"), "category1")) || (($this->getAttribute($this->getContext($context, "category"), "id") == $this->getAttribute($this->getContext($context, "project"), "category2")) && ($this->getAttribute($this->getContext($context, "category"), "id") != 0)))) {
                            // line 14
                            echo "                                ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
                            echo "<br>
                            ";
                        }
                        // line 16
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 17
                    echo "                    </span>
                </div>
                </a>
                ";
                }
                // line 21
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </ul>
</div>

<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/js/masonry.min.js\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/js/jquery.hoverdir.js\"></script>
<script>
    // Hover effect
    \$(' #portfolio-gallery > li ').each( function() { \$(this).hoverdir({
        hoverDelay : 75
    }); } );

    //Return to top
    \$(document).ready(function() {
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
        
        \$(window).resize(function() {
            resizedImages();
        });

        function resizedImages(){            
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
        \$('#main').css('display','block');    

        
    });
        
    </script>";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Ajaxpages:portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 28,  103 => 27,  98 => 24,  91 => 22,  85 => 21,  79 => 17,  73 => 16,  67 => 14,  64 => 13,  60 => 12,  55 => 10,  46 => 8,  37 => 7,  34 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
