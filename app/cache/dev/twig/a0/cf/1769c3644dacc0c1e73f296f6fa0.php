<?php

/* PmPortfolioBundle:Admin:adminhome.html.twig */
class __TwigTemplate_a0cf1769c3644dacc0c1e73f296f6fa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'innerwrap' => array($this, 'block_innerwrap'),
            'content' => array($this, 'block_content'),
            'javascriptcunstom' => array($this, 'block_javascriptcunstom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 4
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"project-management\">";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<div id=\"main\" role=\"main\">
\t\tTest
\t</div>
";
    }

    // line 12
    public function block_javascriptcunstom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Admin:adminhome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  46 => 7,  43 => 6,  37 => 4,  31 => 2,);
    }
}
