<?php

/* PmPortfolioBundle:Portfolio:index.html.twig */
class __TwigTemplate_069d6587b2b75d37e534d89f5b8321bf extends Twig_Template
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
        echo "Portfolio";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<div id=\"main\" role=\"main\">
\t</div>
";
    }

    // line 8
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 9
        echo "\t<script>
        \$(function(){

            var maxHeight = 0;

            resizedMain();
           

            \$(window).resize(function() {
                resizedMain();
            });

            function resizedMain(){
                \$(\"#main\").css(\"height\",\$(window).innerHeight()-\$(\"header\").innerHeight());
            }
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Portfolio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
