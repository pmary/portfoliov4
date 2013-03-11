<?php

/* PmPortfolioBundle:Ajaxpages:projectcard.html.twig */
class __TwigTemplate_3cc16752e2b393c2926a32889733ab98 extends Twig_Template
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
        echo "    <div id=\"main\" role=\"main\">
        
        <section id=\"fiche\">
            ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cover"));
        foreach ($context['_seq'] as $context["_key"] => $context["coverdate"]) {
            // line 5
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
        // line 7
        echo "           
            <div id=\"project-infos\">
                <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
        echo "</h1>
                <h2>
                    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
            echo " 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo "                     - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "date"), "d-m-Y"), "html", null, true);
        echo "
                     - ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "software"), "html", null, true);
        echo "
                 </h2>
                <p id=\"description\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "description"), "html", null, true);
        echo "
                </p>
            </div>
        </section>
        
    </div>

    <!-- Hover effect -->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/js/jquery.hoverdir.js\"></script>
    <script>
        //Return to top
        \$(document).ready(function() {
            \$().UItoTop({ easingType: 'easeOutQuart' });
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
            function horizontalCenter(){
                \$('.loader').css(\"marginTop\",\$(window).innerHeight()/2);
                \$('.loader').css(\"display\",'block');
            }

        });
        \$('#inner-wrap').removeClass();
        \$('#inner-wrap').addClass('portfolio');
        \$('#main').css('display','block');
    </script>";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Ajaxpages:projectcard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  74 => 18,  68 => 15,  63 => 14,  54 => 12,  50 => 11,  45 => 9,  41 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
