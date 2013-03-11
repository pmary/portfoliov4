<?php

/* PmPortfolioBundle:Portfolio:recentList.html.twig */
class __TwigTemplate_5d8f943afce48ec092821ac4ee2d8d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Articles";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<div id=\"main\" role=\"main\">
\t\tHello, It's work !
\t</div>
";
    }

    // line 9
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 10
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/js/snow.js\"></script>
\t<script>
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
        return "PmPortfolioBundle:Portfolio:recentList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  39 => 5,  36 => 4,  30 => 2,  103 => 41,  96 => 37,  88 => 31,  85 => 30,  78 => 27,  73 => 25,  67 => 22,  63 => 21,  46 => 9,  43 => 5,  37 => 4,  31 => 2,);
    }
}
