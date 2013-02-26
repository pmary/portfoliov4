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

\t\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_portfolio_admin_projects_edit", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t\t    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "value"), "title"), "html", null, true);
        echo "

\t\t    <input type=\"submit\" />
\t\t</form>

\t</div>
";
    }

    // line 19
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
        return array (  71 => 19,  60 => 11,  56 => 10,  50 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 2,);
    }
}
