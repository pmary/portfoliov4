<?php

/* PmPortfolioBundle:Admin:adminprojectsedit.html.twig */
class __TwigTemplate_2d01200e67f8879ccabd1e812a16e385 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 5
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"project-management\">";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<div id=\"main\" role=\"main\">

\t\t<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_portfolio_admin_projects_edit", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t\t    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "value"), "title"), "html", null, true);
        echo "

\t\t    <input type=\"submit\" />
\t\t</form>

\t</div>
";
    }

    // line 20
    public function block_javascriptcunstom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Admin:adminprojectsedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  60 => 12,  56 => 11,  50 => 10,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
