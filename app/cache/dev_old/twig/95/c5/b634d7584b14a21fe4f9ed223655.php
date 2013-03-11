<?php

/* PmPortfolioBundle:Portfolio:projectcard.html.twig */
class __TwigTemplate_95c5b634d7584b14a21fe4f9ed223655 extends Twig_Template
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
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"portfolio\">";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"main\" role=\"main\">
        
        <section id=\"fiche\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cover"));
        foreach ($context['_seq'] as $context["_key"] => $context["coverdate"]) {
            // line 13
            echo "            <img id=\"project-image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
            echo "bundles/portfolio/images/medias/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "coverdate"), "src"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coverdate'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "           
            <div id=\"project-infos\">
                <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
        echo "</h1>
                <h2>
                    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
            echo " 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "                     - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "date"), "d-m-Y"), "html", null, true);
        echo "
                     - ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "software"), "html", null, true);
        echo "
                 </h2>
                <p id=\"description\">
                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "description"), "html", null, true);
        echo "
                </p>
            </div>
        </section>
        
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

            centered();
            resizedHeight();

            \$(window).resize(function() {
                centered();
                resizedHeight();
            });


            function centered(){
                \$(\"#description\").css(\"left\",-\$(\"#description\").innerWidth()/2);
            }

            function resizedHeight(){
                \$('#project-image').css(\"maxHeight\", \$(window).innerHeight()-100);
            }
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Portfolio:projectcard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 36,  119 => 35,  116 => 34,  105 => 26,  99 => 23,  94 => 22,  85 => 20,  81 => 19,  76 => 17,  72 => 15,  59 => 13,  55 => 12,  50 => 9,  47 => 8,  41 => 6,  34 => 3,  31 => 2,);
    }
}
