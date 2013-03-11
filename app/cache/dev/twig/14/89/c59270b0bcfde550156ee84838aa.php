<?php

/* PmPortfolioBundle:Ajaxpages:index.html.twig */
class __TwigTemplate_1489c59270b0bcfde550156ee84838aa extends Twig_Template
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
    <canvas id=\"cvs\"></canvas>
</div>

<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/js/snow.js\"></script>
<script>
    \$(function(){
        var maxHeight = 0;

        resizedMain();   

        \$(window).resize(function() {
            resizedMain();
        });

        function resizedMain(){
            \$(\"#main\").css(\"height\",\$(window).innerHeight()-\$(\"header\").innerHeight());
        }
        function horizontalCenter(){
            \$('.loader').css(\"marginTop\",\$(window).innerHeight()/2);
            \$('.loader').css(\"display\",'block');
        }

        \$('#main').css('display','block');
    });

    \$('#inner-wrap').removeClass();
    \$('#inner-wrap').addClass('accueil');
</script>";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Ajaxpages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
